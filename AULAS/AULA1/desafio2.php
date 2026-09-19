<?php
    $quantidade = 2;
    $precoproduto = 4500.50;
    $descontofixo = 250.00;
    $subtotal = $quantidade * $precoproduto;
    $total = $subtotal - $descontofixo;

    echo"--Resumo da compra--<br>Subtotal: $subtotal<br>Total a pagar: $total";
?>