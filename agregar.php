<?php
    require './config/db.php';

    $ci = $_GET["ci"];
    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
    $antiguedad = $_GET["antiguedad"];

    $sql = "INSERT INTO fraterno(ci,nombre,edad,antiguedad) VALUES($ci,'$nombre',$edad,$antiguedad)";

    if($conn->query($sql)){
        echo 'agregado correctamente';
        header('location: index.php');
    }
?>