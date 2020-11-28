<?php
        
        $db = new SQLite3("tienda.db");
        $producto = $_POST["producto"];
        $cantidad = $_POST["cantidad"];
        $precio = $_POST["producto"];
        
        $consulta = $db->query("SELECT * from productos where precio = '$precio';");

        while ($row = $consulta->fetchArray() ) {
                $id_producto = $row['id_producto'];
                $product = $row['producto'];
                $existencia = $row['existencias'];
        }

        if ($existencia < $cantidad) {
            header('Location: tienda-error.php');
        }
        else {
            $nueva_existencia = $existencia - $cantidad;
            $db->exec("UPDATE productos SET existencias='$nueva_existencia'  WHERE id_producto='$id_producto';");
            date_default_timezone_set("America/Mexico_City");
            $fecha_compra = date('d-m-Y');
            $hora_compra = date('H:i:s');
            $precio = $_POST["producto"];
            $cantidad = $_POST["cantidad"];
            $resultado = $precio * $cantidad;
            $pago = $_POST["pagoss"];
            $cambio = $pago - $resultado;

            $db->exec("INSERT INTO ticket (fecha, hora_venta, cantidad_producto, producto, total_producto) VALUES ('$fecha_compra', '$hora_compra', '$cantidad', '$product', '$resultado');");
        
        $detalle_ticket = "<div class='container'>
		  <div class='row justify-content-center mt-2 pt-2 text-white font-italic'>
			  <div class='col-md-7 '>
          <h1 class='display-3 font-weight-bold text-center'>Luis' Sports:</h1>
          <hr class='bg-warning'><br>
          <div class='text-center h3'>
            <div class='form-group'>
               <h3>Fecha: $fecha_compra</h3> <br>
                <h3> Hora: $hora_compra</h3>
                </div> <br>
                        </div> <br> </br>

                        <div class = 'h3 text-center'>
                                    <div class='row form-group'>
                                        <label for='producto' class='col-form-label col-md-12 h1'>Producto:  $product</label>
                        </div>					

                        <div class='row form-group'>
                                <label for='cantidad' class='col-form-label col-md-12 h1'>Cantidad:  $cantidad</label>
                        </div>

                        <div class='row form-group'>
                                        <label for='precio' class='col-form-label col-md-12 h1'>Precio unitario: $precio</label>

                        </div>
                        
                        <div class='row form-group'>
                                        <label for='total' class='col-form-label col-md-12 h1'>Total a pagar:   $resultado</label>

                        </div>           

                        <div class='row form-group'>
                                        <label for='total' class='col-form-label col-md-12 h1'>Paga con:    $pago</label>
                        </div>   

                        <div class='row form-group'>
                                        <label for='total' class='col-form-label col-md-12 h1'>Cambio:   $cambio</label>
                        </div>    
                        </center> <br>
                
                        <div class='row form-group'>
                                        <label for='lol' class='col-form-label col-md-4'></label>
                            <div class='col-md-7'> <br>
                        <a href='tienda.php'>  
                        <button type='' class='btn btn-outline-success btn-lg my-1 float-right' onclick='(cerrarVentana)' id='retunrn'>Comprar nuevamente</button>
                        </a>       
                        </div>

                        </div>
                    </div>
                    </div>";               
    }
?>

<html>
  <head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ticket de compra</title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
    crossorigin="anonymous">
    <script type="text/javascript" src="carrito.js" charset="utf-8">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
  </head>
    
  <body class="bg-dark">
    <?php 
        print($detalle_ticket);
    ?>
  </body>
</html>
