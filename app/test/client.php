<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teste json</title>
  </head>
  <body>
    <h5 id="titulo">Teste responde php</h5>
    <p id="demo"></p>

<script>
var send = document.getElementById("titulo");
var s = document.createElement("script");
s.src = 'server.php?x=' + send.textContent;
document.body.appendChild(s);
function myFunc(myObj) {
  document.getElementById("demo").innerHTML = myObj.name;
}
</script>
<!-- Criar uma  função q e so passa um array com o name de cada input e passar seus valores em json como
sendToJson("capital","Taxa","Tempo");
 -->
 <form method="post">
   <input type="text" name="input" value="">
   <button type="submit" name="execute" value="true">Calcular</button>
 </form>
  <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
      include 'server.php';
      var_dump(resposta());
    }
   ?>
  </body>
</html>
