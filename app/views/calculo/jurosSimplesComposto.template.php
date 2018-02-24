<?php require_once '../_includes/header.php'; ?>

<h5>Juros simples</h5>
<form class="" action="../../controller/jurosSimples.controller.php" method="POST">
  <input type="text" name="capital">
  <input type="text" name="taxa">
  <input type="text" name="tempo">
  <input type="radio" name="mesAno" value="mes">Mes
  <input type="radio" name="mesAno" value="ano">Ano
  <button type="submit" name="button">Calcular</button>
</form>

<h5>Juros Composto</h5>

<form class="" action="../../controller/jurosComposto.controller.php" method="post">
  <input type="text" name="capital">
  <input type="text" name="taxa">
  <input type="text" name="tempo">
  <input type="radio" name="mesAno" value="mes">Mes
  <input type="radio" name="mesAno" value="ano">Ano
  <button type="submit" name="button">Calcular</button>
</form>
<?php require_once '../_includes/footer.php'; ?>
