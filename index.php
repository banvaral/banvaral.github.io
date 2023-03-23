<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Vive Modelo</title>
</head>
<body>
<header class="navbar__header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand"><img src="img/logotipo.svg" alt=""></a>
            </div>
            <div class="collapse navbar-collapse navbar__container" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <button type="button" class="btn btn-primary btn-lg navbar__container__btn">
                                <div class="container text-center">
                                <div class="row">
                                    <div class="col-8">
                                        <h4 class="navbar__container__btn__text">¿Buscas algo <br> en particular?</h4>
                                    </div>
                                    <div class="col-4 navbar__container__btn__icon__col">
                                        <div class="navbar__container__btn__icon">
                                            <img src="img/search.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="ofertaedu">
    <div class="card text-bg-white ofertaedu__card">
        <img src="img/ofertaEdu_img.svg" class="card-img" alt="...">
    </div>
    <div class="ofertaedu__container">
        <div class="ofertaedu__container__elements">
            <h4 class="ofertaedu__container__elements__text">¡Prepárate y planea </br> tu futuro académico!</h4>
            <a href="#">
                <button class="ofertaedu__container__elements__btn">
                    <div class="row">
                        <div class="col-2"><img src="img/loading.svg" alt=""></div>
                        <div class="col-10"><h4 class="ofertaedu__container__elements__btn__text">Ver oferta educativa</h4></div>
                    </div>     
                </button>
            </a>
        </div>
    </div>
</section>

<section class="universidad">
    <a href="">
        <div class="card universidad__card">
            <div class="card-body universidad__card__body">
                <div class="row">
                    <div class="col">
                        <button class="universidad__card__body__btn">
                            <img src="img/Vector.svg" alt="">
                        </button>
                    </div>
                    <div class="col-10">
                        <h4 class="universidad__card__body__text">¿Tienes dudas de nuestros procesos? </br> Pulsa aquí para resolver tus dudas</h4>
                    </div>
                    <div class="col universidad__card__bady__img">
                        <img src="img/ilustration-index.svg" alt=""> 
                    </div-col>
                </div>
            </div>
        </div>
    </a>
</section>

<section class="menu">
    <div class="menu__estructure">
        <nav class="navbar bg-body-tertiary menu__estructure__navbar">
            <form class="container-fluid justify-content-start menu__estructure__navbar__form">
                <a href="">
                <button class="btn btn-outline-success me-2 menu__estructure__navbar__form__btn" type="button">
                    <div class="menu__estructure__navbar__form__btn__elements">
                        <img src="img/Home.svg" alt="">
                        <h4 class="menu__estructure__navbar__form__btn__elements__text">Pantalla de inicio</h4>
                    </div>
                </button>
                </a>
                <a href="">
                <button class="btn btn-outline-success me-2 menu__estructure__navbar__form__btn__elements__img" type="button">
                    <img src="img/GPS.svg" alt="">
                </button>
                </a>
            </form>
        </nav>
    </div>
</section>

    <script src="bootstrap.min.js"></script>
</body>
</html>
