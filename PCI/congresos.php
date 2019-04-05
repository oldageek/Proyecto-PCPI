<?php

session_start();
require 'admin/config.php';
require 'functions.php';


$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: ../error.php');
}


$resultado = $conexion->query('SELECT * FROM CONGRESOS WHERE idInvestigadorCongreso = '.$_SESSION['id']);


require 'views/misCongresos.view.php';