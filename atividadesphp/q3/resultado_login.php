<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($usuario === "maria" && $senha === "12345") {
    echo "Autenticação realizada com sucesso!";
} else {
    echo "Você não tem permissão de visualizar essa página.";
}
?>
