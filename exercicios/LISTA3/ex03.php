<?php

// Criação do array associativo
$configuracoes = ["dominio" => "unifio.edu.br", "https" => "ativado", "limite_upload" => "20MB"];

//Extração do índice $chave e seu conteúdo $valor
foreach ($configuracoes as $chave => $valor) {
    echo "<strong>" . $chave . "</strong>" . ": " . $valor . "<br>";
}