<?php

include "conexao.php";
<<<<<<< HEAD
require_once "UsuarioRepository.php";
=======
require_once "repository/UsuarioRepository.php";
>>>>>>> prof/master
$repo = new UsuarioRepository($conexao);


if( isset($_POST["salvar_usuario"]) )
{
    $ativo = isset( $_POST['ativo'] ) ? $_POST['ativo'] : false ;
    $repo->Inserir($_POST['login'],$_POST['senha'],$ativo);
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