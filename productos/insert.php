<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Producto nuevo</title>
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-center mt-2 pt-2 text-danger">Agregar nuevo producto:</h1> <br>
        <a href="index.php">Regresar a lista</a> 
        <form action="db/db_insert.php" method="GET">
            <div class="form-group">
               <br> <label for="nombre" class="font-weight-bold">Nombre del producto:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" placeholder="Ingresa producto">
            </div>
            <div class="form-group">
                <label for="precio" class="font-weight-bold">Precio:</label>
                <input type="number" class="form-control" id="precio" step="any" name="precio" aria-describedby="precio" placeholder="Ingresa costo">
            </div>
            <div class="form-group">
                <label for="existencia" class="font-weight-bold">Cantidad en existencia:</label>
                <input type="number" class="form-control" id="existencia" name="existencia" aria-describedby="existencia" placeholder="Ingresa existencia">
            </div> <br>

            <button type="submit" class="btn btn-success btn-lg my-1 float-right ">Agregar producto</button>
        </form>
    </div>
</body>
</html>