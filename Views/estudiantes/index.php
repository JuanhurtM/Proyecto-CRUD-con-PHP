    <h3>Hola soy la vista de los estudiantes</h3>
<?php 
    $datos = $estudiantes->index();
    while($row = mysqli_fetch_array($datos)){
        echo $row['nombre'];
    }

?>