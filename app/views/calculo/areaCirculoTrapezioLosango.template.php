<?php $title = 'Area Circulo Trapezio Losango'; require_once '../_includes/header.php'; ?>

<div class="section">
  <div class="col s12">
    <div class="row">
      <h3 class="hader">Área do círculo</h3>
      <div class="divider"></div>

      <p class="flow-text">A área do círculo corresponde ao valor da superfície dessa figura, levando em conta a medida de seu raio (r).</p>
      <p class="flow-text">Para calcular a área do círculo devemos utilizar a seguinte fórmula:</p>
      <blockquote>
        Area = π  * r <sup>2</sup>
      </blockquote>
      <p>Onde:</p>
      <ul>
        <li><b>π</b>= constante Pi(3,14);</li>
        <li><b>r</b>= raio;</li>
      </ul>
      <div class="col  l6 offset-l3">
        <div id="circulo" class="card hoverable gradient lighten-1  white-text">
          <div class="card-content">
            <div class="card-title">Área do Círculo</div>
            <form action="/area-circulo-trapezio-losango#circulo" method="post">
              <div class="row">
                <div class="input-field s10 center">
                  <input type="number" name="raio">
                  <label for="raio">Raio</label>
                </div>
              </div>
              <!-- <div class="section">
                <p>
                  <input name="uniMedida" type="radio" id="cm1" value="cm"checked />
                  <label for="cm1">Centimetros</label>
                </p>
                <p>
                  <input name="uniMedida" type="radio" id="mt1" value="mt" />
                  <label for="mt1">Metros</label>
                </p>
                <p>
                  <input name="uniMedida" type="radio" id="km1" value="km"/>
                  <label for="km1">Kilometros</label>
                </p>
              </div> -->
              <button class="btn waves-effect waves-light" type="submit" name="circulo"> Calcular
                <i class="material-icons right">send</i>
              </button>
            </form>
          </div>
          <?php include '../../controller/areaCirculo.controller.php'; ?>
        </div>
      </div>
      <!-- <p>https://www.todamateria.com.br/area-do-circulo/</p> -->
    </div>
  </div>
</div>


<div class="section">
  <div class="col s12">
    <div class="row">
      <h2 class="hader">Área do Trapezio</h2>
      <div class="divider"></div>
      <p class="flow-text">O trapézio é um quadrilátero que possui dois lados paralelos chamados de base maior e base menor e dois lados não paralelos.</p>

      <blockquote cite="http://">
        Área = ((B + b) * h) / 2
      </blockquote>

      <p>Onde temos:</p>
      <ul>
        <li><b>B</b>= base maior;</li>
        <li><b>b</b>= base menor;</li>
        <li><b>h</b>= altura;</li>
      </ul>

      <div class="col l8 offset-l2">
        <div id="trapezio" class="card hoverable gradient lighten-1   white-text">
        <div class="card-content">
          <div class="card-title">Área do Trapezio</div>
          <form action="/area-circulo-trapezio-losango#trapezio" method="post">
            <div class="row">
              <div class="input-field col s12 m4 l4">
                <input type="number" name="altura" id="altura">
                <label for="altura">Altura</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input type="number" name="baseMaior" id="BaseMaior">
                <label for="BaseMaior">Base Maior</label>
              </div>
              <div class="input-field col s12 m4 l4">
                <input type="number" name="baseMenor" id="BaseMenor">
                <label for="BaseMenor">Base Menor</label>
              </div>
            </div>
              <button class="btn waves-effect waves-light l6" type="submit" name="areaTrapezio"> Calcular
                <i class="material-icons right">send</i>
              </button>
              <!-- <div class="row col m6 s3 offset-m3 hide">
                <input name="uniMedida" type="radio" id="cm2" value="cm"checked />
                <label for="cm2">Centimetros</label>
                <input name="uniMedida" type="radio" id="mt2" value="mt" />
                <label for="mt2">Metros</label>
                <input name="uniMedida" type="radio" id="km2" value="km"/>
                <label for="km2">Kilometros</label>
              </div> -->
          </form>
        </div>
        <?php
        include '../../controller/areaTrapezio.controller.php';
        ?>
      </div>
    </div>
    <!-- <p>http://alunosonline.uol.com.br/matematica/area-trapezio.html</p> -->
    </div>
  </div>
</div>


