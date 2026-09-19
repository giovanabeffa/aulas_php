<?php
    // Lógica no topo do arquivo
    $nomeUsuario = "Marcelo";

    $emailRecuperado = "contato@unifio.br";
    $status = "erro";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- O PHP injeta o dado dinâmico -->
    <h1>Bem-vindo, <?= $nomeUsuario ?>!</h1>
    
    <p>Seu painel está pronto.</p>

    <!-- Injetando valor no atributo 'value' -->
    <input type="email" name="email" value="<?= $emailRecuperado ?>">


    <!-- Injetando classe CSS baseada na varável -->
    <div class="alerta alerta--<?= $status ?>">
        Preencha os dados corretamente!
    </div>
</body>
</html>