<?php

$emailEnviado = "<script>alert('hack')</script>";

$emailSeguro = htmlspecialchars($emailEnviado ?? "visitante@anonimo.com");

echo $emailSeguro;

?>