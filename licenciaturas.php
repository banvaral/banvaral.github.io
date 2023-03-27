<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles-licenciaturas.css">
    <link rel="stylesheet" href="css/styles-footer.css">
    <title>Document</title>  
</head>
<body>
    <section class="licenciaturas">
        <div class="licenciaturas__banner">
            <div class="row licenciaturas__banner__elements">
                <div class="col">
                    <a href="escuelas.php">
                        <button class="licenciaturas__banner__btn">
                            <img src="img/Arrow-Left.svg" alt="">
                            <h4 class ="licenciaturas__banner__btn__text">Regresar</h4>
                        </button>
                    </a>
                </div>
                <div class="col">
                    <a href="buscador.php">
                    <div class="licenciaturas__banner__search">
                        <img src="img/Search.svg" alt="">
                    </div>
                    </a>
                </div>
            </div>
            <h1 class="licenciaturas__banner_title">Escuela de</br> Negocios</h1>
            <div class="licenciaturas__banner__icon">
                <img src="img/negocios-icon.svg" alt="">
            </div>
        </div>
    </section>

    <section class="objetivo">
        <div class="objetivo__info">
            <h3 class="objetivo__info__title">Objetivo</h3>
            <p class="objetivo__info__text">La escuela de negocios tiene como objetivo formar estudiantes con 
            la capacidad de desarrollar y administrar una empresa con la minima idea de infundir el emprendimiento.</p>
        </div>
    </section>

    <section class="carreras">
        <div class="carreras__title">
            <h3>Licenciaturas</h3>
        </div>
        <div class="carreras__grados">
            <div class="row carreras__grados__gap">
                <div class="col">
                    <div class="carreras__grados__card">
                        <h3>ADE</h3>
                    </div>
                </div>
                <div class="col-6">
                    <div class="carreras__grados__title">
                        <h3>Licenciatura en administración y desarrollo empresarial</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="carreras__grados__col">
                        <a href="carrera.php">
                            <button class="carreras__grados__icon">
                                <img src="img/Arrow-blue.svg" alt="">
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row carreras__grados__gap">
                <div class="col">
                    <div class="carreras__grados__card">
                        <h3>LAM</h3>
                    </div>
                </div>
                <div class="col-6">
                    <div class="carreras__grados__title">
                        <h3>Licenciatura en administración y mercadotecnia</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="carreras__grados__col">
                        <a href="">
                            <button class="carreras__grados__icon">
                                <img src="img/Arrow-blue.svg" alt="">
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row carreras__grados__gap">
                <div class="col">
                    <div class="carreras__grados__card">
                        <h3>LGN</h3>
                    </div>
                </div>
                <div class="col-6">
                    <div class="carreras__grados__title">
                        <h3>Licenciatura en gestión de negocios</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="carreras__grados__col">
                        <a href="">
                            <button class="carreras__grados__icon">
                                <img src="img/Arrow-blue.svg" alt="">
                            </button>                        
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include('footer.php') ?>
<script src="bootstrap.min.js"></script>
</body>
</html>


