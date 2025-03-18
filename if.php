<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII</title>
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
  <h1>If</h1>
  <p>
    A estrutura de decisão é composta por um teste booleano.
    Esse teste verifica uma condição se verdadeiro faça uma coisa se falso faça outra.
    <pre>
      if($numero == 1){
        echo "Aqui significa $numero igual a 1";
      }else{
        echo "Aqui significa $numero diferente de 1";
      }
    </pre>

    <?php
      $numero = 2;
      if($numero == 1){
        echo 'Aqui significa $numero igual a 1';
      }else{
        echo 'Aqui significa $numero diferente de 1';
      }
    ?>
  </p>


  <h2>Estrutura de decisão encadeada</h2>
  <p>
    São varios testes um seguido do outro até algum teste verdadeiro ser encontrado.
    Caso não encontre nenhum positivo o "else" é executado.
    Ao encontrar um teste positivo todos os subsequentes não serão executados.
    <pre>
      $nome = "Luis"
      if($nome == "João"){
        echo "$nome é igual a João";
      }else if($nome == "Maria"){
        echo "$nome é igual a Maria";
      }else if($nome == "Luis"){
        echo "$nome é igual a Luis";
      }else if($nome == "Felipe"){
        echo "$nome é igual a Felipe";
      }else{
        echo "Nenhum nome é igual o conteudo da variavel";
      }
    </pre>
      
    <?php
      $nome = "Luis";
      if($nome == "João"){
        echo '$nome é igual a João';
      }else if($nome == "Maria"){
        echo '$nome é igual a Maria';
      }else if($nome == "Luis"){
        echo '$nome é igual a Luis';
      }else if($nome == "Felipe"){
        echo '$nome é igual a Felipe';
      }else{
        echo "Nenhum nome é igual o conteudo da variavel";
      }
    ?>
  </p>


  <h2>Varios testes em um If</h2>
  <p>
    Em uma estrutura de decisão unica eu consigo realizar dois ou mais testes.
    Neste caso eu preciso utilizar os conectivos "AND" ou "OR" (E ou OU).
    <h4>Conectivo "AND" (E)</h4>
    No exemplo abaixo eu necessito que todas as condições resultem em verdadeiro.
    <pre>
      $numero2 = 35;
      if($numero2 > 10 && $numero2 < 50){
        echo "$numero2 está entre 10 e 50";
      }
      if($numero2 > 36 && $numero2 < 50){
        //este codigo não será executado
      }else{
        echo "$numero2 não está entre 36 e 50";
      }
    </pre>
    <?php
      $numero2 = 35;
      if($numero2 > 10 && $numero2 < 50){
        echo '$numero2 está entre 10 e 50<br>';
      }
      if($numero2 > 36 && $numero2 < 50){
        //este codigo não será executado
      }else{
        echo '$numero2 não está entre 36 e 50';
      }
    ?>
  </p>

  <h4>Conectivo "OR" (OU)</h4>
  <p>
    O conectivo "OU" testa todas as condições e executa o código se apenas uma
    das condições for verdadeira. Caso nenhuma condição for verdadeira o else é executado.
    <pre>
      $telefone = "14998885214";
      if($telefone == "14998885214" || $telefone == "1688885555"){
        echo "Aqui um dos telefone é igual a variavel";
      }
    </pre>
    Quando temos várias condições apenas uma é necessario ao usar o conectivo OU
    representado por dois PIPE (Tecla que fica do lado do Z) ||
  </p>
  <h2>Exercicio</h2>
    <p>
      Crie uma variavel idade preencha com um valor e
      escreva na tela se ela pode ou não entrar em um evento
      considerando as seguintes regras:
      <ul>
        <li>Menor de 18 anos: Não pode entrar.</li>
        <li>Maior ou igual a 18 e menor que 60: Pode entrar.</li>
        <li>Maior ou igual a 60: Entrada gratuita.</li>
      <ul>
    </p>
</div>


<script src="bootstrap.bundle.min.js"></script>
</body>
</html>