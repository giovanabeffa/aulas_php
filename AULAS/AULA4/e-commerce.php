<?php

echo "Lista de Produtos Disponíveis: \n";

$catalogo = [
    ["produto" => "SSD 1TB", "estoque" => 5, "status" => "ok"],
    ["produto" => "Monitor", "estoque" => 0, "status" => "ok"], //Sem estoqur
    ["produto" => "Bateria", "estoque" => 10, "status" => "recall"], //Problema
    ["produto" => "Teclado", "estoque" => 20, "status" => "ok"]
];

foreach ($catalogo as $item) {
    // Se o estoque for zero, pula esta literação e vai para o próximo produto do array
    if ($item["estoque"] === 0) {
        continue;
    }

    //Se o status for recall, aborta a rendelização da loja imediatamente e sai do loop
    if ($item["status"] === "recall") {
        echo "\nALERTA: Catálogo bloqueando. Recall detectado!";
        break;
    }

    echo "\nProduto: " . $item["produto"] . " (Qtd: " . $item["estoque"] . ")\n";
}


?>