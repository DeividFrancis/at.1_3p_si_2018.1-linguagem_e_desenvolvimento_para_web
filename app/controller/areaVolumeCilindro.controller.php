<?php
$raio = filter_input(INPUT_POST,'raio');
$altura = filter_input(INPUT_POST,'altura');

require_once '../modal/calculadora.class.php';
$calculadora = new calculadora();

$area = $calculadora->area_cilindro($raio,$altura);
$volume = $calculadora->volume_cilindro($raio,$altura);

$res = Array('area' => $area, 'volume' => $volume);

var_dump($res);
 ?>
