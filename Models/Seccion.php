<?php namespace Models;

    class Seccion{

        private $id;
        private $nombre;
        private $con;

        //CONSTRUCTOR
        public function __construct(){
            $this->con = new Conexion();

        }
    
        //METODO LISTAR
        public function listar(){
            $sql = "SELECT * FROM secciones";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }

        //METODO INSERTAR
        public function add(){
            $sql = "INSERT INTO secciones (id, nombre) VALUES (null, '{$this->nombre}')";
            $this->con->consultaSimple($sql);
        }

        //METODO ELIMINAR
        public function delete(){
            $sql = "DELETE FROM secciones WHERE id = '{$this->id}'";
            $this->con->consultaSimple($sql);
        }

        //METODO ACTUALIZAR
        public function update(){
            $sql = "UPDATE secciones SET nombre = '{$this->nombre}', WHERE id = '{$this->id}'";
            $this->con->consultaSimple($sql);
        }

        //METODO VIEW
        public function view(){
            $sql = "SELECT * FROM secciones WHERE id = '{$this->id}'";
            $datos = $this->con->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($datos);
            return $row;
        }

        //METODOS SET & GETS
        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }

        public function get($atributo){
            return $this->$atributo;
        }



    }//Fin clase

?>