<?php
$raio = filter_input(INPUT_POST,'raio');
// Aceita tanto com  ponto ou virgula
$raio = (float) str_replace(',','.',$raio);

$metragem = filter_input(INPUT_POST,'metragem');

require_once '../modal/calculadora.class.php';
$calculadora = new calculadora();
$res = $calculadora->area_circulo($raio);

var_dump($res);
 ?>
