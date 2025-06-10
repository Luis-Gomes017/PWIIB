<?php 
<<<<<<< HEAD
    include "cabecalho.php"; 
    include "conexao.php";
    require_once "UsuarioRepository.php";

    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $repo = new UsuarioRepository($conexao);
        $usuario = $repo->buscarPorId($_GET['id']);
    }else{
        header('location: usuarios.php');
    }
?>

=======
include "conexao.php";
require_once "repository/UsuarioRepository.php";
include "cabecalho.php";
if(isset($_GET['id']) && !empty($_GET['id']) )
{
    $repo = new UsuarioRepository($conexao);
    $usuario = $repo->buscarPorId($_GET['id']);
}
else
{
    header('location: usuarios.php');
}
?>
<br />
>>>>>>> prof/master
<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar Usuário</div>
            <div class="card-body">
                <form action="salvar_edicao_usuario.php" method="post">
                    <label>Id</label>
<<<<<<< HEAD
                    <input type="text" value="<?php echo $usuario['ID']?>" class="form-control" name="ID" readonly>
                    <br>
                    <label>Login</label>
                    <input type="text" value="<?php echo $usuario['LOGIN']?>" class="form-control" name="LOGIN">
                    <br>
                    <label>Ativo</label>
                    <select name="ATIVO" class='form-control'>
                        <?php
                            if ($usuario["ATIVO"]) {
                                ?>
                                    <option value="1" selected>Ativado</option>
                                    <option value="0">Desativado</option>
                                <?php
                            }else {
=======
                    <input type="text"
                            value="<?php echo $usuario['ID'] ?>"
                            class="form-control"
                            name="ID"
                            readonly 
                             />
                    <br />
                    <label>Login</label>
                    <input type="text"
                            value="<?php echo $usuario['LOGIN'] ?>"
                            class="form-control"
                            name="LOGIN"
                             />
                    <br />
                    <label>Ativo</label>
                    <select name="ATIVO" class='form-control'>
                        <?php 
                            if($usuario["ATIVO"])
                            {
                                ?>
                                    <option value="1" selected >Ativado</option>
                                    <option value="0">Desativado</option>
                                <?php
                            }else{
>>>>>>> prof/master
                                ?>
                                    <option value="1">Ativado</option>
                                    <option value="0" selected>Desativado</option>
                                <?php
                            }
                        ?>
                    </select>
<<<<<<< HEAD
                    <br>
                    <button class="btn btn-primary" type="submit">Salvar Usuário</button>
=======
                    <br />
                    <button class="btn btn-primary" type="submit">
                            Salvar Usuário
                    </button>

>>>>>>> prof/master
                </form>
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
<?php include "rodape.php"; ?>
=======

<?php include "rodape.php"; ?>

>>>>>>> prof/master
