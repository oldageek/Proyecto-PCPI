<?php 

require 'admin/config.php';

$conexion = conexion($bd_config);
if(!$conexion){
     echo("Error de conexion con la Base de Datos");
}

require 'views/index.view.php';