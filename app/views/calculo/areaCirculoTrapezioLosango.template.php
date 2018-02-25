<?php $title = 'Area Circulo Trapezio Losango'; require_once '../_includes/header.php'; ?>
<h5>Area do Circulo</h5>
<form class="" action="../../controller/areaCirculo.controller.php" method="post">
    raio<input type="text" name="raio">
    <input type="radio" name="metragem">centimetros
    <input type="radio" name="metragem">metros
    <input type="radio" name="metragem">kilometros
    <button type="submit" name="button">Calcular</button>
</form>


<h5>Areaa Trapezio</h5>

<form class="" action="../../controller/areaTrapezio.controller.php" method="post">
  altura<input type="text" name="altura">
  Bmenor<input type="text" name="baseMenor">
  Bmaior<input type="text" name="baseMaior">
  <button type="submit" name="button">Calcular</button>
</form>

<h5>Area Losango</h5>
<form class="" action="../../controller/areaLosango.controller.php" method="post">
    Dmaior<input type="text" name="diagonalMaior">
    Dmenor<input type="text" name="diagonalMenor">
    <button type="submit" name="button">Calcular</button>
</form>

<h5>Area e volume do cilindro</h5>
<form class="" action="../../controller/areaVolumeCilindro.controller.php" method="post">
  raio<input type="text" name="raio">
  altura<input type="text" name="altura">
  <button type="submit" name="button">Calcular</button>
</form>

<?php require_once '../_includes/footer.php'; ?>
