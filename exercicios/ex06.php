<?php

$pagamentoAprovado = true;

$statusBadge = ($pagamentoAprovado === true) ? "Aprovado" : "Pendente";

echo $statusBadge;

?>