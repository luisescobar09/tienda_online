<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Historial de ventas</title>
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center text-danger mt-2 pt-2">Historial de ventas:</h1> <br>
        <?php include 'db/db_ticket.php'; ?> <br>
        <a href="index.php" class="btn btn-primary btn-lg my-1 float-right ">Regresar</a>

    </div>
</body>

</html>