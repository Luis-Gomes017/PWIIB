<?php include "logado.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desenvolvimento de Sistemas</title>
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="estilo.css" rel="stylesheet" />
    <style>
=======
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="estilo.css" rel="stylesheet" />
    <style>

>>>>>>> prof/master
          .btn-color {
              background-color: #0e1c36;
              color: #fff;
          }
<<<<<<< HEAD
=======

>>>>>>> prof/master
          .profile-image-pic {
              height: 200px;
              width: 200px;
              object-fit: cover;
          }
          body {
              background-color: #F0F0F0;
          }
<<<<<<< HEAD
=======


>>>>>>> prof/master
          .cardbody-color {
              /*background-color: #ebf2fa;*/
              background-color: #17458F;
          }
<<<<<<< HEAD
=======

>>>>>>> prof/master
          a {
              text-decoration: none;
          }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
<<<<<<< HEAD
    <a class="navbar-brand" href="index.php">
      <img src="/pwiib/imagens/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> Projeto PWII Turma B
    </a>
=======
    <a class="navbar-brand" href="#">
      
     <img src="/pwiib/imagens/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24" />
      Projeto PW 2 Turma B
  </a>
>>>>>>> prof/master
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
<<<<<<< HEAD
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PHP
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="variavel.php">Variavel</a></li>
=======
       <li class="nav-item">
            <a class="nav-link text-white" href="https://www.globo.com" > Acesse a Globo por aqui </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            php
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="professores.php">Professores</a></li>
>>>>>>> prof/master
            <li><a class="dropdown-item" href="if.php">If</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><a class="dropdown-item" href="switch.php">Switch</a></li>
            <li><a class="dropdown-item" href="array.php">Array/Vetor</a></li>
<<<<<<< HEAD
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Formulario.php">Formulario</a></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class= "nav-link" href="instalar.php">
            Instalar o banco
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="usuarios.php" > 
              Usuarios
            </a>
        </li>
      </ul>
      <?php
      if (basename($_SERVER['PHP_SELF']) != 'login.php') {
      ?>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item text-white">
              Bem vindo <?php echo $_SESSION["Nome"]; ?> <a href="logoff.php"> Faça o logoff aqui </a>
          </li>
        </ul>
      <?php
      }
      ?>
    </div>
  </div>
</nav>
=======
          </ul>
        </li><!--Fim do menu dropdonw -->
        <li class="nav-item">
            <a class="nav-link text-white" href="instalar.php" > 
              Instalar o banco 
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="usuarios.php" > 
              Usuarios
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="disciplinas.php" > 
              Disciplinas
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="perguntas.php" > 
              Perguntas
            </a>
        </li>
      </ul><!--Fim do menu  -->
<?php
      if (basename($_SERVER['PHP_SELF']) != 'login.php') {
        ?>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item text-white">
                    Bem vindo <?php echo $_SESSION["Nome"]; ?> <a href="logoff.php"> Faça o logoff aqui </a>
                </li>
        </ul>

        <?php
      }
?>

    
    </div>
  </div>
</nav>
<div class="container">


>>>>>>> prof/master
