<?php
if (filter_has_var(INPUT_POST,'composto')) {
  $capital = filter_input(INPUT_POST,'capital');
  $taxa = filter_input(INPUT_POST,'taxa');
  $tempo = filter_input(INPUT_POST,'tempo');
  $tipoDeTempo = filter_input(INPUT_POST,'mesAno');


  //Converte anos para meses
  if($tipoDeTempo == 'ano')
  $tempo = $tempo*12;

  // converte juros
  $taxa = $taxa/100;

  include '../../modal/calculadora.class.php';
  $calculadora = new calculadora();
  $res = $calculadora->juros_composto($capital,$taxa,$tempo);

  echo "
  <div class='card-panel'>
  <p class='center  deep-purple-text'>Juros: R$ ".$res['juros']."</p>
  <p class='center  deep-purple-text flow-text'>Total: R$ ".$res['total']."</p>
  </div>
  ";
}
 ?>
