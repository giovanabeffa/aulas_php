<?php

// Declaração  de um array indexado
$alunos = ["João", "Aline", "Fernando", "Beatriz"];

// A função nativa count() conta quantos itens existem dentro do array (3)
$total = count($alunos);
echo $total;

// O laço roda de 0 até 2 (pois 3 é o limite da restrição <)
for ($i = 0; $i < $total; $i++) {
    echo "\nAluno: {$alunos[$i]}";
}

// Acassando o primeiro elemento (índice 0)
// echo "Primeiro aluno:  {$alunos[0]}";

// Acessando o terceiro elemento (índica 2)
// echo "\nTerceiro aluno:  {$alunos[3]}";

// Declaração utilizando chaves nomeadas
$produto = [
    "codigo" => 8492,
    "descricao" => "Notebook Dell",
    "preco" => 4500.00
];

// Acessando o dado através de sua chave nominal
echo "\n\nProduto: {$produto["descricao"]}";

// Um array indexado onde cada posição carrega um array associativo
$catalogo = [
    ["id" => 1, "nome" => "Mouse", "estoque" => 15],
    ["id" => 2, "nome" => "Teclado", "estoque" => 0]
];

// Acessando o estoque do teclado (Índica 1 da lista, chave 'estoque' do array interno)
echo "\n\nEstoque do teclado: {$catalogo[1]["estoque"]}";

$produto = ["Descrição" => "Monitor", "Preco" => 1200.00];

// O PHP extrai automaticamente o nome do índice ($chave) e seu conteúdo ($valor)
foreach ($produto as $chave => $valor) {
    echo "$chave: $valor\n";
}

$protocolo = 1;

// O laço testa se a variável é menor ou igual a 5 ANTES de entrar
while ($protocolo <= 5) {
    echo "\nGerando protocolo nº $protocolo";

    // O incremento manual é obrigatório para não criar um Loop Infinito!
    $protocolo++;
}

echo "\n";

$tentativas = 1;

do {
    echo "\nTentativa de conexção nº $tentativas";
    $tentativas++;

    // A condição de saída é testada apenas APÓS a execução do bloco superior
} while ($tentativas <= 1);

echo "\n";

?>