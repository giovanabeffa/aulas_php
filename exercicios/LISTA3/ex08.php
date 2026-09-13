<?php

//Criação do array indexado
$logs = ["OK", "Aviso", "OK", "Fatal", "Aviso", "OK"];

foreach ($logs as $log) {
    
    //Se a mensagem for "Fatal", é exibido a mensagem de erro fatal e utilizado o camando break para abortar o laço
    if ($log == "Fatal") {
        echo "<span style='color: red;'>Erro fatal encontrado.</span1>";
        break;
    }

    echo "$log<br>";
}

?>