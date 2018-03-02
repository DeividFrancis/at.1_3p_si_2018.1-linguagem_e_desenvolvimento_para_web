<?php

if(filter_has_var(INPUT_POST,'areaTrapezio')){
  $altura = filter_input(INPUT_POST,'altura');
  $base_menor = filter_input(INPUT_POST,'baseMenor');
  $base_maior = filter_input(INPUT_POST,'baseMaior');

  require_once '../../modal/calculadora.class.php';
  $calculadora = new calculadora();
  $res = $calculadora->area_trapezio($altura,$base_maior,$base_menor);

  echo "
  <div class='card-panel red'>
    <h3 class='center white-text bold'>".$res."</h3>
  </div>
  ";
}
 ?>
