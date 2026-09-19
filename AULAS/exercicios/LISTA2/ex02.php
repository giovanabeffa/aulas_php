<?php

$peso = 70.00;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Valor do IMC: $imc<br>
    Diagnóstico: Abaixo do peso";
} else if ($imc >= 18.5 && $imc <= 24.9) {
    echo "Valor do IMC: $imc<br>
    Diagnóstico: Peso normal";
} else if ($imc >= 25.0 && $imc <= 29.9) {
    echo "Valor do IMC: $imc<br>
    Diagnóstico: Sobrepeso"; 
} else {
    echo "Valor do IMC: $imc<br>
    Diagnóstico: Obesidade";
}

?>