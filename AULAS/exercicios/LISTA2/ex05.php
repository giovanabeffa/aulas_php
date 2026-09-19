<?php

$opcaoDigitada = 1;

$mensagemSetor = match ($opcaoDigitada) {
    1 => "Redirecionando para Suporte Técnico...",
    2 => "Redirecionando para Financeiro...",
    3 => "Redirecionando para Comercial...",
    default => "Opção inválida. Tente novamente.",
    };

echo $mensagemSetor;

?>

<!-- Se passar a opção como texto "1" ao invés do número 1, o código irá para a opção default, pois match utiliza comparação de identidade estrita como forma de evitar bugs.-->