<?php

// Recebe as variáveis do array associativo
$email = htmlspecialchars($_POST["email"]);
$senha = htmlspecialchars($_POST["senha"]);

// Executa a lógica e gera a saída
echo "E-mail validado " . $email;

?>