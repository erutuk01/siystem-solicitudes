<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=btmxmay_solicitud","root","");
                return $conectar;
            } catch (Exception $e)  {
                print "error bd: ". $e->getMessage() . "<br/>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("Set NAMES 'utf8'");
        }

        public function ruta(){
            return "http://localhost/solicitudes/";
        }
    }

?>