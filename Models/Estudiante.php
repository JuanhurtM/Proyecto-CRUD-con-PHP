<?php namespace Models;

    class Estudiante{

        private $id;
        private $nombre;
        private $edad;
        private $promedio;
        private $imagen;
        private $id_seccion;
        private $fecha;
        private $con;

        public function __construct(){
            $this->con = new Conexion();
        }

        //METODO LISTAR
        public function listar(){
            $sql = "SELECT t1.*, t2.nombre AS nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion = t2.id";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }

        //METODO INSERTAR
        public  function add(){

        }

        //METODO ACTUALIZAR
        public function update(){

        }

        //METODO ELIMINAR
        public function delete(){

        }

        

    }// Fin de clase

?>