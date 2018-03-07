<?php
if (filter_has_var(INPUT_POST,"losango")) {
  $diagonal_maior = filter_input(INPUT_POST, 'diagonalMaior');
  $diagonal_menor = filter_input(INPUT_POST, 'diagonalMenor');

  $diagonal_maior = (float) str_replace(',','.',$diagonal_maior);
  $diagonal_menor = (float) str_replace(',','.',$diagonal_menor);

  include '../../modal/calculadora.class.php';
  $calculadora = new calculadora();

  $res = $calculadora->area_losango($diagonal_menor,$diagonal_maior);

  echo "
  <div class='card-panel red'>
  <h3 class='center white-text bold'>".$res."</h3>
  </div>
  ";
}

 ?>
