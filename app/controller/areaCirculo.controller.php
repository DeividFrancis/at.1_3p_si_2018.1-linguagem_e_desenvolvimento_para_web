<?php
if (filter_has_var(INPUT_POST,"circulo")) {
  $raio = filter_input(INPUT_POST,'raio');
  // Aceita tanto com  ponto ou virgula
  $raio = (float) str_replace(',','.',$raio);

  $metragem = filter_input(INPUT_POST,'metragem');

  include '../../modal/calculadora.class.php';
  $calculadora = new calculadora();
  $res = $calculadora->area_circulo($raio);

  echo "
  <div class='card-panel'>
    <h3 class='center deep-purple-text'>".$res."m</h3>
  </div>
  ";
}
 ?>
