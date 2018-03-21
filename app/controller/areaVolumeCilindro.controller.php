<?php
if (filter_has_var(INPUT_POST,'cilindro')) {
  # code...
  $raio = filter_input(INPUT_POST,'raio');
  $altura = filter_input(INPUT_POST,'altura');
  if ($raio != 0 && $altura != 0) {
    require_once '../../modal/calculadora.class.php';
    $calculadora = new calculadora();

    $area = $calculadora->area_cilindro($raio,$altura);
    $volume = $calculadora->volume_cilindro($raio,$altura);

    $res = Array('area' => $area, 'volume' => $volume);

    echo "
    <div class='card-panel '>
    <h5 class='center  deep-purple-text'>Área: ".$res['area']."m<sup>2<sup></h5>
    <h5 class='center  deep-purple-text'>Volume: ".$res['volume']."m<sup>3<sup></h5>
    </div>
    ";
  }else {
    echo "
    <div class='card-panel '>
    <p class='center  deep-purple-text'>Verifique os campos</p>
    </div>
    ";
  }
}
 ?>
