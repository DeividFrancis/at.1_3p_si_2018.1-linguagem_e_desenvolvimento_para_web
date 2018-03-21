<?php $title = "Qtd De Primos Entre Dois Numeros"; require_once '../_includes/header.php'; ?>
<div class="section">
  <div class="col s12">
    <!-- <div class="row"> -->
      <h3>Números Primos</h3>
      <div class="divider"></div>

      <div class="flow-text">Os Números Primos são números naturais maiores do que 1 que possuem somente dois divisores, ou seja, são divisíveis por 1 e por ele mesmo.</div>
      <div class="flow-text">O Teorema Fundamental da Aritmética faz parte da "Teoria dos Números" e apresenta os números primos e suas propriedades.</div>

      <div class="col l8 offset-l2">
        <div class="card gradient hoverable white-text">
          <div class="card-content">
            <div class="card-title">Números primos entre dois números</div>
            <form action="/quantidade-de-numeros-primos-entre-dois-numeros#resultado" class="col s12" method="post">
              <div class="row">
                <div class="input-field col s6">
                  <input type="text" name="numeroInicial">
                  <label for="numeroInicial">Numero inicial</label>
                </div>
                <div class="input-field col s6">
                  <input type="text" name="numeroFinal">
                  <label for="numeroFinal">Numero final</label>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="primos">Calcular
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </form>
          </div>
          <?php
          include '../../controller/quantidadeDePrimosEntreDoisNumeros.controller.php';
          ?>
        </div>
      </div>
      <div class="flow-text">Os princípios desse teorema assinala que todos os números inteiros positivos maiores que 1 podem ser decompostos num produto de números primos ou "fatores primos", que por sua vez são resultantes do processo de decomposição dos números chamado de "fatoração" ou "fatorização".</div>
    </div>

  <!-- </div> -->
</div>
<!-- <form class="" action="../../controller/quantidadeDePrimosEntreDoisNumeros.controller.php" method="post">
numero inicial<input type="text" name="numeroInicial">
numero final<input type="text" name="numeroFinal">
<button type="submit" name="button">Calcular</button>
</form> -->
<?php require_once '../_includes/footer.php'; ?>
