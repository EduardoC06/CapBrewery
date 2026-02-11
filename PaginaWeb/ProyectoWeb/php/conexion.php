<?php

$env = parse_ini_file(__DIR__ . '/../.env');

$usuario = $env['DB_USER'];
$password = $env['DB_PASS'];
$servidor = $env['DB_HOST'];
$basedatos = $env['DB_NAME'];


$conexion = new mysqli($servidor, $usuario, $password, $basedatos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$conexion->set_charset('utf8');

?>