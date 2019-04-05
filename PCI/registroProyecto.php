<?php
session_start();
require 'admin/config.php';
require 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idProyecto = null;
    $idInvestigadorProyecto = $_SESSION['id'];
    $nombreProyecto = limpiarDatos( $_POST['nombreProyecto'] );
    $lineaInvestigacion = limpiarDatos( $_POST['lineaInvestigacion'] );
    $instanciaRegistro = limpiarDatos( $_POST['instanciaRegistro'] );
    $financiamiento = $_POST['financiamiento'];
    $importeFinanciado = limpiarDatos( $_POST['importeFinanciado'] );
    $fechaInicio = $_POST['fechaInicio'];
    $fechaFin = $_POST['fechaFin'];
    $estatus = $_POST['estatus'];
    $porcentajeAvance = $_POST['porcentajeAvance'];
    $reconocimineto = $_POST['reconocimineto'];
    $nomReconocimiento = limpiarDatos( $_POST['nomReconocimiento'] );
    $descripcion = $_POST['descripcion'];
    $area = $_POST['area'];
    $subArea = $_POST['subArea'];
    $apoyoConacyt = $_POST['apoyoConacyt'];
        
    
    $conexion = conexion($bd_config);
    if (!$conexion) {
        header('Location: ../error.php');
    }

    $conexion -> set_charset("utf8");
    $statement = $conexion -> prepare ("INSERT INTO proyectos(idProyecto, idInvestigadorProyecto, nombreProyecto, lineaInvestigacion, instanciaRegistro, financiamiento, importeFinanciado, fechaInicio, fechaFin, estatus, porcentajeAvance, reconocimineto, descripcion, area, subArea, apoyoConacyt) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $statement -> bind_param('iissssisssissssss', 
    $idProyecto,
    $idInvestigadorProyecto,
    $nombreProyecto,
    $lineaInvestigacion,
    $instanciaRegistro,
    $financiamiento,
    $importeFinanciado,
    $fechaInicio,
    $fechaFin,
    $estatus,
    $porcentajeAvance,
    $reconocimineto,
    $descripcion,
    $area,
    $subArea,
    $apoyoConacyt);

    $statement -> execute();

    header('Location: ' . RUTA . '/usuario.php');

}
require 'views/proyecto.view.php';