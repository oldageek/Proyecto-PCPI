<?php
session_start();
require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $conexion = conexion($bd_config);
    if (!$conexion) {
        header('Location: ../error.php');
    }

    if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
        $correo = limpiarDatos( $_POST['correo'] );
        $contrasena = $_POST['contrasena'];
    }

    $statement = $conexion -> prepare(
        'SELECT correo, pass FROM investigadores WHERE correo = ? AND pass = ?'
    );
    $statement -> bind_param("ss", $correo, $contrasena);

    $statement -> execute();
    $resultado = $statement -> fetch();
    if (empty($resultado)) {
        echo "<script type='text/javascript'>";
            mostrarMensaje();
        echo "</script>";
    }else {
        
        header('Location: ' . RUTA . '/usuario.php');
    }

}

require 'views/login.view.php';

?>

<script>
    function mostrarMensaje(){
        const div = document.createElement('div');
        div.classList = 'alert alert-danger mt-3';
        div.appendChild( document.createTextNode('Correo ó contraseña incorrectas') );
        const formulario = document.querySelector('.formularioLog');
        fomulario.appendChild(div);
        setTimeout(() => {
            this.limpiarMensaje();
        }, 4000)
    }
    
    function limpiarMensaje(){
        const alert = document.querySelector('.alert');
        if(alert){
            alert.remove();
        }
    }
</script>
