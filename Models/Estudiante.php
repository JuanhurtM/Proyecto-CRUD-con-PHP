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

        //CONSTRUCTOR
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
            $sql = "INSERT INTO estudiantes(id, nombre, edad, promedio, imagen, id_seccion, fecha) VALUES (null,'{$this->nombre}','{$this->edad}',
                     '{$this->promedio}', '{$this->imagen}', '{$this->id_seccion}', NOW())";
            $this->con->consultaSimple($sql);
        }

        //METODO ACTUALIZAR
        public function update(){
            $sql = "UPDATE estudiantes SET nombre = '{$this->nombre}', edad = '{$this->edad}',
                    promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}'";
                    $this->con->consultaSimple($sql);
        }

        //METODO ELIMINAR
        public function delete(){
            $sql = "DELETE FROM estudiantes WHERE id = '{$this->id}'";
            $this->con->consultaSimple($sql);
        }

        //METODO VIEW
        public function view(){
            $sql = "SELECT t1.*, t2.nombre as nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2
                    ON t1.id_seccion = t2.id WHERE t1.id = '{$this->id}'";
            
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


    }// Fin clase

?>