<?php

$conn =  mysqli_connect("localhost", "root", "", "prueba");

$query = 'SELECT * FROM persona';

$res = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Persona</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</head>

<body>
    <div>
        <h1>Listado</h1>
        <a href="crear.php">Nuevo</a>
        <table border=2 cellspacing='0'>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>PATERNO</th>
                <th>FECHA NACIMIENTO</th>
                <th>ACCIONES</th>
            </tr>

            <?php foreach ($res as $p) { ?>
                <tr>
                    <td><?= $p['id'] ?> </td>
                    <td><?= $p['nombre'] ?> </td>
                    <td><?= $p['paterno'] ?> </td>
                    <td><?= $p['fecha_nac'] ?> </td>
                    <td>
                        <a href="editar.php?id_persona=<?= $p['id'] ?>" class="">Editar</a>
                        <a href="eliminar.php?id_persona=<?= $p['id'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>