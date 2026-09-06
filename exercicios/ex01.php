<?php

$nivelAcesso = 3;

if ($nivelAcesso >= 5) {
    echo "Acesso liberado à sala de servidores.";
} else {
    echo "Acesso negado. Privilégios insuficientes.";
}

?>