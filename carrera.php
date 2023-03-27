<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-carrera.css">
    <link rel="stylesheet" href="css/styles-footer.css">
    <title>Document</title>  
</head>
<body>
<section>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/image 1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/image 1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/image 1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <section class="ofedu">
        <div class="ofedu__banner">
            <div class="row ofedu__banner__elements">
                <div class="col">
                    <a href="licenciaturas.php">
                        <button class="ofedu__banner__btn">
                            <img src="img/Arrow-Left.svg" alt="">
                            <h4 class ="ofedu__banner__btn__text">Regresar</h4>
                        </button>
                    </a>
                </div>
                <div class="col">
                    <a href="buscador.php">
                    <div class="ofedu__banner__search">
                        <img src="img/Search.svg" alt="">
                    </div>
                    </a>
                </div>
            </div>
            <h1 class="ofedu__banner_title">Licenciatura en administración </br>y desarrollo empresarial</h1>
        </div>
    </section>
</section>

<section>
    <div class="card info__card">
        <div class="card-body info__card__body">
            <h3 class="info__card__body__title">Objetivo de la licenciatura</h3>
            <p class="info__card__body__text">Formar profesionales con responsabilidad social a través del desarrollo de competencias en la carrera, 
            capaces de gestionar de manera eficaz el proceso de creación y administración de una organización.</p>
        </div>
    </div>
</section>

<section class="form">
    <a href="formulario-licenciaturas.php">
    <div class="card form__card__body">
        <div class="card-body">
            <div class="row">
                <div class="col form__card__body__ilustration">
                    <img src="img/form-ilustration.svg" alt="">
                </div>
                <div class="col-7 form__card__body__text">
                    <h3>¿Interesado?</h3>
                    <h4>Solicita el plan de estudios</h4>
                </div>
                <div class="col">
                    <button class="form__card__body__btn">
                        <img src="img/Arrow-left.svg" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
    </a>
</section>

<?php include('footer.php') ?>
<script src="js/bootstrap.min.js"></script>
</body>
</html>