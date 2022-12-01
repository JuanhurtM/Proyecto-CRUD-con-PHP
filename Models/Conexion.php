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

        //CONSULTAS SQL SIMPLES SIN RETORNO DE DATOS
        public function consultaSimple($sql){
            $this->con->query($sql);
        }

        //CONSULTAS SQL CON RETORNO DE DATOS
        public function consultaRetorno($sql){
            $datos = $this->con->query($sql);
            return $datos;
        }

    } // Fin Clase
?>
