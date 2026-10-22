<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI e Componente Bootstrap</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Painel UNIFIO</a>

            <!-- O Botão Hambúrguer para Mobile -->
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#meuMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Menu Oculto em Telas Pequenas -->
            <div class="collapse navbar-collapse" id="meuMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="logout.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container border border-dark p-3 mt-3">
        <!-- Classe base .btn unida à classe de intenção -->
        <a href="editar.php?id=1" class="btn btn-warning btn-sm">Editar</a>

        <!-- Ação Destrutiva -->
        <a href="excluir.php?id=1" class="btn btn-danger btn-sm">Excluir</a>

        <!-- Botão vazado (outline) e Desativado -->
        <button class="btn btn-outline-primary" disabled>Sem Estoque</button>

        <!-- Alerta de Sucesso Verde -->
        <div class="alert alert-success mt-3">
            <strong>Sucesso!</strong> Produto gravado no banco de dados.
        </div>

        <!-- Alerta de Erro Vermelho -->
        <div class="alert alert-danger">
            <i class="fa-solid fa-tringle-exclamation"></i>
            Erro: Email já cadastrado!
        </div>

        <!-- Card com borda colorida destacada na lateral esquerda -->
        <div class="card shadow-md border-0 border-start border-primary border-4">
            <div class="card-body">

                <!-- Rótulo da Métrica -->
                <h6 class="text-muted text-uppercase mb-1">Faturamento Mensal</h6>

                <!-- Valor Dinâmico vindo do PHP -->
                <h3 class="fw-bold text-dark mb-0">R$ 45.230,00</h3>
            </div>
        </div>
    </div>

    <!-- Script do Bootstrap (Necessário para o menu hambúrguer abrir no mobile e modais funcionarem) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>