<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>

<body>
    <div>
        <h1>Insertar</h1>
        <form action="guardar.php" method="POST">
            <div>
                <label for="ad">Nombre</label>
                <input type="text" name="nombre" id="ad">
            </div>
            <div>
                <label for="">Paterno</label>
                <input type="text" name="paterno">
            </div>
            <div>
                <label for="">Fecha nacimiento</label>
                <input type="date" name="fecha_nac">
            </div>
            <div>
                <button type="submit">Crear</button>
            </div>

        </form>
    </div>
</body>

</html>