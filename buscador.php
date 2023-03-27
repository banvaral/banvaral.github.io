<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles-buscador.css">
    <link rel="stylesheet" href="css/styles-footer.css">
    <title>Document</title>
</head>
<body>

<header class="navbar__header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand"><img src="img/logotipo-white.svg" alt=""></a>
            </div>
            <div class="collapse navbar-collapse navbar__container" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <button class="licenciaturas__banner__btn" onclick="history.back()">
                                <img src="img/Arrow-Left.svg" alt="">
                                <h4 class ="licenciaturas__banner__btn__text">Regresar</h4>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="buscador">
    <div class="buscador__text">
        <h1>¿No sabes que licenciatura </br>te interesa más?</h1>
        <h2>¡Usa palabras clave! </br> y deja que el buscador encuentre algo para tí</h2>
    </div>
    <div class="buscador__input">
        <input class="form-control form-control-lg" type="text" placeholder="Palabras clave" aria-label=".form-control-lg example">
    </div>
    <div class="buscador__btn">
    <button type="submit" class="btn btn-primary mb-3 buscador__btn__container"><h4>Buscar</h4></button>
  </div>
</section>


<?php include ('footer.php') ?>

<script src="js/bootstrap.min.js"></script>
</body>
</html>