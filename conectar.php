<?php

    $host = "localhost";
    $database = "securOne";
    $name = "securOne";
    $password = "S3cur01*";

    error_reporting(1);

    $conexion = new mysqli($host, $name, $password, $database);

    if ($conexion->errno) {
        echo "No se puede acceder a la base de datos";
        exit();
    }
?>