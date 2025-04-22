<?php
    require './config/db.php';
    if(isset($_GET["ci"],$_GET["nombre"],$_GET["edad"],$_GET["antiguedad"])){
        $ci = $_GET["ci"];
        $nombre = $_GET["nombre"];
        $edad = $_GET["edad"];
        $antiguedad = $_GET["antiguedad"];

        $sql = "UPDATE fraterno SET nombre = '$nombre', edad = $edad, antiguedad = $antiguedad WHERE ci = $ci";
        if($conn->query($sql)){
            header("location: index.php");
        }
    }
?>