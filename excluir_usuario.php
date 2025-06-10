<?php
include "conexao.php";
<<<<<<< HEAD
require_once "UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);


if( isset($_GET["id"]) && !empty($_GET["id"]))
{
    $usuario = $repo->buscarPorID($_GET["id"]);
    if ($usuario != null) {
=======
require_once "repository/UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);

if( isset($_GET["id"]) && !empty($_GET["id"]) )
{
    $usuario = $repo->buscarPorId($_GET["id"]);
    if($usuario != null)
    {
>>>>>>> prof/master
        $repo->excluirUsuario($_GET["id"]);
    }
    header('location: usuarios.php');
}
else
{
    header('location: usuarios.php');
}
<<<<<<< HEAD
=======

>>>>>>> prof/master
?>