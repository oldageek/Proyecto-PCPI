<?php

session_start();
require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idTesis = null;
    $idInvetigadorTesis = null;
    $nombreAutor = limpiarDatos( $_POST['nombreAutor'] );
    $paterno = limpiarDatos( $_POST['paterno'] );
    $materno = limpiarDatos( $_POST['materno'] );
    $gradoAcademico = $_POST['gradoAcademico'];
    $area = $_POST['area'];
    $subArea = $_POST['subArea'];
    $apoyoCona = $_POST['apoyoCona'];
    
    echo " ID TESIS[$idTesis] ";
    echo " ID IVESTIGADORTESIS[$idInvetigadorTesis] ";
    echo " NOMBREAUTOR[$nombreAutor] ";
    echo " PATERNO[$paterno] ";
    echo " MATERNO[$materno] ";
    echo " GRADO[$gradoAcademico] ";
    echo " AREA[$area] ";
    echo " SUBAREA[$subArea] ";
    echo " APOYO[$apoyoCona] ";
    
    
    $conexion = conexion($bd_config);
    if (!$conexion) {
        header('Location: ../error.php');
    }

    $statement = $conexion -> prepare ("INSERT INTO tesis(idTesis, idInvestigadorTesis, nombreAutor, paterno, materno, gradoAcademico, area, subArea, apoyoConacyt) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $statement -> bind_param('iisssssss', 
    $idTesis,
    $idInvetigadorTesis,
    $nombreAutor,
    $paterno,
    $materno,
    $gradoAcademico,
    $area,
    $subArea,
    $apoyoCona);

    $statement -> execute();

    //header('Location: ' . RUTA . '/usuario.php');

}

require 'views/tesis.view.php';