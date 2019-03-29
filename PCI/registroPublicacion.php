<?php
session_start();
require 'admin/config.php';
require 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idPublicacion = null;
    $idInvestigadorPublicacion = null;
    $isnn = limpiarDatos( $_POST['isnn'] );
    $nombrePublicacion = limpiarDatos( $_POST['nombrePublicacion'] );
    $nombreRevista = limpiarDatos( $_POST['nombreRevista'] );
    $paginaInicio = $_POST['paginaInicio'];
    $paginaFin = $_POST['paginaFin'];
    $financiamiento = $_POST['financiamiento'];
    $importeFinanciado = limpiarDatos( $_POST['importeFinanciado'] );
    $reconocimiento = $_POST['reconocimiento'];
    $nombreReconocimiento = limpiarDatos( $_POST['nombreReconocimiento'] );
    $area = $_POST['area'];
    $subArea = $_POST['subArea'];
    $apoyoConacyt = $_POST['apoyoConacyt'];
    $autores = $_POST['autores'];
        
    
    $conexion = conexion($bd_config);
    if (!$conexion) {
        header('Location: ../error.php');
    }

    $statement = $conexion -> prepare ("INSERT INTO publicaciones(idPublicacion, idInvestigadorPublicacion, isnn, nombrePublicacion, nombreRevista, paginaInicio, paginaFin, financiamiento, importeFinanciado, reconocimiento, nombreReconocimiento, area, subArea, apoyoConacyt, autores) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $statement -> bind_param('iissssiisisssss', 
    $idPublicacion,
    $idInvestigadorPublicacion,
    $isnn,
    $nombrePublicacion,
    $nombreRevista,
    $paginaInicio,
    $paginaFin,
    $financiamiento,
    $importeFinanciado,
    $reconocimiento,
    $nombreReconocimiento,
    $area,
    $subArea,
    $apoyoConacyt,
    $autores);

    $statement -> execute();

    header('Location: ' . RUTA . '/usuario.php');

}

require 'views/publicacion.view.php';