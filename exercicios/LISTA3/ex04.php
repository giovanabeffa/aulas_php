<?php

//Criação do array multidimensional
$produtos = [
    ["id" => 1, "nome" => "Processador", "preco" => 1700.00],
    ["id" => 2, "nome" => "Fonte", "preco" => 600.00],
    ["id" => 3, "nome" => "Gabinete", "preco" => 250.00]
];

//Utilização do foreach para percorrer a matriz
foreach ($produtos as $item) {
    echo "<strong>Produto:</strong> {$item["nome"]} - <strong>Valor:</strong> R$ {$item["preco"]}<br>";
};

?>