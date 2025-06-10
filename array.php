<?php include "cabecalho.php"; ?>

<div class="container">
<h1>Array</h1>

<p>
  São variaveis que podem guardar uma lista de valores identificados por indice ou chave.
  <pre>
    $frutas = ["banana", "maçã", "abacaxi", "mamão", 10, true, [], array()];
    //ou
    $frutas = array("banana", "maçã", "abacaxi", "mamão");
  </pre>
  <?php
    $frutas = ["banana", "maçã", "abacaxi", "mamão"];
    echo "$frutas[2]<br>";
    
    for ($i = 0; $i < count($frutas); $i++){
      echo"<br>$frutas[$i]";
    }

    array_push($frutas, "limão");
    echo"<br>";

    for ($i = 0; $i < count($frutas); $i++){
      echo"<br>$frutas[$i]";
    }

    array_push($frutas, rand(1, 75));
    echo"<br>";
    
    for ($i = 0; $i < count($frutas); $i++){
      echo"<br>$frutas[$i]";
    }

    $b = [rand(1, 15), rand(1, 15), rand(1, 15), rand(1, 15), rand(1, 15)];
    $i = [rand(16, 30), rand(16, 30), rand(16, 30), rand(16, 30), rand(16, 30)];
    $n = [rand(31, 45), rand(31, 45), rand(31, 45), rand(31, 45), rand(31, 45)];
    $g = [rand(46, 60), rand(46, 60), rand(46, 60), rand(46, 60), rand(46, 60)];
    $o = [rand(61, 75), rand(61, 75), rand(61, 75), rand(61, 75), rand(61, 75)];
  ?>

  <style>
    table, tr, td{
      border: 1px solid;
      font-size:20px;
      padding:10px;
    }
  </style>
  <br><br>
  <table>
    <tr>
      <td>B</td>
      <td>I</td>
      <td>N</td>
      <td>G</td>
      <td>O</td>
    </tr>
    <?php
      for($ifor=0; $ifor < 5; $ifor++){
        echo "<tr>";
        echo "<td>$b[$ifor]</td>";  
        echo "<td>$i[$ifor]</td>";
        echo "<td>$n[$ifor]</td>";
        echo "<td>$g[$ifor]</td>";
        echo "<td>$o[$ifor]</td>";
        echo "</tr>";
      }
    ?>
  </table>

  <?php
    $Sorteio = array(12, 7, 3, 9, 5, 2, 4, 1, 11, 8, 13, 6, 14, 15, 10);

    for ($i=0; $i < 15; $i++){ 
      echo "<h5>Rodada ". ($i+1)." numero sorteado é: $Sorteio[$i]</h5>";
    }
  ?>
  
  ..
  .
  .
</p>
</div>

<?php include "rodape.php"; ?>