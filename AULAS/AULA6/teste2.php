<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php $nivelAcesso = "leitor"; ?>

<!-- O if usa os dois pontos -->
<?php if ($nivelAcesso == "admin"): ?>

    <div class="painel-perigoso">
        <h2>Zona de Risco</h2>
        <button>Deletar Sistema</button>
    </div>

<!-- Podemos ter else: ou elseif: também -->
 <?php else: ?>

    <p>Permissão negada.</p>

    <!-- O bloco encerra de forma muito clara -->
<?php endif; ?>
    
</body>
</html>