<?php
include '../_includes/header.php';
?>

<div class="section">
  <div class="col s12">
    <div class="row">
      <h2 class="hader">Equação cubica</h2>
      <div class="divider"></div>
      <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <blockquote></blockquote>
      <div class="col l6 offset-l3">
        <div class="card horable gradient white-text">
          <div class="card-content">
            <div class="card-title">Equação Cubica</div>
            <form action="/equacao-cubica" method="post">
              <div class="row">
              <div class="input-field col s12 m3 l3">
                <input type="number" name="detA" id="detA">
                <label for="detA">A</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input type="number" name="detB" id="detB">
                <label for="detB">B</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input type="number" name="detC" id="detC">
                <label for="detC">C</label>
              </div>
              <div class="input-field col s12 m3 l3">
                <input type="number" name="detD" id="detD">
                <label for="detD">D</label>
              </div>
              </div>
              <button class="btn waves-effect waves-light l6" type="submit" name="cubo"> Calcular
                <i class="material-icons right">send</i>
              </button>
            </form>
          </div>
          <?php include '../../controller/equacaoCubica.controller.php'?>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include '../_includes/footer.php';
?>
