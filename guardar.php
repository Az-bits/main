<?php
//para ver si llega los datos
// var_dump($_POST);

$conn =  mysqli_connect("localhost", "root", "", "prueba");

var_dump($_POST['nombre']['one']);
$nombre = $_POST['nombre'] ?? null;
$paterno = $_POST['paterno'] ?? null;
$fecha_nac = $_POST['fecha_nac'] ?? null;

$query = "INSERT INTO persona VALUES(null,'$nombre','$paterno','$fecha_nac')";

$res = mysqli_query($conn, $query);

if (!$res) {
    echo 'error al insetar datos';
} else {
    echo 'Good!!!';
    header('Location: listar.php');
}
