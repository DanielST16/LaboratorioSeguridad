<?php
    $conexion = new mysqli("bwkt7ejdvy9pahw1tfvi-mysql.services.clever-cloud.com",
    "uy9qvducpl8zpdzp",
    "pikGaZdPya28eeHYS0PN",
    "bwkt7ejdvy9pahw1tfvi",
    "3306");
    
    $conexion->set_charset("utf8");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
?>