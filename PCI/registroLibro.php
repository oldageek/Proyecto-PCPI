<?php
session_start();
require 'admin/config.php';
require 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idLibro = null;
    $idInvestigadorLibro = null;
    $isbn = limpiarDatos( $_POST['isbn'] );
    $titulo = limpiarDatos( $_POST['titulo'] );
    $anioCreacion = $_POST['anioCreacion'];
    $volumen = limpiarDatos( $_POST['volumen'] );
    $tomo = limpiarDatos( $_POST['tomo'] );
    $edicion = $_POST['edicion'];
    $editorial = limpiarDatos( $_POST['editorial'] );
    $numPaginas = $_POST['numPaginas'];
    $financiamiento = $_POST['financiamiento'];
    $importeFinanciado = limpiarDatos( $_POST['importeFinanciado'] );
    $estatus = $_POST['estatus'];
    $idioma = $_POST['idioma'];
    $palabraClave1 = limpiarDatos( $_POST['palabraClave1'] );
    $palabraClave2 = limpiarDatos( $_POST['palabraClave2'] );
    $palabraClave3 = limpiarDatos( $_POST['palabraClave3'] );
    $area = $_POST['area'];
    $subArea = $_POST['subArea'];
    $apoyoConacyt = $_POST['apoyoConacyt'];
    $autores = $_POST['autores'];
        
    
    $conexion = conexion($bd_config);
    if (!$conexion) {
        header('Location: ../error.php');
    }

    $statement = $conexion -> prepare ("INSERT INTO libros(idLibro, idInvestigadorLibro, isbn, titulo, anioCreacion, volumen, tomo, edicion, editorial, numPaginas, financiamiento, importeFinanciado, estatus, idioma, palabraClave1, palabraClave2, palabraClave3, area, subArea, apoyoConacyt, autores) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $statement -> bind_param('iissiiiisisisssssssss', 
    $idLibro,
    $idInvestigadorLibro,
    $isbn,
    $titulo,
    $anioCreacion,
    $volumen,
    $tomo,
    $edicion,
    $editorial,
    $numPaginas,
    $financiamiento,
    $importeFinanciado,
    $estatus,
    $idioma,
    $palabraClave1,
    $palabraClave2,
    $palabraClave3,
    $area,
    $subArea,
    $apoyoConacyt,
    $autores);

    $statement -> execute();

    header('Location: ' . RUTA . '/usuario.php');

}


require 'views/libro.view.php';