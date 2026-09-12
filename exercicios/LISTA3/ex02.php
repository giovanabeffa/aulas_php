<?php

// Atribuição dos valores para cada chave
$cliente = [
    "nome" => "João",
    "email" => "joao@email.com",
    "telefone" => "(01) 2345-6789",
    "cidade" => "Ourinhos"
];

// Acessando o dado através de sua chave nominal
echo "O cliente {$cliente["nome"]} mora em {$cliente["cidade"]}. Contato: {$cliente["email"]}";