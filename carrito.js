function total()  {
  var cantidad = parseInt(document.getElementById("cantidad").value);
  var producto = parseFloat(document.getElementById("producto").value);
  
  var articulo = document.getElementById("producto");
  var seleccionado = articulo.options[articulo.selectedIndex].text;
  var cant = document.getElementById("cantidad").value;
  var precio = document.getElementById("producto").value;
  
  if (cant == null || cant == "" || seleccionado == null || seleccionado == "SELECCIONA") {
      alert("No has ingresado algún producto o cantidad, verifica.");
  }

  else {

    if (cantidad<=0) {
      alert("La cantidad de productos debe ser mayor a 0, verificar datos.");
    }

    else {
      var cantidad_pagar = cantidad * producto;
      document.getElementById("cantidad_pagar").value = cantidad_pagar;
      var arreglo = ["Artículo: "+ seleccionado+ ".\nCantidad: "+cant+ " artículo(s).\nPrecio unitario: $"+precio+ ".\nTotal por producto: $"+ cantidad_pagar+"."]
      document.getElementById("detalles").value = arreglo;
    }
    
  }  
  
}


function avanzar()  {
  var pago = parseFloat(document.getElementById("pagos").value);
  var cantidad = parseInt(document.getElementById("cantidad").value);
  var producto = parseFloat(document.getElementById("producto").value);
  var cantidad_pagar = cantidad * producto;
  var validar = document.getElementById("pagototes");
  if (pago.length==0 || pago == "" || pago <= 1 || pago < cantidad_pagar || cantidad_pagar==null || cantidad_pagar==0) {
      alert("No se puede procesar el pago, verifica datos.");
      //validar.disabled = true;
      return false;
  }
  else {

    //validar.disabled = false;
  }
      	        
}