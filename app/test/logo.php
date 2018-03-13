<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext" rel="stylesheet">
    <title>Logo</title>
  </head>
  <body>
      <style media="screen">
        body{
          margin: 0 auto;
          background-color: purple;
          color: #fff;
        }

        .logo{
          font-family: 'Niconne', cursive;
          font-size: 10em;
          /* font-weight: bold; */
          display: flex;
          flex-direction: column;
          position: relative;

          transform: rotate(-12deg);
        }
        .sistema{

        }
        .de{
            position: absolute;
            top: 10%;
            left: 20%;
            font-size: 15%;
        }
        .informacao{
          position: absolute;
          top: 65%;
          left: 1rem;
        }
      </style>

      <div class="logo">
        <span class="sistema">Sistema</span>
        <span class="de">de</span>
        <span class="informacao">Informação</span>
      </div>
  </body>
</html>
