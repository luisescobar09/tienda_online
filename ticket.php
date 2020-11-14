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
	  <div class="container">
		  <div class="row justify-content-center mt-2 pt-2 text-white font-italic">
			  <div class="col-md-7 ">
          <h1 class="display-3 font-weight-bold text-center">Luis' Sports:</h1>
          <hr class="bg-warning"><br>
          <div class="text-center h3">
          <script type="text/javascript">
            //<![CDATA[
            function makeArray() {
            for (i = 0; i<makeArray.arguments.length; i++)
            this[i + 1] = makeArray.arguments[i];}
            var months = new makeArray('01','02','03','04','05',
            '06','07','08','09','10','11','12');
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;
            document.write("Fecha: "+day + "-" + months[month] + "-" + year);
            //]]>
          </script> 

          <script type="text/javascript">
            var d = new Date();
            document.write("Hora: "+d.getHours(),':'+d.getMinutes(),':'+d.getSeconds());
          </script>
          </div> <br> </br>

          <div class = "h3 text-center">
					<div class="row form-group">
						<label for="producto" class="col-form-label col-md-6 h1">Producto:</label>
            <div class="col-md-6 h3">
              <?php  
                $producto = $_POST["producto"];
                switch ($producto) {
                  case "1550":
                    echo "Jersey Cruz Azul local.";
                    break;
                  case "1250":
                    echo "Jersey Pachuca local.";
                    break;
                  case "1400":
                    echo "Jersey América visitante.";
                    break;
                  case "1350":
                    echo "Jersey Pumas visitante.";
                    break;
                  case "1300":
                    echo "Jersey Tigres local.";
                    break;
                  case "1200":
                    echo "Jersey Monterrey visitante.";
                    break;
                  case "950":
                    echo "Jersey Puebla local.";
                    break;
                  case "1050":
                    echo "Jersey Tijuana local.";
                    break;  
                  default:
                    echo "Artículo no válido o no disponible.";
                }
              ?>
            </div>
          </div>					

          <div class="row form-group">
						<label for="cantidad" class="col-form-label col-md-6 h1">Cantidad:</label>
            <div class="col-md-6">
              <?php  
                $cantidad = $_POST["cantidad"];
                print ($cantidad." artículo(s).");
               ?> 
            </div>
          </div>

          <div class="row form-group">
						<label for="precio" class="col-form-label col-md-6 h1">Precio unitario:</label>
            <div class="col-md-6">
              <?php  
                $precio = $_POST["producto"];
                print ("$ ".$precio.".");
               ?> 
            </div>
          </div>
          

          <div class="row form-group">
						<label for="total" class="col-form-label col-md-6 h1">Total a pagar:</label>
            <div class="col-md-6">
              <?php  
                $precio = $_POST["producto"];
                $cantidad = $_POST["cantidad"];
                $resultado = $precio * $cantidad;
                print ("$ ". $resultado.".");
               ?> 
            </div>
          </div>           

          <div class="row form-group">
						<label for="total" class="col-form-label col-md-6 h1">Paga con:</label>
            <div class="col-md-6">
              <?php  
                $pago = $_POST["pagoss"];
                print ("$ ".$pago.".");
               ?> 
            </div>
          </div>   

        <div class="row form-group">
						<label for="total" class="col-form-label col-md-6 h1">Cambio:</label>
            <div class="col-md-6">
              <?php  
                $precio = $_POST["producto"];
                $cantidad = $_POST["cantidad"];
                $resultado = $precio * $cantidad;
                $pago = $_POST["pagoss"];
                $cambio = $pago - $resultado;
                print ("$ ". $cambio.".");
               ?> 
            </div>
          </div>    
        </center>
 
        <div class="row form-group">
						<label for="lol" class="col-form-label col-md-4"></label>
            <div class="col-md-7">
          <a href="tienda.php">  
          <button type=" " class="btn btn-outline-success btn-lg my-1 float-right " onclick="(cerrarVentana)" id="retunrn">Comprar nuevamente</button>
          </a>       
        </div>

        </div>
      </div>
    </div>
  </body>
</html>