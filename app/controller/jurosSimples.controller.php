<?php
if (filter_has_var(INPUT_POST,"simples")) {
  # code...
  $capital = filter_input(INPUT_POST,'capital');
  $taxa = filter_input(INPUT_POST,'taxa');
  $tempo = filter_input(INPUT_POST,'tempo');
  $tipoDeTempo = filter_input(INPUT_POST,'mesAno');


  //Converte anos para meses
  if($tipoDeTempo == 'ano')
  $tempo = $tempo*12;

  // converte juros
  $taxa = $taxa/100;

  require_once '../../modal/calculadora.class.php';
  $calculadora = new calculadora();
  $res = $calculadora->juros_simples($capital,$taxa,$tempo);

  echo "
  <div class='card-panel red'>
  <p class='center white-text bold'>Juros: ".$res['juros']."</p>
  <p class='center white-text bold'>Total: ".$res['total']."</p>
  </div>
  ";
}
 ?>
