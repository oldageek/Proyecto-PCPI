<?php

function conexion($bd_config){
    try {
        $conexion = new mysqli($bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass'], $bd_config['bdname']);

        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}