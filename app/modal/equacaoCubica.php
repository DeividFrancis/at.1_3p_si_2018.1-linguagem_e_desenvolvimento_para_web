<?php
function resolve_equacao($a,$b,$c,$d)
{
  $res = Array();
  $res[0] = "nao tem";
  if($a == "" || $a == " " || $a==0){
    return $res['erro'] = "Se a = 0 ñ é uma equação cubica";
  }
  if($d == "" || $d == " " || $d==0){
    return $res['erro'] = "Se d = 0 ñ é uma equação cubica";
  }
$A = $b/$a;
$B = $c/$a;
$C = $d/$a;

$p = $B-$A*$A/3;
$q = $C-$A*$B/3+2*$A*$A*$A/27;

$D = $q*$q/4+$p*$p*$p/27;
$pi = M_PI;

if($D < 0)
{
  //ok
  echo "D < 0";
  $M = sqrt(-$D);
  $r = sqrt($q * $q/4+$M*$M);
  $t = acos(-$q/2.0/$r);
  $raiz = 2 * pow($r,1/3) * cos($t/3) -$A/3;
  $r2 = 2 * pow($r,1/3) * cos(($t+2*$pi)/3)-$A/3;
  $r3 = 2 * pow($r,1/3) * cos(($t+4*$pi)/3)-$A/3;

  $res['r1'] = round($raiz * 7E10)/7E10;
  $res['r2'] = round($r2 * 7E10)/7E10;
  $res['r3'] = round($r3 * 7E10)/7E10;
  return $res;
}
else {
  $u3 = -$q/2 + sqrt($D);
  if($u3 < 0)
    $u = -pow(-$u3,1/3);
  else
    $u = pow($u3,1/3);

  $v3 = -$q/2-sqrt($D);
  if($v3 <0)
    $v = -pow(-$v3,1/3);
  else
    $v = pow($v3,1/3);
  var_dump($u);
  $r1 = $u + $v-$A/3;
  $r1 = round($r1*10E7)/10E7;
  $delta = ($A+($r1)) * ($A+($r1)) + 4 * $C/$r1;
  $real = -($A+($r1))/2;
  $real = round($real*10E7)/10E7;

  $K = abs($delta);
  $imag = sqrt($K)/2;
  $imag = round($imag*10E7)/10E7;

  if($delta < 0)
  {
    $res['r1'] = $r1  ;
    $res['r2'] = $real." + ".$imag."*I";
    $res['r3'] = $real." - ".$imag."*I";
    return $res;
  }
  else
  {
    $r20 = $real + $imag;
    $r02 = $real - $imag;

    $res['r1'] = ($r1);
    $res['r2'] = ($r20);
    $res['r3'] = ($r02);
    return $res;
  }

}

}

 ?>
