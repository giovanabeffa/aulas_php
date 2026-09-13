<?php

$tentativa = 1;

// Criação da estrutura do...while
do {
    echo "Tentando conectar ao banco de dados... (Tentativa $tentativa)<br>";
    $tentativa++;

//Criação da condição do while 
} while ($tentativa <= 03);

?>