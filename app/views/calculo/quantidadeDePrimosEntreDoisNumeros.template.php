<?php $title = "Qtd De Primos Entre Dois Numeros"; require_once '../_includes/header.php'; ?>

<form class="" action="../../controller/quantidadeDePrimosEntreDoisNumeros.controller.php" method="post">
    numero inicial<input type="text" name="numeroInicial">
    numero final<input type="text" name="numeroFinal">
    <button type="submit" name="button">Calcular</button>
</form>
<?php require_once '../_includes/footer.php'; ?>
