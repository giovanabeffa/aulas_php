<?php

// Declaração do array indexado contendo os 5 nomes de categorias
$categorias = ["Ficção", "Tecnologia", "História", "Biografia", "Biologia"];

// Função count() para contar o total (5)
$total = count($categorias);

// Laço roda de 0 até 4, pois o $total é igual a 5
for ($i = 0; $i < $total; $i++) {
    echo "Categoria: {$categorias[$i]}<br>";
}

?>