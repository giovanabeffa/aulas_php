<?php

$carrinho = [
    ["produto" => "Placa Mãe", "preco" => 850.00, "quantidade" => 1],
    ["produto" => "Memória RAM", "preco" => 250.00, "quantidade" => 2],
    ["produto" => "Mouse", "preco" => 120.00, "quantidade" => 0], //Removido da compra
    ["produto" => "Teclado", "preco" => 300.00, "quantidade" => 1]
];

$totalCompra += $subtotal;

echo "RESUMO DO CARRINHO";

foreach($carrinho as $item){

    // REGRA 1
    if ($item["quantidade"] === 0) {
        continue;
    }

    // REGRA 2
    $subtotal = $item["preco"] * $item["quantidade"];

    echo "Item: {$item["produto"]} | ";
    echo "Quantidade: {$item["quantidade"]} | ";
    echo "Valor unitário: {$item["preco"]} | ";
    echo "Subtotal: R$ $subtotal \n";

    $totalCompra += $subtotal;

}

echo "TOTAL A PAGAR: R$ $totalCompra";

?>