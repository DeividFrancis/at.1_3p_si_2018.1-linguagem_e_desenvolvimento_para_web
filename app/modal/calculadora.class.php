<?php
/**
*
*/
class calculadora
{
  public function juros_simples($capital, $taxa, $tempo)
  {
    $capital = str_replace('.','',$capital);
    $capital = str_replace(',','.',$capital);

    $result = Array();
    $result['juros'] = $capital * $taxa * $tempo;
    $result['total'] = $result['juros'] +  $capital;

    $result['total'] = number_format($result['total'],2,",",".");
    $result['juros'] = number_format($result['juros'],2,",",".");
    return $result;
  }

  public function juros_composto($capital, $taxa, $tempo)
  {
    $capital = str_replace('.','',$capital);
    $capital = str_replace(',','.',$capital);

    $result = Array();
    $result['total'] = $capital * pow((1 + $taxa),$tempo);
    $result['juros'] = $result['total'] - $capital;

    $result['total'] = number_format($result['total'],2,",",".");
    $result['juros'] = number_format($result['juros'],2,",",".");
    return $result;
  }

  public function area_circulo($raio)
  {
    $result = M_PI * pow($raio,2);
    return number_format($result,2);
  }

  public function area_trapezio($altura, $base_maior,$base_menor)
  {
    $result = ($altura * ($base_maior + $base_menor))/ 2;
    return number_format($result,2,",",".");
  }

  public function area_losango($diagonal_menor,$diagonal_maior)
  {
    $result = ($diagonal_maior * $diagonal_menor) / 2;
    return number_format($result,2,",",".");
  }

  public function area_cilindro($raio, $altura)
  {
    $result = 2 * M_PI * $raio * ($raio + $altura);
    return number_format($result,2,",",".");
  }

  public function volume_cilindro($raio,$altura)
  {
    $result = M_PI * pow($raio,2) * $altura;
    return number_format($result,2,",",".");
  }

  public function retorna_primo($value)
  {
    $cont = 0;
    for ($i=1; $i <= $value; $i++) {
      if ($value % $i == 0)
      $cont++;
    }
    if($cont == 2){
      return $value;
    }
    return null;
  }

  public function conta_quantidade_de_numeros_primos_entre_dois_numeros($primeiro,$ultimo)
  {

    $result = array();
    for ($i=$primeiro; $i <= $ultimo ; $i++) {

      if($i == 2){
        $result[$i] = true;
        continue;
      }

      for ($j=2; $j < $i ; $j++) {
        if ($i % $j == 0){
          $result[$i] = false;
          break;
        }
        else
        $result[$i] = true;
      }

    }

    return $result;
  }

  // public function equacao_3_grau($i='')
  // {
  //   # code...
  // }
}


?>
