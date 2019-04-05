<?php

session_start();
require 'admin/config.php';
require 'functions.php';


$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: ../error.php');
}


$resultado = $conexion->query('SELECT * FROM tesis WHERE idInvestigadorTesis = '.$_SESSION['id']);


require 'views/misTesis.view.php';