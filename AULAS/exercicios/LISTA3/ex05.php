<?php 

$ingressosDisponiveis = 10;

//Criação do laço while que rode enquanto os ingressos disponíveis forem maiores que 0
while ($ingressosDisponiveis > 0) {
    echo "Ingresso validado. Restam: $ingressosDisponiveis.<br>";
    $ingressosDisponiveis--;
};

?>