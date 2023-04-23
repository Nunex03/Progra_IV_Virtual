<?php
    $nombreProducto = $_POST['txtNombre'];
    $precioProducto = $_POST['txtPrecioU'];
    $cantidad = $_POST['txtCantidad'];

    $Subtotal = ($precioProducto * $cantidad);
    $IVA = (($precioProducto * $cantidad) * 0.13);
    $CESC = (($precioProducto * $cantidad) *0.05);
    $TotalaPagar = $Subtotal + $IVA + $CESC;

   echo "Subtotal: $" . $Subtotal . "<br>" .
        "IVA: $" . $IVA . "<br>" .
        "CESC: $" . $CESC . "<br>" .
        "Total a Pagar: $" . $TotalaPagar . "<br>";
?>