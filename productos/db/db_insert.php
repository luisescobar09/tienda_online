<?php
    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];
    $existencia = $_GET['existencia'];

    $db = new SQLite3('../../tienda.db');

    $db->exec("INSERT INTO productos (producto,precio,existencias) VALUES ('$nombre', '$precio', '$existencia');");
    
    header("Location: ../index.php");

?>