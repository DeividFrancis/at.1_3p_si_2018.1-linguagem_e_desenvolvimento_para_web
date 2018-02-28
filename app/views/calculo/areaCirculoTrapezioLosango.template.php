<?php $title = 'Area Circulo Trapezio Losango'; require_once '../_includes/header.php'; ?>

<div class="card">
  <div class="card-content">
    <div class="card-title">Área do Círculo</div>
    <form action="../../controller/areaCirculo.controller.php" class="col s6" method="post">
      <div class="row">
        <div class="input-field col s3">
          <input type="text" name="raio">
          <label for="raio">Raio</label>
        </div>
      <button class="btn waves-effect waves-light" type="submit" name="button"> Calcular
        <i class="material-icons right">send</i>
      </button>
      <span class="right">
        <input name="uniMedida" type="radio" id="cm1" value="cm"checked />
        <label for="cm1">Centimetros</label>
        <input name="uniMedida" type="radio" id="mt1" value="mt" />
        <label for="mt1">Metros</label>
        <input name="uniMedida" type="radio" id="km1" value="km"/>
        <label for="km1">Kilometros</label>
      </span>
    </div>
    </form>
  </div>
</div>

<div class="card">
  <div class="card-content">
    <div class="card-title">Área do Trapezio</div>
    <form class="col s6" method="post">
      <div class="row">
        <div class="input-field col s4">
          <input type="text" name="altura" id="altura">
          <label for="altura">Altura</label>
        </div>
        <div class="input-field col s4">
          <input type="text" name="baseMaior" id="BaseMaior">
          <label for="BaseMaior">Base Maior</label>
        </div>
        <div class="input-field col s4">
          <input type="text" name="baseMenor" id="BaseMenor">
          <label for="BaseMenor">Base Menor</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="button"> Calcular
        <i class="material-icons right">send</i>
      </button>
      <span class="right">
        <input name="uniMedida" type="radio" id="cm2" value="cm"checked />
        <label for="cm2">Centimetros</label>
        <input name="uniMedida" type="radio" id="mt2" value="mt" />
        <label for="mt2">Metros</label>
        <input name="uniMedida" type="radio" id="km2" value="km"/>
        <label for="km2">Kilometros</label>
      </span>
    </form>
  </div>
  <?php
      include '../../controller/areaTrapezio.controller.php';

   ?>
</div>

<div class="card">
  <div class="card-content">
    <div class="card-title">Área Losango</div>
    <form class="col s12" action="../../controller/areaLosango.controller.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" name="diagonalMaior" id="dMaior">
          <label for="dMaior">Diagonal Maior</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="diagonalMenor" id="dMenor">
          <label for="dMenor">Diagonal Menor</label>
        </div>
      </div>
        <button class="btn waves-effect waves-light" type="submit" name="button"> Calcular
          <i class="material-icons right">send</i>
        </button>
        <span class="right">
          <input name="uniMedida" type="radio" id="cm3" value="cm"checked />
          <label for="cm3">Centimetros</label>
          <input name="uniMedida" type="radio" id="mt3" value="mt" />
          <label for="mt3">Metros</label>
          <input name="uniMedida" type="radio" id="km3" value="km"/>
          <label for="km3">Kilometros</label>
        </span>
    </form>
  </div>
</div>

<div class="card">
  <div class="card-content">
    <div class="card-title">Área e volume do cilindro</div>
    <form class="col s12" action="../../controller/areaVolumeCilindro.controller.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" name="raio">
          <label for="raio">Raio</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="altura">
          <label for="altura">Altura</label>
        </div>
      </div>
        <button class="btn waves-effect waves-light" type="submit" name="button"> Calcular
          <i class="material-icons right">send</i>
        </button>
        <span class="right">
          <input name="uniMedida" type="radio" id="cm4" value="cm"checked />
          <label for="cm4">Centimetros</label>
          <input name="uniMedida" type="radio" id="mt4" value="mt" />
          <label for="mt4">Metros</label>
          <input name="uniMedida" type="radio" id="km4" value="km"/>
          <label for="km4">Kilometros</label>
        </span>
    </form>
  </div>
</div>
<!-- <h5>Area do Circulo</h5>
<form class="" action="../../controller/areaCirculo.controller.php" method="post">
    raio<input type="text" name="raio">
    <input type="radio" name="metragem">centimetros
    <input type="radio" name="metragem">metros
    <input type="radio" name="metragem">kilometros
    <button type="submit" name="button">Calcular</button>
</form> -->


<!-- <h5>Areaa Trapezio</h5>

<form class="" action="../../controller/areaTrapezio.controller.php" method="post">
  altura<input type="text" name="altura">
  Bmenor<input type="text" name="baseMenor">
  Bmaior<input type="text" name="baseMaior">
  <button type="submit" name="button">Calcular</button>
</form> -->

<!-- <h5>Area Losango</h5>
<form class="" action="../../controller/areaLosango.controller.php" method="post">
    Dmaior<input type="text" name="diagonalMaior">
    Dmenor<input type="text" name="diagonalMenor">
    <button type="submit" name="button">Calcular</button>
</form> -->

<!-- <h5>Area e volume do cilindro</h5>
<form class="" action="../../controller/areaVolumeCilindro.controller.php" method="post">
  raio<input type="text" name="raio">
  altura<input type="text" name="altura">
  <button type="submit" name="button">Calcular</button>
</form> -->

<?php require_once '../_includes/footer.php'; ?>
