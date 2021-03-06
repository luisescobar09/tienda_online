<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Productos disponibles</title>
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center text-danger mt-2 pt-2">Productos disponibles:</h1> <br>
        <?php include 'db/db_list.php'; ?> <br>
        <a href="historial_ventas.php" class="btn btn-primary btn-lg my-1 float-left ">Ver ventas</a>
        <a href="insert.php" class="btn btn-primary btn-lg my-1 float-right ">Nuevo producto</a>

    </div>
</body>

</html>