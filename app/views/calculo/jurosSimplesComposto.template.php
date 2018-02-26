<?php $title = 'Juros Simples e Composto'; require_once '../_includes/header.php'; ?>
<div class="card">
<div class="card-content">
  <div class="card-title">Juros Simples</div>
<form class="col s12" action="../../controller/jurosSimples.controller.php" method="POST">
  <div class="row">
    <div class="input-field col s6">
      <input id="capital" type="text" name="capital">
      <label for="capital">Capital (R$)</label>
    </div>
    <div class="input-field col s6">
      <input id="taxa" type="text" name="taxa" class="validate">
      <label for="taxa">Taxa (% ao Mês)</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input type="text" name="tempo">
      <label for="tempo">Tempo (Meses)</label>
    </div>
  </div>
  <div class="row">
    <button class="btn waves-effect waves-light" type="submit" name="action">Calcular
      <i class="material-icons right">send</i>
    </button>
  </div>
</form>
</div>
</div>


<div class="card">
<div class="card-content">
  <div class="card-title">Juros Composto</div>
<form class="col s12" action="../../controller/jurosComposto.controller.php" method="POST">
  <div class="row">
    <div class="input-field col s6">
      <input id="capital" type="text" name="capital">
      <label for="capital">Capital (R$)</label>
    </div>
    <div class="input-field col s6">
      <input id="taxa" type="text" name="taxa" class="validate">
      <label for="taxa">Taxa (% Mês)</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input type="text" name="tempo">
      <label for="tempo">Tempo (Meses)</label>
    </div>
  </div>
  <div class="row">
    <button class="btn waves-effect waves-light" type="submit" name="action">Calcular
      <i class="material-icons right">send</i>
    </button>
  </div>
</form>
</div>
</div>
<!-- <h5>Juros simples</h5>
<form class="" action="../../controller/jurosSimples.controller.php" method="POST">
  capital<input type="text" name="capital">
  taxa<input type="text" name="taxa">
  tempo<input type="text" name="tempo">
  <input type="radio" name="mesAno" value="mes">Mes
  <input type="radio" name="mesAno" value="ano">Ano
  <button type="submit" name="button">Calcular</button>
</form>

<h5>Juros Composto</h5>

<form class="" action="" method="post">
  capital<input type="text" name="capital">
  taxa<input type="text" name="taxa">
  tempo<input type="text" name="tempo">
  <input type="radio" name="mesAno" value="mes">Mes
  <input type="radio" name="mesAno" value="ano">Ano
  <button type="submit" name="button">Calcular</button>
</form> -->
<?php require_once '../_includes/footer.php'; ?>
