<?php include "cabecalho.php"; ?>

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
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu Email" name="email">
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

<?php include "rodape.php"; ?>