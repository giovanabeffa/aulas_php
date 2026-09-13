<?php

$faturamentoTotal = 0;

$transacoes = [
    ["id" => 1, "valor" => 1200.00, "status" => "aprovado"],
    ["id" => 2, "valor" => 70.00, "status" => "estornado"],
    ["id" => 3, "valor" => 100.00, "status" => "fraude"],
    ["id" => 4, "valor" => 500.00, "status" => "aprovado"],
    ["id" => 2, "valor" => 5.00, "status" => "estornado"],
];

foreach ($transacoes as $transacao) {
    if ($transacao["status"] == "estornado") {
        continue;
} else if ($transacao["status"] == "fraude") {
    echo "<span style:'color: red;'>Alestra de Segurança! Caixa bloqueado.</span>";
    break;
} else {
    $faturamentoTotal += $transacao["aprovado"];
}};

echo "Faturamento total apurado: R$ $faturamentoTotal"


?>