<?php

$user = "admin"; 
$pass = "1234";
$role = null;

$user ??= ""; 
$pass ??= "";
$role ??= "guest";

$tentativa = true; 


if ($user === "admin" && $pass === "1234") {
    $mensagem = match ($role) {
        "manager" => "Bem-vindo ao painel gerencial.",
        "guest"   => "Bem-vindo ao portal público.",
    };
    
    echo $mensagem;
} else {
    $alerta = $tentativa ? "Tentativa inválida resgistrada." : "Login não efetuado.";
    
    echo $alerta;
}
