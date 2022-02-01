<?php
require 'config/database.php';
require __DIR__.'/vendor/autoload.php';
//Conectarnos a la base de datos
$db = conectarDB();
use App\Productos;
Productos::setDB($db);

$db = conectarDB();
use App\Proveedores;
Proveedores::setDB($db);

$db = conectarDB();
use App\Cliente;
Cliente::setDB($db);
