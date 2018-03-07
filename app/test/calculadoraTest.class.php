<?php
require_once '../modal/calculadora.class.php';

$calculadora = new calculadora();

// $res = $calculadora->juros_simples(1000,0.08,2);

// $res = $calculadora->juros_composto(6000,12,0.035);

// $res = $calculadora->area_circulo(3);

// $res = $calculadora->area_trapezio(2,8,5);

// $res = $calculadora->area_losango(8,10);

// $res = $calculadora->area_cilindro(3,13);

// $res = $calculadora->volume_cilindro(3,13);

// $res = $calculadora->retorna_primo(5);

$res = $calculadora->conta_quantidade_de_numeros_primos_entre_dois_numeros(0,10);

foreach ($res as $key => $value) {
  if($value){
    echo "<h1>$key</h1>";
  }else{
    echo "<h5>$key</h5>";
  }
}

// echo pow(0.035,12);
 ?>
