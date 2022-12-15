<?php
function conectar()
{
    $conn = mysqli_connect('localhost', 'root', '', 'prueba');

    if ($conn) {
        echo 'conexion exitosa!';
        return $conn;
    } else {
        echo 'conexion fallida!';
        exit;
    }
}
