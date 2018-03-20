<?php
if(filter_has_var(INPUT_POST, 'cubo')){
  $detA = filter_input(INPUT_POST,'detA');
  $detB = filter_input(INPUT_POST,'detB');
  $detC = filter_input(INPUT_POST,'detC');
  $detD = filter_input(INPUT_POST,'detD');


  $res = null;
  if($detD < 1){
    $res = "Não existe equação cubica quando o D e menor que 0, isso e equaçaõ do 2 grau";
    resposta($res);
    return;
  }

}

function resposta($res ='')
{
  echo "<div class='card-panel deep-purple-text'>
  <p>
  $res
  </p>
  </div>";
}

 ?>
