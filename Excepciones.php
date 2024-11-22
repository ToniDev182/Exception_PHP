<?php

function conectarBD($servidor, $usuario, $contrasena)
{

    if (empty($servidor) || empty($usuario)){
        throw new Exception("No se pudo conectar a la base de datos");
    }

    $conexion = false;

    if (!$conexion) {
        throw new Exception("No se pudo conectar a la base de datos");
    }

    return "conexion a la base de datos con exito";
}

try {
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";

    $resultado = conectarBD($servidor, $usuario, $contrasena);
    echo $resultado;
} catch (Exception $ex) {
    echo "error: " . $ex->getMessage();
}

?>
