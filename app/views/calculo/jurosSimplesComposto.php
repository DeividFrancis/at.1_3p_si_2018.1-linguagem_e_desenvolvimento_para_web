<?php require_once '../_includes/header.php'; ?>

<form class="" action="../../controller/juros-simples-composto.controller.php" method="POST">
  <input type="text" name="capital" value="">
  <input type="text" name="taxa" value="">
  <input type="text" name="tempo" value="">
  <input type="radio" name="mesAno" value="mes">Mes
  <input type="radio" name="mesAno" value="ano">Ano
  <button type="submit" name="button">Calcular</button>
</form>

<?php require_once '../_includes/footer.php'; ?>
