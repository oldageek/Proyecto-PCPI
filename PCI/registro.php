<?php
session_start();
require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo($_POST);
}

require 'views/registro.view.php';