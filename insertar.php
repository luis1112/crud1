<?php
    include('database.php');
    if (isset($_POST['name'])){
        $nombre = $_POST['name'];
        $descripcion = $_POST['description'];
        $telefono = $_POST['telefono'];
        $query = "INSERT INTO task(name, telefono, description) VALUES('$nombre','$telefono','$descripcion')";
        $resultado = mysqli_query($conexion, $query);
        if(!$resultado){
            die('sentencia ha fallado');
        }
        echo "Se registró correctamente";
    }	
?>
