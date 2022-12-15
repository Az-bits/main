<?php
$conn =  mysqli_connect("localhost", "root", "", "prueba");

$id = $_GET['id_persona'] ?? null;

$query = "DELETE FROM persona WHERE id=$id";

$res = mysqli_query($conn, $query);

if ($res) {
    echo 'eliminado correctamente';
    header('Location:listar.php');
} else {
    echo "error al eliminar persona";
    exit;
}

mysqli_close($conn);
