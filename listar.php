<?php
    include('database.php');
    $query="SELECT*FROM task";
    $result=mysqli_query($conexion, $query);
    if(!$result){
        die('Query con problemas'.mysqli_error($conexion));
    }
    $json=array();
    while($row=mysqli_fetch_array($result)){
        $json[]=array(
            'name'=>$row['name'],
            'telefono'=>$row['telefono'],
            'description'=>$row['description'],
            'id'=>$row['id']
        );
    }
    $jsonstring=json_encode($json);
    echo $jsonstring;
?>