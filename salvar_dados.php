<?php
    if (isset($_GET["nome"]) && ($_GET["idade"])){
        echo $_GET["nome"];
        echo "<br>";
        echo $_GET["idade"];
    }
    echo "<br><br>";

    if (isset($_GET["numero1"]) && ($_GET["numero2"])){
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    echo $numero1 + $numero2;
    }

    echo "<br><br>";

    if (isset($_GET["nome2"])){
    $nome2 = $_GET["nome2"];
    echo "Olá, " , $nome2;
    }

    echo "<br><br>";

    if (isset($_POST["nome3"]) && ($_POST["senha"])){
    $nome3 = $_POST["nome3"];
    $senha = $_POST["senha"];
    if($nome3 == "Luis" && $senha == "4586"){
        echo "Usuario e senha correto";
    }else{
        echo "Usuario e senha incorreto";
    }
    }

    echo "<br><br>";

    if (isset($_POST["numero3"]) && ($_POST["numero4"])){
    $numero3 = $_POST["numero3"];
    $numero4 = $_POST["numero4"];
    echo $numero3 * $numero4;
    }

    echo "<br><br>";

    if (isset($_POST["nome4"]) && ($_POST["mensagem"])){
    $nome4 = $_POST["nome4"];
    $mensagem = $_POST["mensagem"];
    echo "A mensagem do " , $nome4 , " é: ", $mensagem;
    }
?>