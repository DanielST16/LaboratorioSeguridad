<?php
require 'conexion.php';

// Función para insertar usuarios con contraseñas encriptadas
function insertarUsuario($nombre, $password) {
    global $conexion;
    $password_encriptada = hash('sha256', $password);
    $sql = $conexion->query("INSERT INTO usuario (nombre, password) VALUES ('$nombre', '$password_encriptada')");
    return $sql === TRUE;
}

// Función para verificar contraseñas
function verificarPassword($nombre, $password_ingresada) {
    global $conexion;
    $sql = $conexion->query("SELECT password FROM usuario WHERE nombre = '$nombre'");
    if ($datos = $sql->fetch_object()) {
        $password_hash = hash('sha256', $password_ingresada);
        return $password_hash === $datos->password;
    } else {
        return false;
    }
}

?>