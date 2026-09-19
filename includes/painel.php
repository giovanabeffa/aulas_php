<?php require_once 'includes/cabecalho.php'; ?>
<?php $usuario_logado = false; ?>

<!-- Interface Modular Condicional -->
 <?php if ($usuario_logado): ?>
    <h2>Minha conta</h2>
    <a href="logout.php" class="btn">Sair do Sistema</a>

<?php else: ?>
    <h2>Acesso Restrito</h2>
    <p>Por favor, identifique-se.</p>

    <form>
        <input type="text" placeholder="Usuário">
        <button type="submit">Entrar</button>
    </form>
    
<?php endif; ?>