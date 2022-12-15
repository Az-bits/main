<?php

$conn =  mysqli_connect("localhost", "root", "", "prueba");

$id = $_GET['id_persona'] ?? null;

$query = "SELECT * FROM persona WHERE id = $id";

$respuesta = mysqli_query($conn, $query);

$res = mysqli_fetch_assoc($respuesta);

//var_dump($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <div>
        <h1>Editar persona</h1>
        <form action="actualizar.php" method="POST">
            <div>
                <label for="">ID</label>
                <input type="text" name="id" value="<?= $res['id'] ?>" readonly>
            </div>

            <div>
                <label for="ad">Nombre</label>
                <input type="text" name="nombre" id="ad" value="<?= $res['nombre'] ?>">
            </div>
            <div>
                <label for="">Paterno</label>
                <input type="text" name="paterno" value="<?= $res['paterno'] ?>">
            </div>
            <div>
                <label for="">Fecha nacimiento</label>
                <input type="date" name="fecha_nac" value="<?= $res['fecha_nac'] ?>">
            </div>
            <div>
                <button type="submit">Actualizar</button>
            </div>
        </form>
    </div>
</body>

</html>