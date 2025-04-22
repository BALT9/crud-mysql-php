<?php
    require './config/db.php';
    $ci = $_GET['ci'];

    $sql = "DELETE FROM fraterno WHERE ci = $ci";

    if($conn->query($sql)){
        header("location: index.php");
    }
?>