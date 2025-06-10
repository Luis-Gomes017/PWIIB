<?php

include "conexao.php";
<<<<<<< HEAD
require_once "UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);


if( isset($_POST["ID"]) && isset($_POST['LOGIN']))
=======
require_once "repository/UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);

if( isset($_POST["ID"]) && isset($_POST['LOGIN']) )
>>>>>>> prof/master
{
    $repo->Editar($_POST['LOGIN'],$_POST['ID'],$_POST['ATIVO']);
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