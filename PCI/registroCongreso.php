<?php

session_start();
require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idCongreso = null;
    $idInvestigadorCongreso = null;
    $nombreCongreso = limpiarDatos( $_POST['nombreCongreso'] );
    $trabajo = limpiarDatos( $_POST['trabajo'] );
    $nombreDocente = limpiarDatos( $_POST['nombreDocente'] );
    $pais = limpiarDatos( $_POST['pais'] );
    $financiamiento = limpiarDatos( $_POST['financiamiento'] );
    $importe = limpiarDatos( $_POST['importe'] );
    $fechaInicio = limpiarDatos( $_POST['fechaInicio'] );
    $fechaFin = limpiarDatos( $_POST['fechaFin'] );
    $tipoParticipacion = limpiarDatos( $_POST['tipoParticipacion'] );
    $palabra1 = limpiarDatos( $_POST['palabra1'] );
    $palabra2 = limpiarDatos( $_POST['palabra2'] );
    $palabra3 = limpiarDatos( $_POST['palabra3'] );
    $colaboradores = limpiarDatos( $_POST['colaboradores'] );
    
    echo " idCongreso=[$idCongreso] ";
    echo " idInvestigadorCongreso=[$idInvestigadorCongreso] ";
    echo " nombreCongreso=[$nombreCongreso] ";
    echo " trabajo=[$trabajo] ";
    echo " nombreDocente=[$nombreDocente] ";
    echo " pais=[$pais] ";
    echo " fianciamiento=[$financiamiento] ";
    echo " importe=[$importe] ";
    echo " fechaIni=[$fechaInicio] ";
    echo " fechaFin=[$fechaFin] ";
    echo " participacion=[$tipoParticipacion] ";
    echo " palabra1=[$palabra1] ";
    echo " palabra2=[$palabra2] ";
    echo " palabra3=[$palabra3] ";
    echo " colaboradores=[$colaboradores] ";
    
    
    
    
    $conexion = conexion($bd_config);
    if (!$conexion) {
        header('Location: ../error.php');
    }

    $statement = $conexion -> prepare ("INSERT INTO congresos(idCongreso, idInvestigadorCongreso, nombreCongreso, trabajoPresentado, nombreDocente, pais, financiamiento, importeFinanciado, fechaInicio, fechaFin, tipoParticipacion, palabraClave1, palabraClave2, palabraClave3, colaboradores) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $statement -> bind_param('iisssssisssssss', 
    $idCongreso,
    $idInvestigadorCongreso,
    $nombreCongreso,
    $trabajo,
    $nombreDocente,
    $pais,
    $financiamiento,
    $importe,
    $fechaInicio,
    $fechaFin,
    $tipoParticipacion,
    $palabra1,
    $palabra2,
    $palabra3,
    $colaboradores);

    $statement -> execute();

    //header('Location: ' . RUTA . '/usuario.php');

}

require 'views/congreso.view.php';