<?php include "cabecalho.php"; ?>

<div class="container">
<h1>While</h1>

<p>
  While é uma estrutura de repetição. Existem 3 configurações para a estrutura de repetição funcionar:
<ol>
  <li>Variavel de controle</li>
  <li>Condição de finalização</li>
  while($i < 10){
    echo "while com indice $i <br>";
    $i++;
  }
</p>

<h2>Do While</h2>
<p>
  A diferença do DO WHILE para o WHILE é que no DO WHILE sempre vai haver no minimo uma execução do bloco de codigos.
  Você avalia de qual estrutura de repetição é adequada
<pre>
  $i = 0;
  do{
    echo "while com indice $i";
    $i++;
  }while($i < 10)
</pre>
<?php
  $i = 0;
  do{
    echo "DO WHILE com indice $i <br>";
    $i = $i + 1;
  }while($i < 10)
?>
</p>
   $i = 0;
   while($i < 10)
    {
      echo "indice $i";
      $i = $i + 1;
    }
</pre>
<?php
  $i = 0;
  while($i < 10)
  {
    echo "while com indice $i <br>";
    $i = $i + 1;
  }
?>
</p>
<h2>Do While </h2>

<p>
A diferença do DO WHile para While é que no DO WHILE sempre vai haver pelo menos 
uma execução do bloco de código.
Você avalia a necessidade de qual estrutura de repetição é adequada.
<pre>
  $i = 0;
  do{
    echo "while com indice $i <br>";
    $i = $i + 1;
  }while($i < 10)
</pre>
<?php 

$i = 0;
  do{
    echo "DO WHILE com indice $i <br>";
    $i = $i + 1;
  }while($i < 10)
?>
</p>
</div>

<?php include "rodape.php"; ?>