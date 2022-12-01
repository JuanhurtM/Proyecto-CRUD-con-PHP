<?php namespace Controllers;

    class estudiantesController{

        public function index(){
            print "Hola soy el index del estudiante";
        }

        public function ver($num){
            print "Eres el numero:" . $num;
        }

    }// Fin Clase

?>