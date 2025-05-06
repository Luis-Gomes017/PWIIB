<?php
include "conexao.php";
require_once "UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);


if( isset($_GET["ID"]) && !empty($_GET["ID"]))
{
    $usuario = $repo->buscarPorID($_GET["ID"]);
    if ($usuario != null) {
        $repo->excluirUsuario($_GET["ID"]);
    }
    header('location: usuarios.php');
}
else
{
    header('location: usuarios.php');
}
?>