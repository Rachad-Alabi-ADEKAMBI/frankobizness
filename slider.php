<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="public/scss/main.css ">

</head>
<body>

<div class="container" v-if='showHome'>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="public/img/profil.jpeg" alt="client satisfait">
        <p>
            Rachad ADEKAMBI <br>
            <span>
                Client satisfait
            </span> <br>

            Je suis tres satisfait de la prestation,
             je cherchais urgemment un vehicule d'occasion et mr BABATOUNDE
             m'a été d'une grande aide

        </p>
      </div>

      <div class="item">
      <img src="public/img/pdg.jpeg" alt="client satisfait">
        <p>
            Franck Oklm <br>
            <span>
                Client satisfait
            </span> <br>

            Prestation 5/5, je recommande fortement, les prix sont super abordable
            et ils sont tres comprehensifs

        </p>
        </div>

      <div class="item">
      <img src="public/img/profil.jpeg" alt="client satisfait">
        <p>
            Rachad ADEKAMBI <br>
            <span>
                Client satisfait
            </span> <br>

            Je suis tres satisfait de la prestation,
             je cherchais urgemment un vehicule d'occasion et mr BABATOUNDE
             m'a été d'une grande aide

        </p>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
