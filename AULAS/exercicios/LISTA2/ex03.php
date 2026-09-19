<?php

$valorCompra = 370.90;
$clientePremium = false;
$frete = 20.00;
$valorTotal = $valorCompra + $frete;

echo "";

if (($valorCompra > 150.00 && $clientePremium) || $valorCompra >= 500.00) {
    echo "Frete Grátis Liberado! <br>
    Total a pagar: R$ $valorCompra";
} else {
    echo "Valor da compra: R$ $valorCompra <br>
    Frete Padrão Aplicado <br>
    Valor do frete: R$ $frete <br>
    Total a pagar: R$ $valorTotal";
}

?>