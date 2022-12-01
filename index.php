<?php 

    require_once "Config/Autoload.php";
    Config\Autoload::run();
    $test = new Models\Estudiante();
    
    $test->set("id", 1);
    $datos = $test->view();
    print $datos['nombre'];

?>