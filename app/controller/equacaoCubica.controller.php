<?php
if(filter_has_var(INPUT_POST, 'cubo')){
  $detA = filter_input(INPUT_POST,'detA');
  $detB = filter_input(INPUT_POST,'detB');
  $detC = filter_input(INPUT_POST,'detC');
  $detD = filter_input(INPUT_POST,'detD');

  require_once '../../modal/equacaoCubica.php';
  $detA = (float) $detA;
  $detB = (float) $detB;
  $detC = (float) $detC;
  $detD = (float) $detD;
  $res = (Array) resolve_equacao($detA,$detB,$detC,$detD);
  if($res[0] === "nao tem" ){
    resposta($res);
  }else {
    echo "<div class='card-panel deep-purple-text'>".$res[0]."</div>";
  }
}

function resposta($res)
{
  echo "<div class='card-panel deep-purple-text'>
  <p> Raiz 1: <b>".$res['r1']."</b> </p>
  <p> Raiz 2: <b>".$res['r2']."</b> </p>
  <p> Raiz 3: <b>".$res['r3']."</b> </p>
  </div>";
}

 ?>
