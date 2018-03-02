<?php
if (filter_has_var(INPUT_POST,'primos')) {
  $numero_inicial = filter_input(INPUT_POST, 'numeroInicial');
  $numero_final = filter_input(INPUT_POST, 'numeroFinal');

  if($numero_inicial > $numero_final){
    $get = $numero_final;
    $numero_final = $numero_inicial;
    $numero_inicial = $get;
  }

  require_once '../../modal/calculadora.class.php';
  $calculadora = new calculadora();
  $res = $calculadora->conta_quantidade_de_numeros_primos_entre_dois_numeros($numero_inicial,$numero_final);

  $html = "";
  $cont = 0;
  foreach ($res as $key => $value) {
      if ($value) {
        $cont++;
        $html.="<strong class='blue-text'>".$key."</strong>, ";
      }else {
        $html.=$key.", ";
      }
  }

  echo "
  <div class='card-panel'>
  <strong>De ".$numero_inicial." até ".$numero_final." contêm ".$cont." números primos!</strong>
  <p class='flow-text'>".$html."</p>
  </div>
  ";
}
 ?>
