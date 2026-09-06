<?php

// DECLARAÇÃO DE VARIÁVEIS
$nomeCliente = "Marcelo";
$planoBase = 150.50;
$qtdRamExtra = 4;
$valorRamExtra = 12.00;
$taxaImposto = 0.15;
$descontoFidelidade = 25.00;

// REGRAS DE NEGÓCIO (OPERAÇÕES)

// 1. Custo da RAM
$custo = $qtdRamExtra * $valorRamExtra;

// 2. Subtotal
$subtotal = $planoBase + $custo;

// 3. Aplicação do desconto
$desconto = $subtotal - $descontoFidelidade;

// 4. Cálculo do Imposto
$imposto = $desconto * $taxaImposto;

// 5. Total Final
$total = $imposto + $desconto;

// 6. Programa de Pontos
$pontos = (int)($total / 50);
$resto = (int)$total % 50;


// IMPRESSÃO DO RECIBO
echo "--- FATURA DA NUVEM ---<br>";
echo "Cliente: $nomeCliente<br>";
echo "Subtotal dos serviços: R$ $subtotal<br>";
echo "Desconto aplicado: R$ $descontoFidelidade<br>";
echo "Valor base para impostos: R$ $desconto<br>";
echo "Imposto calculado (15%): R$ $imposto<br>";
echo "TOTAL A PAGAR: R$ $total<br><br>";
echo "--- PROGRAMA DE PONTOS ---<br>";
echo "Pontos adquiridos: $pontos<br>";
echo "Valor restante para o próximo ponto: R$ $resto";

?>