<?php $title = "Qtd De Primos Entre Dois Numeros"; require_once '../_includes/header.php'; ?>

<div class="card deep-purple">
  <div class="card-content">
    <div class="card-title">Números primos entre dois números</div>
    <form class="col s12" method="post">
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
<!-- <form class="" action="../../controller/quantidadeDePrimosEntreDoisNumeros.controller.php" method="post">
    numero inicial<input type="text" name="numeroInicial">
    numero final<input type="text" name="numeroFinal">
    <button type="submit" name="button">Calcular</button>
</form> -->
<?php require_once '../_includes/footer.php'; ?>