<div class="section">
  <div class="col s12">
    <div class="row">
      <h2 class="hader">Área Losango</h2>
      <div class="divider"></div>
      <p class="flow-text">O losango é um quadrilátero que possui os quatro lados congruentes, ou seja, com a mesma medida. É composto também por duas diagonais: diagonal maior (D) e diagonal menor (d). Essas duas diagonais se cruzam no ponto médio de cada uma (exatamente no meio delas). Os ângulos opostos de um losango também são congruentes.</p>

      <blockquote>
        Área = (D * d) / 2
      </blockquote>
      <p>Onde:</p>
      <ul>
        <li><b>D</b>= é a medida da diagonal maior;</li>
        <li><b>d</b>= é a medida da diagonal menor</li>
      </ul>

      <div class="col l8 offset-l2">
      <div id="losango" class="card hoverable gradient lighten-1   white-text">
        <div class="card-content">
          <div class="card-title">Área Losango</div>
          <form action="/area-circulo-trapezio-losango#losango" method="post">
            <div class="row">
              <div class="input-field col s12 m6">
                <input type="number" name="diagonalMaior" id="dMaior">
                <label for="dMaior">Diagonal Maior</label>
              </div>
              <div class="input-field col s12 m6  ">
                <input type="number" name="diagonalMenor" id="dMenor">
                <label for="dMenor">Diagonal Menor</label>
              </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="losango"> Calcular
              <i class="material-icons right">send</i>
            </button>
            <!-- <span class="right">
              <input name="uniMedida" type="radio" id="cm3" value="cm"checked />
              <label for="cm3">Centimetros</label>
              <input name="uniMedida" type="radio" id="mt3" value="mt" />
              <label for="mt3">Metros</label>
              <input name="uniMedida" type="radio" id="km3" value="km"/>
              <label for="km3">Kilometros</label>
            </span> -->
          </form>
        </div>
        <?php include '../../controller/areaLosango.controller.php'; ?>
      </div>
    </div>
    <!-- <p>http://escolakids.uol.com.br/area-de-um-losango.htm</p> -->
    </div>
  </div>
</div>

<div class="section">
  <div class="col s12">
    <div class="row">
      <h2 class="hader">Área e volume do cilindro</h2>
      <div class="divider"></div>
      <h5>Volume</h5>
      <div class="flow-text">O cilindro é um sólido geométrico classificado como corpo redondo por conter uma de suas faces arredondadas. Podemos observar a utilização do cilindro na indústria de embalagens, reservatórios de combustíveis e líquidos em geral. Em virtude da sua grande utilização no cotidiano, é importante conhecer seus elementos e saber realizar o cálculo de seu volume</div>
      <h5>Área</h5>
      <!-- <p class="flow-text">Esse cálculo é feito em três etapas: área das bases, área lateral e soma das duas últimas. Antes de partir para exemplos, é importante compreender bem o que é um cilindro e algumas de suas características básicas.</p> -->

      <!-- <blockquote >
        formula
      </blockquote> -->

      <div class="col l8 offset-l2">
      <div id="volume-cilindro" class="card hoverable gradient lighten-1   white-text">
        <div class="card-content">
          <div class="card-title">Área e volume do cílindro</div>
          <form action="/area-circulo-trapezio-losango#volume-cilindro" method="post">
            <div class="row">
              <div class="input-field col s6">
                <input type="number" name="raio">
                <label for="raio">Raio</label>
              </div>
              <div class="input-field col s6">
                <input type="number" name="altura">
                <label for="altura">Altura</label>
              </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="cilindro"> Calcular
              <i class="material-icons right">send</i>
            </button>
            <!-- <span class="right">
              <input name="uniMedida" type="radio" id="cm4" value="cm"checked />
              <label for="cm4">Centimetros</label>
              <input name="uniMedida" type="radio" id="mt4" value="mt" />
              <label for="mt4">Metros</label>
              <input name="uniMedida" type="radio" id="km4" value="km"/>
              <label for="km4">Kilometros</label>
            </span> -->
          </form>
        </div>
        <?php include '../../controller/areaVolumeCilindro.controller.php'; ?>
      </div>
    </div>
    </div>
  </div>
</div>
<!-- <h5>Area do Circulo</h5>
  <form class="" action="../../controller/areaCirculo.controller.php" method="post">
    raio<input type="number" name="raio">
    <input type="radio" name="metragem">centimetros
    <input type="radio" name="metragem">metros
    <input type="radio" name="metragem">kilometros
    <button type="submit" name="button">Calcular</button>
  </form> -->


  <!-- <h5>Areaa Trapezio</h5>

    <form class="" action="../../controller/areaTrapezio.controller.php" method="post">
      altura<input type="number" name="altura">
      Bmenor<input type="number" name="baseMenor">
      Bmaior<input type="number" name="baseMaior">
      <button type="submit" name="button">Calcular</button>
    </form> -->

    <!-- <h5>Area Losango</h5>
      <form class="" action="../../controller/areaLosango.controller.php" method="post">
        Dmaior<input type="number" name="diagonalMaior">
        Dmenor<input type="number" name="diagonalMenor">
        <button type="submit" name="button">Calcular</button>
      </form> -->

      <!-- <h5>Area e volume do cilindro</h5>
        <form class="" action="../../controller/areaVolumeCilindro.controller.php" method="post">
          raio<input type="number" name="raio">
          altura<input type="number" name="altura">
          <button type="submit" name="button">Calcular</button>
        </form> -->

        <?php require_once '../_includes/footer.php'; ?>
