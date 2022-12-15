<?php

$conn =  mysqli_connect("localhost", "root", "", "prueba");

$id = $_POST['id'] ?? null;
$nombre = $_POST['nombre'] ?? null; //
$paterno = $_POST['paterno'] ?? null;
$fecha_nac = $_POST['fecha_nac'] ?? null;

$query = "UPDATE persona SET nombre='$nombre',paterno='$paterno',fecha_nac='$fecha_nac' WHERE id='$id'";

$res = mysqli_query($conn, $query);

if ($res) {
    echo 'registro actulizado';
    header('Location:listar.php');
} else {
    echo 'error al actualizar';
}
