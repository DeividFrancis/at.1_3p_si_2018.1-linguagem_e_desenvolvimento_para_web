<?php
$numero_inicial = filter_input(INPUT_POST, 'numeroInicial');
$numero_final = filter_input(INPUT_POST, 'numeroFinal');

if($numero_inicial > $numero_final){
  $get = $numero_final;
  $numero_final = $numero_inicial;
  $numero_inicial = $get;
}

require_once '../modal/calculadora.class.php';
$calculadora = new calculadora();
$res = $calculadora->conta_quantidade_de_numeros_primos_entre_dois_numeros($numero_inicial,$numero_final);

$cont = 0;
foreach ($res as $key => $value) {
  if($value){
    echo "<font color='red'>$key,</font>";
    $cont++;
  }else {
    echo "<font>$key,</font>";
  }
}
echo "<br>Primos = $cont";
 ?>
