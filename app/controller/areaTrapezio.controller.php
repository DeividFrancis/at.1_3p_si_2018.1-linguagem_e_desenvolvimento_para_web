<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){

  $altura = filter_input(INPUT_POST,'altura');
  $base_menor = filter_input(INPUT_POST,'baseMenor');
  $base_maior = filter_input(INPUT_POST,'baseMaior');

  require_once '../../modal/calculadora.class.php';
  $calculadora = new calculadora();
  $res = $calculadora->area_trapezio($altura,$base_maior,$base_menor);

  var_dump($res);
}
 ?>
