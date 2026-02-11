<?php

    $data = json_decode(file_get_contents('php://input'), true);


    include 'php/conexion.php';
    
    $titulo = $data['titulo'];
    $precio = $data['precioProducto'];

    $sql = "INSERT INTO encargos (titulo, precio_total) VALUES ('$titulo', '$precio')";

    if ($conexion->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . $conexion->error;
    }

    header("Location: productos.php");
    exit;

    $conexion->close();


?>