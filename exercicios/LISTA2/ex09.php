<?php

$servidorEmManutencao = true;
$usuarioAdmin = true;

if (!$servidorEmManutencao || $usuarioAdmin) {
    echo "Acesso liberado.";
} else {
    echo "Acesso negado. Servidor em manutenção.";
};

?>