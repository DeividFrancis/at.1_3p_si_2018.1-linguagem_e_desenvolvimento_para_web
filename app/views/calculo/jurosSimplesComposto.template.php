<?php $title = 'Juros Simples e Composto'; require_once '../_includes/header.php'; ?>
<div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Card Title</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
<h5>Juros simples</h5>
<form class="" action="../../controller/jurosSimples.controller.php" method="POST">
  capital<input type="text" name="capital">
  taxa<input type="text" name="taxa">
  tempo<input type="text" name="tempo">
  <input type="radio" name="mesAno" value="mes">Mes
  <input type="radio" name="mesAno" value="ano">Ano
  <button type="submit" name="button">Calcular</button>
</form>

<h5>Juros Composto</h5>

<form class="" action="../../controller/jurosComposto.controller.php" method="post">
  capital<input type="text" name="capital">
  taxa<input type="text" name="taxa">
  tempo<input type="text" name="tempo">
  <input type="radio" name="mesAno" value="mes">Mes
  <input type="radio" name="mesAno" value="ano">Ano
  <button type="submit" name="button">Calcular</button>
</form>
<?php require_once '../_includes/footer.php'; ?>
