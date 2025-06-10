<?php include "cabecalho.php"; ?>

<div class="container">
<h1>Cadastro de Usuário</h1>
<br>

<p>1- Crie um formulário HTML que solicite o nome e a idade de um usuário. Ao enviar o formulário com o método GET, exiba o nome e a idade do usuário na página seguinte.</p>
<form action="salvar_dados.php" method="get">
    <label>Nome: </label>
    <input type="text" name="nome">
    <br>
    <label>Idade: </label>
    <input type="number" name="idade">
    <br>
    <button type="submit">
      Enviar
    </button>
</form>

<br><br>

<p>2- Crie um formulário HTML que receba dois números e, ao enviar com o método GET, exiba a soma desses dois números.</p>
<form action="salvar_dados.php" method="get">
    <label>Numero 1: </label>
    <input type="number" name="numero1">
    <br>
    <label>Numero 2: </label>
    <input type="number" name="numero2">
    <br>
    <button type="submit">
        Enviar
    </button>
</form>

<br><br>

<p>3- Crie um formulário HTML que peça o nome do usuário. Quando o formulário for enviado com o método GET, exiba uma mensagem personalizada dizendo "Olá, [nome]".</p>
<form action="salvar_dados.php" method="get">
    <label>Nome: </label>
    <input type="text" name="nome2">
    <br>
    <button type="submit">
      Enviar
    </button>
</form>

<br><br>

<p>4- Crie um formulário de login que receba o nome de usuário e senha. Quando o formulário for enviado com o método POST, verifique se o nome de usuário e a senha são válidos (pode ser um simples exemplo de validação).</p>
<form action="salvar_dados.php" method="post">
    <label>Nome (Luis): </label>
    <input type="text" name="nome3">
    <br>
    <label>Senha (4586): </label>
    <input type="password" name="senha">
    <br>
    <button type="submit">
      Enviar
    </button>
</form>

<br><br>

<p>5- Crie um formulário HTML que receba dois números e, ao enviar com o método POST, exiba o produto desses números.</p>
<form action="salvar_dados.php" method="post">
    <label>Numero 1: </label>
    <input type="number" name="numero3">
    <br>
    <label>Numero 2: </label>
    <input type="number" name="numero4">
    <br>
    <button type="submit">
      Enviar
    </button>
</form>

<br><br>

<p>6- Crie um formulário HTML que receba o nome e a mensagem de um usuário. Quando o formulário for enviado com o método POST, exiba a mensagem do usuário.</p>
<form action="salvar_dados.php" method="post">
    <label>Nome: </label>
    <input type="text" name="nome4">
    <br>
    <label>Mensagem: </label>
    <input type="text" name="mensagem">
    <br>
    <button type="submit">
      Enviar
    </button>
</form>
</div>

<?php include "rodape.php"; ?>