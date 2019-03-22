<?php
session_start();
require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = null;
    $curp = limpiarDatos( $_POST['curp'] );
    $nombre = limpiarDatos( $_POST['nombre'] );
    $apellidoPaterno = limpiarDatos( $_POST['apellidopaterno'] );
    $apellidoMaterno = limpiarDatos( $_POST['apellidomaterno'] );
    $genero = $_POST['genero'];
    $paisnacimiento = $_POST['paisNacimineto'];
    $correo = limpiarDatos( $_POST['mail'] );
    $password = limpiarDatos( $_POST['pass'] );
    $confirmpassword = limpiarDatos( $_POST['confirmpass'] );
    $direccion = limpiarDatos( $_POST['direccion'] );
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];
    $cargo = $_POST['cargo'];
    $grado = $_POST['grado'];
    $tipo = $_POST['tipo'];

    $conexion = conexion($bd_config);
    if (!$conexion) {
        header('Location: ../error.php');
    }

    $statement = $conexion -> prepare ("INSERT INTO investigadores(idInvestigador, curp, nombre, paterno, materno, genero, paisNacimiento, domicilio, entidad, pais, correo, pass, carAcademico, gradoAcademico, tipoPadron) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $statement -> bind_param('issssssssssssss', 
    $id,
    $curp,
    $nombre,
    $apellidoPaterno,
    $apellidoMaterno,
    $genero,
    $paisnacimiento,
    $direccion,
    $estado,
    $pais,
    $correo,
    $password,
    $cargo,
    $grado,
    $tipo);

    $statement -> execute();

    header('Location: ' . RUTA . '/index.php');

}

require 'views/registro.view.php';