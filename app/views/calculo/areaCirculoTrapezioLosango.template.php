<?php require_once '../_includes/header.php'; ?>
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
  <input type="text" name="altura">
  <input type="text" name="baseMenor">
  <input type="text" name="baseMaior">
  <button type="submit" name="button">Calcular</button>
</form>

<?php require_once '../_includes/footer.php'; ?>
