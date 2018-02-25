<?php $title = 'Juros Simples e Composto'; require_once '../_includes/header.php'; ?>

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
