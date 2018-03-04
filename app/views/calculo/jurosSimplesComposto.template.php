<?php $title = 'Juros Simples e Composto'; require_once '../_includes/header.php'; ?>
<div class="section">
  <div class="col s12">
    <div class="row">
      <h2 class="hader">Juros Simples</h2>
      <div class="divider"></div>
      <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <blockquote cite="http://">
        formula
      </blockquote>

      <div class="card hoverable deep-purple   white-text">
        <div class="card-content">
          <div class="card-title">Juros Simples</div>
          <form class="" action="" method="POST">
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
              <button class="btn waves-effect waves-light" type="submit" name="simples">Calcular
                <i class="material-icons right">send</i>
              </button>
            </div>
          </form>
        </div>
        <?php include '../../controller/jurosSimples.controller.php'; ?>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="col s12">
    <div class="row">
      <h2 class="header">Juros Composto</h2>
      <div class="divider"></div>
      <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <blockquote cite="http://">
        formula
      </blockquote>

      <div class="card hoverable deep-purple   white-text">
        <div class="card-content">
          <div class="card-title">Juros Composto</div>
          <form action="" method="POST">
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
              <button class="btn waves-effect waves-light" type="submit" name="composto">Calcular
                <i class="material-icons right">send</i>
              </button>
            </div>
          </form>
        </div>
        <?php include '../../controller/jurosComposto.controller.php'; ?>
      </div>
    </div>
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
