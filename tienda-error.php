<!DOCTYPE HTML>
<html lang=es>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Luis' sports</title>

	<!-- Bootstrap - CSS -->

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
                <div class="alert alert-danger text-center font-weight-bold" role="alert">
                Error al procesar la compra, la cantidad ingresada es mayor a la de nuestras existencias, intente de nuevo.
                </div>
				<h1 class="display-4 font-weight-bold text-center">Encuentra el jersey de tu equipo favorito aquí:</h1>
				<hr class="bg-warning">
				<h5 class="pb-0 mb-0">Compra ahora:</h5>
				<p class="text-danger small pt-0 mt-0">* Todos los campos son obligatorios.</p>
				<!--- formulario -->
				<form  name="validar" action="ticket.php" method="POST" onsubmit="return avanzar()"> 

					<div class="row form-group">
						<label for="producto" class="col-form-label col-md-4 h1">Elige:</label>
            <div class="col-md-6">
              <select class="form-control text-center" id="producto" name="producto" required >
                <option >SELECCIONA</option>
                <?php
                     $db = new SQLite3("tienda.db");
                     $resultado = $db->query("SELECT * from productos where existencias > 0;");
                     while ($row = $resultado->fetchArray() ) {
                ?>
                        <option value="<?php echo $row['precio'] ?>">  <?php echo $row['producto'] ?> </option>; 
                <?php
                     }
                ?>
                
                </select>
            </div>
          </div>					

          <div class="row form-group">
						<label for="cantidad" class="col-form-label col-md-4 h1">Cantidad:</label>
            <div class="col-md-6">
              <input type="number" id="cantidad" name="cantidad" min="1" max="100" class="form-control" required>
            </div>
          </div>

          <div class="row form-group">
						<label for="edad" class="col-form-label col-md-4"></label>
            <div class="col-md-7">
          <input type="button"  onclick="total()" id="totales" value="Agregar al carrito" class="btn btn-outline-primary btn-lg my-1 float-right">              
            </div>
          </div><br>

           <div class="row form-group">
						<label for="edad" class="col-form-label col-md-4 h1">Detalles del carrito:</label>
            <div class="col-md-6">
              <textarea class="form-control"  id="detalles" name="detalles" readonly rows="5"required> </textarea>
            </div> 
            </div> 
          <style type="text/css"> 
          textarea {
            resize :  none;
          } 
          </style>
          <div class="row form-group">
						<label for="cantidad_pagar" class="col-form-label col-md-4 h1">Cantidad a pagar:</label>
            <div class="col-md-6">
              <input type="number" id="cantidad_pagar" name="cantidad_pagar" class="form-control" readonly placeholder="0">
            </div>
          </div>

          <div class="row form-group">
						<label for="pagos" class="col-form-label col-md-4 h1">Ingresa pago:</label>
            <div class="col-md-6">
              <input type="number" id="pagos" name="pagoss" class="form-control"  min="1" required step="any">
            </div>
          </div><br>

        <button type="reset" class="btn btn-outline-warning btn-lg my-1 float-left">Limpiar</button>
 
        <div class="row form-group">
						<label for="lol" class="col-form-label col-md-4"></label>
            <div class="col-md-7">
          <button type="submit" class="btn btn-outline-success btn-lg my-1 float-right "  " id="pagototes">Pagar</button> <br> </br> <br>
            <p class="text-danger small text-right">Al hacer click se generará tu ticket de compra</p>           
        </div>

        </form>
        </div>
      </div>
    </div>
  </body>
</html>