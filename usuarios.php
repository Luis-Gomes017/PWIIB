<<<<<<< HEAD
<?php
    include "cabecalho.php"; 
    include "conexao.php";
    require_once 'UsuarioRepository.php';

    $repo = new UsuarioRepository($conexao);
    if (isset($_GET['busca']) && !empty($_GET['busca'])){
        $usuarios = $repo->Pesquisar($_GET['busca']);
    }else{
        $usuarios = $repo->buscarTodos();
    }

?>
<div class= "container">
=======
<?php 

    include "cabecalho.php"; 
    include "conexao.php";
    require_once 'repository/UsuarioRepository.php';

    //Crio um objeto do tipo UsuarioRepository chamado repo
    //E recebe a conexão como parametro
    $repo = new UsuarioRepository($conexao);

    if( isset($_GET['busca']) && !empty($_GET['busca']) )
    {
        $usuarios = $repo->Pesquisar( $_GET['busca'] );
    }
    else
    {
        //Chamei o metodo BuscarTodos para puxar 
        // todos usuarios do banco de dados
        $usuarios = $repo->buscarTodos();
    }
    

?>
>>>>>>> prof/master
<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <div class="card-header">
                <b>Lista de usuários</b>
            </div>
            <div class="card-body">
<<<<<<< HEAD
            <form action="usuarios.php" method="get">
                <div class="row">
                    <div class="col-4">
                        <a href="novo_usuario.php" class="btn btn-success">
                            Novo usuário
                        </a>
                    </div>
                    <div class="col-4">
                        <input name="busca" class="form-control" />
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">
                            Pesquisar
                        </button>
                    </div>
              </div>
              </form>
=======
             <form action="usuarios.php" method="get">
                <div class="row">
                        <div class="col-4">
                            <a href="novo_usuario.php" class="btn btn-success">
                            Novo usuário
                            </a>
                        </div>
                        <div class="col-4">
                            <input name="busca" class="form-control" />
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">
                                Pesquisar
                            </button>
                        </div>
                </div>
            </form>   

>>>>>>> prof/master
              <div class="row">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Login</th>
<<<<<<< HEAD
                            <th class='text-center'>Ativo</th>
=======
                            <th>Ativo</th>
>>>>>>> prof/master
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //foreach serve para ler todos os usuarios 
                            // vindos do banco em formato de array chave valor
                            foreach ($usuarios as $user) {
                                echo "<tr>
<<<<<<< HEAD
                                    <td>".$user['ID']."</td>
                                    <td>".$user['LOGIN']."</td>
                                    <td class='text-center'>".$user['ATIVO']."</td>
                                    <td class='text-end'>
                                        <a class= 'btn btn-danger' href='excluir_usuario.php?id=".$user['ID']."'>Excluir</a>
                                        <a class= 'btn btn-warning' href='editar_usuario.php?id=".$user['ID']."'>Editar</a>
                                    </td>
                                </tr>";
=======
                                        <td>".$user['ID']."</td>
                                        <td>".$user['LOGIN']."</td>
                                        <td>".$user['ATIVO']."</td>
                                        <td>
                                            <a class='btn btn-danger'
                                                 href='excluir_usuario.php?id=".$user['ID']."'>Excluir</a>
                                            <a class='btn btn-warning'
                                                 href='editar_usuario.php?id=".$user['ID']."'>Editar</a>
                                        </td> 
                                      </tr>";
>>>>>>> prof/master
                            }
                        ?>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
<<<<<<< HEAD
    </div>
</div>
</div>

<?php
=======

    </div>
</div>



<?php

>>>>>>> prof/master
    include "rodape.php"; 
?>