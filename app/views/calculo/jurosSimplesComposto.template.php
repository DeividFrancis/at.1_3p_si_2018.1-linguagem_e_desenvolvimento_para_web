<?php $title = 'Juros Simples e Composto'; require_once '../_includes/header.php'; ?>
<div class="section">
  <div class="col s12">
    <div class="row">
      <h2 class="hader">Juros Simples</h2>
      <div class="divider"></div>
      <p class="flow-text">O regime de juros será simples quando o percentual de juros incidir apenas sobre o valor principal. Sobre os juros gerados a cada período não incidirão novos juros. Valor principal ou simplesmente principal é o valor inicial emprestado ou aplicado, antes de somarmos os juros. Transformando em fórmula, temos:</p>

      <blockquote cite="https://www.somatematica.com.br/emedio/finan2.php">
        J = P . i . n
      </blockquote>
      <ul>
        <li><b>J</b>= juros</li>
        <li><b>P</b>= principal (capital)</li>
        <li><b>i</b>= taxas de juros</li>
        <li><b>n</b>= números de períodos</li>
      </ul>
      <p class="flow-text">Ao somarmos os juros ao valor principal, temos o montante</p>
      <ul>
        <li><b>Montante</b>= Principal + Juros</li>
        <li><b>Montante</b>= Principal + (principal x Taxa de juros x números de períodos)</li>
      </ul>

      <blockquote cite="http://">
        M = P . ( 1 + ( i . n ) )
      </blockquote>

      <div class="col l8 offset-l2">
        <div id="juros-simples" class="card hoverable gradient   white-text">
          <div class="card-content">
            <div class="card-title">Juros Simples</div>
            <form class="" action="/juros-simples-composto#juros-simples" method="POST">
              <div class="row">
                <div class="input-field col s6">
                  <input class="money" id="capital" type="text" name="capital">
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

      <div class="">
      <div class="col s12">Fonte: <a href="https://www.somatematica.com.br/emedio/finan2.php">https://www.somatematica.com.br/emedio/finan2.php</a></div>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="col s12">
    <div class="row">
      <h2 class="header">Juros Composto</h2>
      <div class="divider"></div>
      <p class="flow-text">Juros compostos são a aplicação de juros sobre juros, isto é, os juros compostos são aplicados ao montante de cada período.</p>
      <p class="flow-text">Juros compostos são muito utilizados pelo sistema financeiro, pois oferece uma rentabilidade melhor. A taxa de juros é sempre aplicada ao somatório do capital no final de cada mês. Onde temos a seguinte formula:</p>

      <blockquote cite="https://matematicabasica.net/juros-compostos/">
        M = C x (1 + i)<sup>t</sup>
      </blockquote>

      <p class="flow">Onde:</p>
      <ul>
        <li><b>M</b>= é o montante final;</li>
        <li><b>C</b>= é o capital ou valor inicial;</li>
        <li><b>i</b>= é a taxa de juros aplicada;</li>
        <li><b>t</b>= é o tempo total;</li>
      </ul>

      <p class="flow">O cálculo somente feito dos juros é obtido pela seguinte fórmula:</p>
      <blockquote cite="http://">
        J = M - C
      </blockquote>

      <div class="col l8 offset-l2">
        <div id="juro-composto" class="card hoverable gradient   white-text">
          <div class="card-content">
            <div class="card-title">Juros Composto</div>
            <form action="/juros-simples-composto#juro-composto" method="POST">
              <div class="row">
                <div class="input-field col s6">
                  <input class="money" id="capital" type="text" name="capital">
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
      <div class="">
      <div class="col s12">Fonte: <a href="https://matematicabasica.net/juros-compostos/">https://matematicabasica.net/juros-compostos/</a></div>
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
