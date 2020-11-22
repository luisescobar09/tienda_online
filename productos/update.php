<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Actualizar producto</title>
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center text-danger mt-2 pt-2">Actualizar producto:</h1> <br>
        <a href="index.php">Regresar a lista</a>

        <form action='db/db_update.php' method='GET'> <br>
            <?php include 'db/details_update.php'; ?> <br>
            <button type='submit' class="btn btn-success btn-lg my-1 float-right ">Confirmar actualización</button>
        </form>

    </div>
</body>

</html>