<?php

$turma = [
    ["nome" => "Maria", "nota1" => 9.0, "nota2" => 10.0],
    ["nome" => "José", "nota1" => 6.0, "nota2" => 8.0],
    ["nome" => "João", "nota1" => 4.5, "nota2" => 5.0]
];

foreach ($turma as $aluno) {
    //Cálculo da média de cada aluno
    $media = ($aluno["nota1"] + $aluno["nota2"]) / 2;

    // Definição dos status "Aprovado" e "Reprovado"
    if ($media >= 6) {
        $status = "<span style='color: green;'>Aprovado</span>";
    } else {
        $status = "<span style='color: red;'>Reprovado</span>";
    }

    echo "{$aluno["nome"]} - Média: $media - Status: $status.<br>";
};

?>