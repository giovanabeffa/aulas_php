<?php
    $produtos = [
        ["titulo" => "Livro: Arquitetura Limpa", "preco" => "89,90", "prime" => true],
        ["titulo" => "Teclado Mecânico RGB", "preco" => "250,00", "prime" => true],
        ["titulo" => "Monitor Ultrawide 29", "preco" => "1200,00", "prime" => false],
        ["titulo" => "Mouse Sem Fio Logitech", "preco" => "95,00", "prime" => true],
    ];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="fw-bold mb-4">Resultados para "Engenharia de Software"</h3>

        <!-- O utilitário g-4 cria um espaçamento simétrico (gap) entre todas as colunas da linha -->
         <div class="row g-4">
            
         <!-- O PHP vai imprimir uma nova COLUNA do Grid para cada produto -->
             
            <?php foreach ($produtos as $item): ?>
                
                <!-- Início da Coluna que vai abrigar UM produto -->
                <div class="col-12 col-md-6 col-lg-3">
                    
                <!-- h-100 força todos os cards a terem a mesma altura na linha -->
                    <div class="card h-100 shadow-sm">
                        
                        <!-- Imagem genérica (placegolder) -->
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Produto">

                        <!-- O Flex-column permite empurrar o botão para o rodapé -->
                        <div class="card-body d-flex flex-column">
                            
                            <!-- Injeção Dinâmica dos Títulos e Preços -->
                            <h5 class="card-title fs-6"> <?= $item['titulo'] ?> </h5>
                            
                            <p class="card-text text-success fw-bold fs-4">R$ <?= $item['preco'] ?> </p>
                            
                            <!-- Lógica Condicional: O selo azul só renderiza se for Prime! -->
                            <?php if($item['prime']): ?>
                                <span class="badge bg-info text-dark mb-2 w-50" >Prime</span>
                            <?php endif; ?>

                            <!-- mt-auto empurra este botão amarelo (warning) para baixo -->
                            <button class="btn btn-warning w-100 mt-auto rounded-pill">Comprar</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
         </div>
    </div>
</body>
</html>