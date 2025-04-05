<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Defesa Civil</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="/pwiib/imagens/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> Projeto PWII Turma B
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PHP
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="variavel.php">Variavel</a></li>
            <li><a class="dropdown-item" href="if.php">If</a></li>
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><a class="dropdown-item" href="switch.php">Switch</a></li>
            <li><a class="dropdown-item" href="array.php">Array/Vetor</a></li>
            <li><a class="dropdown-item" href="Formulario.php">Formulario</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<style>
  .margem{
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
  }
  </style>
<div class="container text-bg-primary p-4 margem col-md-5">
  <div class="text-center">
    <img src=".\imagens\logo_defesa_civil.png" class="rounded img-thumbnail" alt="logo_defesa_civil.png" width="480" height="310">
  </div>
<form action="verificar_login.php" method="post">
  <div class="mb-3 margem">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu Login" name="email">
  </div>
  <div class="mb-3 margem">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua Senha" name="senha">
    <?php if(isset($_GET["erro"]) && !empty($_GET["erro"])){
       echo "<div class='alert alert-danger p-2 mt-3' role='alert'>";
       echo $_GET["erro"];
       echo "</div>";
       

    }?>
  </div>
  <div class="d-grid gap-2 margem">
    <button type="submit" class="btn btn-warning">Entrar</button>
  </div>
</form>
</div>

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>