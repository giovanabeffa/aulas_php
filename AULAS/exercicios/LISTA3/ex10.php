<?php

$faturamentoTotal = 0;

$transacoes = [
    ["id" => 1, "valor" => 1200.00, "status" => "aprovado"],
    ["id" => 2, "valor" => 70.00, "status" => "estornado"],
    ["id" => 3, "valor" => 100.00, "status" => "fraude"],
    ["id" => 4, "valor" => 500.00, "status" => "aprovado"],
    ["id" => 2, "valor" => 5.00, "status" => "estornado"]
];

//Criação do loop das transações
foreach ($transacoes as $transacao) {
    // Regra 1: Ignorar e pular a transação com o status "estornado"
    if ($transacao["status"] === "estornado") {
        continue;
        }

    // Regra 2: Encerrar o laço se o status for "fraude" 
    if ($transacao["status"] === "fraude") {
        echo "<span style='color: red;'>Alerta de Segurança! Caixa bloqueado.</span><br>";
        break;
         }

    // Regra 3: Somar o os valores das transações se o status for "aprovado"
    if ($transacao["status"] === "aprovado") {
        $faturamentoTotal += $transacao["valor"];
        }
    }


// Exibição do faturamento total apurado
echo "Faturamento total apurado: R$ $faturamentoTotal"

?>