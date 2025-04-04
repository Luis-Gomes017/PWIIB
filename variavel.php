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

    <h1>Variável</h1>

    <h3>Declaração de Variáveis</h3>
    <p>
        A declaração de variáveis em PHP é feita utilizando o símbolo de cifrão ($) antes do nome da variável. O nome da variável deve começar com uma letra ou um underscore (_), seguido por letras, números ou underscores. As variáveis em PHP são dinâmicas, ou seja, não é necessário declarar o tipo da variável antes de usá-la. O valor da variável pode ser alterado ao longo da execução do código.
    </p>
    <p>
        Exemplo de declaração de variável:
    </p>
    <pre>
        $nome = "João";  // variável do tipo string
        $idade = 25;     // variável do tipo inteiro
        $altura = 1.75;   // variável do tipo float
    </pre>
    <?php
        $nome = "Luis";
        $idade = 34;
        $peso = 65.500;
        $altura = 1.77;
        $isAluno = true;
        
        echo "<h5>$nome</h5>";
        echo "$idade +  $peso";
    ?>


    <h1>Constantes</h1>

    <p>
        Em PHP, constantes são valores fixos que não podem ser alterados durante a execução do programa. Elas são declaradas com a palavra-chave define() ou usando a palavra-chave const (para constantes definidas em classes ou escopos específicos).
        A principal diferença entre constantes e variáveis é que, enquanto as variáveis podem ter seu valor alterado, as constantes mantêm o mesmo valor durante todo o script. Constantes podem ser usadas em qualquer lugar do código e não precisam do símbolo de cifrão ($).
    </p>
    <p>
        Exemplo de declaração de constante:
    </p>
    <pre>
     define("PI", 3.14);  // Usando define()
     echo PI;  // Imprime 3.14

     const URL = "https://www.exemplo.com";  // Usando const
     echo URL;  // Imprime https://www.exemplo.com
    </pre>
    <?php
        define("PI",3.14);
        echo PI;
        echo "<br>";
        const coordenador = "Faberson";
        echo coordenador;
    ?>


    <h1>Exercícios</h1>

    <li>Crie 3 variaveis, atribua valor e some os valores.  Imprima na tela </li>
    <?php
        $n1 = 20.50; $n2 = 15.00; $n3 = 17.95;
        echo "1. "; echo $n1 + $n2 + $n3;
        echo "<br><br>";
    ?>
    <li>Crie 2 variaveis, atribua valor e multiplique os valores. Imprima na tela</li>
    <?php
        $x1 = 20; $x2 = 50;
        echo "2. "; echo $x1 * $x2;
        echo "<br><br>";
    ?>
    <li>Crie 3 variáveis, uma para descrição de produto e outras duas para quantidade em estoque e valor de venda, imprima na tela as informações cocatenadas.</li>
    <?php
        $produto = "sabonete"; $estoque = 5; $valor = 6.50;
        echo "3. Produto: $produto <br> Quantidade no estoque: $estoque <br> Preço: $valor ";
        echo "<br><br>";
    ?>
    <li>Crie uma variável boleana, atribua true ou false e imprima na tela</li>
    <?php
        $verdadeiro = true;
        echo "4. $verdadeiro";
    ?>
</div>

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>