<?php
$diagonal_maior = filter_input(INPUT_POST, 'diagonalMaior');
$diagonal_menor = filter_input(INPUT_POST, 'diagonalMenor');

$diagonal_maior = (float) str_replace(',','.',$diagonal_maior);
$diagonal_menor = (float) str_replace(',','.',$diagonal_menor);

require_once '../modal/calculadora.class.php';
$calculadora = new calculadora();

$res = $calculadora->area_losango($diagonal_menor,$diagonal_maior);

var_dump($res);
 ?>
