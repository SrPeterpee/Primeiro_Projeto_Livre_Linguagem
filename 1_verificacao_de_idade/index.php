<h1>CARTEIRA DE MOTORISTA</h1>
<h3>Você tem quandtos anos jovem??</h3>

<?php

  $maioridade = 18;
  $idade = 19;

  if($idade > $maioridade){
    echo "Com $idade já era tempo para tirar ein!! <br>";
  } elseif($idade == $maioridade){
    echo "$idade Hamm, vamos fazer sua matricula? <br>";
  } else {
    echo "$idade? Tá achando que com essa idade você vai ficar fazendo randandan?? <br>";
  }
  
  ?>