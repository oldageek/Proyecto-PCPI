<?php

session_start();
require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idArticulo = null;
    $idInvetigadorArticulo = $_SESSION['id'];
    $issn = limpiarDatos( $_POST['issn'] );
    $tituloRevista = limpiarDatos( $_POST['tituloRevista'] );
    $nombreRevista = limpiarDatos( $_POST['nombreRevista'] );
    $numeroRevista = limpiarDatos( $_POST['numeroRevista'] );
    $volumen = limpiarDatos( $_POST['volumen'] );
    $anioPublicacion = limpiarDatos( $_POST['anioPublicacion'] );
    $paginaInicio = limpiarDatos( $_POST['paginaInicio'] );
    $paginaFin = limpiarDatos( $_POST['paginaFin'] );
    $palabra1 = limpiarDatos( $_POST['palabra1'] );
    $palabra2 = limpiarDatos( $_POST['palabra2'] );
    $palabra3 = limpiarDatos( $_POST['palabra3'] );
    $area = $_POST['area'];
    $subArea = $_POST['subArea'];
    $apoyoCona = $_POST['apoyoCona'];
    $autores = $_POST['autores'];
    
<<<<<<< HEAD
=======
    /*echo " id articulo=[$idArticulo] ";
    echo " id investigador tesis=[$idInvetigadorArticulo] ";
    echo " issn=[$issn] ";
    echo " titulorevista=[$tituloRevista] ";
    echo " nombreRevista=[$nombreRevista] ";
    echo " numeroRevista=[$numeroRevista] ";
    echo " volumen=[$volumen] ";
    echo " anioPublicacion=[$anioPublicacion] ";
    echo " paginaIni=[$paginaInicio] ";
    echo " paginaFin=[$paginaFin] ";
    echo " palabra1=[$palabra1] ";
    echo " palabra2=[$palabra2] ";
    echo " palabra3=[$palabra3] ";
    echo " area=[$area] ";
    echo " subArea=[$subArea] ";
    echo " apoyo=[$apoyoCona] ";
    echo " autores=[$autores] ";
    */
    
>>>>>>> b1e19bc5c365a175b34020be2ae30dd61a67da7b
    
    $conexion = conexion($bd_config);
    if (!$conexion) {
        header('Location: ../error.php');
    }

    $conexion -> set_charset("utf8");
    $statement = $conexion -> prepare ("INSERT INTO articulos(idArticulo, idInvestigadorArticulo, issn, tituloArticulo, nombreRevista, numeroRevista, volumenRevista, anioPublicacion, paginaInicio, paginaFin, palabraClave1, palabraClave2, palabraClave3, area, subArea, apoyoConacyt, autores) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $statement -> bind_param('iisssiiiiisssssss', 
    $idArticulo,
    $idInvetigadorArticulo,
    $issn,
    $tituloRevista,
    $nombreRevista,
    $numeroRevista,
    $volumen,
    $anioPublicacion,
    $paginaInicio,
    $paginaFin,
    $palabra1,
    $palabra2,
    $palabra3,
    $area,
    $subArea,
    $apoyoCona,
    $autores);

    $statement -> execute();

    header('Location: ' . RUTA . '/usuario.php');

}

require 'views/articulo.view.php';