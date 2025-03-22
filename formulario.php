<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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

<div class="container">
<h1>Cadastro de Usuário</h1>
<br>

<p>1- Crie um formulário HTML que solicite o nome e a idade de um usuário. Ao enviar o formulário com o método GET, exiba o nome e a idade do usuário na página seguinte.</p>
<form action="salvar_dados.php" method="get">
    <label>Nome</label>
    <input type="text" name="nome">
    <br>
    <label>Idade</label>
    <input type="number" name="idade">
    <br>
    <button type="submit">
      Enviar
    </button>
</form>

<br><br>

<p>2-Crie um formulário HTML que receba dois números e, ao enviar com o método GET, exiba a soma desses dois números.</p>
<form action="salvar_dados.php" method="get">
    <label>Numero 1</label>
    <input type="number" name="numero1">
    <br>
    <label>Numero 2</label>
    <input type="number" name="numero2">
    <br>
    <button type="submit">
        Enviar
    </button>
</form>

<br><br>

<p>3-Crie um formulário HTML que peça o nome do usuário. Quando o formulário for enviado com o método GET, exiba uma mensagem personalizada dizendo "Olá, [nome]".</p>
<form action="salvar_dados.php" method="get">
    <label>Nome</label>
    <input type="text" name="nome2">
    <br>
    <button type="submit">
      Enviar
    </button>
</form>

<br><br>

<p>4-Crie um formulário de login que receba o nome de usuário e senha. Quando o formulário for enviado com o método POST, verifique se o nome de usuário e a senha são válidos (pode ser um simples exemplo de validação).</p>
<form action="salvar_dados.php" method="post">
    <label>Nome (Luis)</label>
    <input type="text" name="nome3">
    <br>
    <label>Senha (4586)</label>
    <input type="password" name="senha">
    <br>
    <button type="submit">
      Enviar
    </button>
</form>

<br><br>

<p>5-Crie um formulário HTML que receba dois números e, ao enviar com o método POST, exiba o produto desses números.</p>
<form action="salvar_dados.php" method="post">
    <label>Numero 1</label>
    <input type="number" name="numero3">
    <br>
    <label>Numero 2</label>
    <input type="number" name="numero4">
    <br>
    <button type="submit">
      Enviar
    </button>
</form>

<br><br>

<p>6-Crie um formulário HTML que receba o nome e a mensagem de um usuário. Quando o formulário for enviado com o método POST, exiba a mensagem do usuário.</p>
<form action="salvar_dados.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome4">
    <br>
    <label>Mensagem</label>
    <input type="text" name="mensagem">
    <br>
    <button type="submit">
      Enviar
    </button>
</form>
</div>

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>