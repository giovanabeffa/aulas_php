<?php

//Criação do array multidimensional
$funcionarios = [
    ["nome" => "Maria", "status" => "ativo"],
    ["nome" => "João", "status" => "ativo"],
    ["nome" => "Aparecida", "status" => "ativo"],
    ["nome" => "José", "status" => "demitido"]
];

foreach ($funcionarios as $funcionario) {
    //Se o status for "demitido", pula a interação e vai para o próximo array
    if ($funcionario["status"] == "demitido") {
        continue;
}

echo "<strong>Enviando e-mail para:</strong> {$funcionario["nome"]}.<br>";
}

?>