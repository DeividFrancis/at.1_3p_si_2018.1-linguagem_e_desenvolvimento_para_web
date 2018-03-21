<?php
include '../_includes/header.php';
?>

<div class="section">
  <div class="col s12">
    <div class="row">
      <h2 class="hader">Equação cubica</h2>
      <div class="divider"></div>
      <p class="flow-text">Em Matemática, uma equação cúbica ou equação do terceiro grau é uma equação polinomial de grau três. Qualquer equação de 3° grau pode ser escrita da seguinte forma:</p>
      <blockquote>

        aX<sup>3</sup> + bX<sup>2</sup> + cX + d = 0
      </blockquote>
      <p class="flow-text">sendo <i>a</i> , <i>b</i> , <i>c</i> e <i>d</i>  coeficientes reais ou complexos, tal que a ≠ 0. Observe que, como sempre é possível dividir a equação por <i>a</i>, pode-se supor que o coeficiente de x<sup>3</sup> é igual a 1.</p>
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
