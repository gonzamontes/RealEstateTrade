<?php 
require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

// connect db 

$db = conectarDB();

use App\Propiedad;

Propiedad::setDB($db);
?> 