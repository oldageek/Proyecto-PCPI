<?php

session_start();
require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tituloLibro = limpiarDatos( $_POST['tituloLibro'] );
    $idCapitulo = null;
    $idCapituloInvestigador = $_SESSION['id'];
    $tituloCap = limpiarDatos( $_POST['tituloCap'] );
    $numeroCap = limpiarDatos( $_POST['numeroCap'] );
    $paginaInicio = limpiarDatos( $_POST['paginaInicio'] );
    $paginaFin = limpiarDatos( $_POST['paginaFin'] );
    $descripcion = limpiarDatos( $_POST['descripcion'] );
    $autores = limpiarDatos( $_POST['autores'] );
    
    echo " tituloLibro=[$tituloLibro] ";
    echo " idCapitulo=[$idCapitulo] ";
    echo " idCapituloInvestigador=[$idCapituloInvestigador] ";
    echo " tituloCapitulo=[$tituloCap] ";
    echo " numeroCap=[$numeroCap] ";
    echo " paginaIni=[$paginaInicio] ";
    echo " paginaFin=[$paginaFin] ";
    echo " descripcion=[$descripcion] ";
    echo " autores=[$autores] ";
    
    
    
    $conexion = conexion($bd_config);
    if (!$conexion) {
        header('Location: ../error.php');
    }

    $conexion -> set_charset("utf8");
    $statement = $conexion -> prepare ("INSERT INTO capitulos(idCapitulo, idLibrosCapitulo, tituloCapitulo, numCapitulo, paginaInicio, paginaFin, descripcion, autores) VALUES( ?, ?, ?, ?, ?, ?, ?, ?)");

    $statement -> bind_param('iisiiiss', 
    $idCapitulo,
    $idCapituloInvestigador,
    $tituloCap,
    $numeroCap,
    $paginaInicio,
    $paginaFin,
    $descripcion,
    $autores);

    $statement -> execute();

    //header('Location: ' . RUTA . '/usuario.php');

}

require 'views/capitulo.view.php';