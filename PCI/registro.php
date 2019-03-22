<?php
session_start();
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: ../error.php');
}

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

    $statement = $conexion -> prepare ("INSERT INTO investigadores VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

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
    if ($conexion -> affected_rows >= 1) {
        header("Location http://localhost/Proyecto-PCPI/PCI/index.php");
    }else{
        echo 'No se agrego nada';
    }

}

require 'views/registro.view.php';