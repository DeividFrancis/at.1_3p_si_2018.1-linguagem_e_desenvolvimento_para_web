<?php $title = 'Area Circulo Trapezio Losango'; require_once '../_includes/header.php'; ?>

<div class="card">
  <div class="card-content">
    <div class="card-title">Área do Círculo</div>
    <form action="../../controller/areaCirculo.controller.php" class="col s12">
      <div class="row">
        <div class="input-field col s3">
          <input type="text" name="Raio" value="">
          <label for="Raio">Raio</label>
        </div>
        <div class="input-field col s3">
          <p>
            <input id="metragem1" type="radio" name="metragem" value="">
            <label for="metragem1">Centimetros</label>
          </p>
          <p>
            <input id="metragem2" type="radio" name="metragem" value="">
            <label for="metragem2">Metros</label>
          </p>
          <p>
            <input id="metragem3" type="radio" name="metragem" value="">
            <label for="metragem3">Kilometros</label>
          </p>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="button"> Calcular
        <i class="material-icons right">send</i>
      </button>
    </form>
  </div>
</div>


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
