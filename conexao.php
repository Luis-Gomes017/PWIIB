<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "PW_BD";

    $conexao = new mysql($servidor, $usuario, $senha, $banco);

    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }
?>