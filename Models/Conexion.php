<?php namespace Models;

use mysqli;

    //CONEXION A LA BASE DE DATOS

    class Conexion {

        private $datos = array(
            "host" => "Localhost",
            "user" => "juanjose",
            "pass" => "ROOT",
            "db" => "proyectopoo"
        );

        private $con;

        public function __construct(){
            $this -> con = new mysqli($this->datos['host'], $this->datos['user'], 
            $this->datos['pass'], $this->datos['db']);
        }

        public function consultaSimple($sql){
            $this->con->query($sql);
        }

        public function consultaRetorno($sql){
            $datos = $this->con->query($sql);
            return $datos;
        }

    } // Fin Clase
?>
