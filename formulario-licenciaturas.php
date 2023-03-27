<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles-formulario-licenciatura.css">
    <link rel="stylesheet" href="css/styles-footer.css">
    <title>Document</title>
</head>
<body>
<header class="navbar__header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="container-fluid">
                <a class="navbar-brand"><img src="img/logotipo.svg" alt=""></a>
            </div>
            <div class="collapse navbar-collapse navbar__container" id="navbarNav">
            <a href="#">
                        <button class="ofedu__banner__btn" onclick="history.back()">
                            <img src="img/Arrow-blue.svg" alt="">
                            <h4 class ="ofedu__banner__btn__text">Regresar</h4>
                        </button>
                    </a>
            </div>
        </div>
    </nav>
</header>

<section class="forms">
    <div class="forms__text">
        <h1>Se parte de nuestra familia Modelista</h1>
        <h2>Rellena todos los datos y te mandaremos mas </br> información de la licenciatura de tu interés.</h2>
    </div>
    <form action="" class="form__licenciaturas">
    <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre (s)</label>
            <input class="form-control" id="exampleFormControlInput1" placeholder="Escribe aquí tu nombre">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Apelllidos</label>
            <input class="form-control" id="exampleFormControlInput1" placeholder="Escribe aquí sus apellidos">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <input class="form-control" id="exampleFormControlInput1" placeholder="Escribe aquí tu numero telefónico">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Escribe aquí tu correo electrónico">
        </div>
        <select class="form-select" aria-label="Default select example">
            <option selected>Seleccione un campus</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <select class="form-select" aria-label="Default select example">
            <option selected>Seleccione una licenciatura</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
            <label class="form-check-label" for="flexCheckIndeterminate">
                <h4>Aceptar politicas de privacidad</h4>
            </label>
        </div>
        <div class="forms__btn">
            <button type="submit" class="btn btn-primary"><h4>Enviar formulario</h4></button>
        </div>
    </form>
</section>

<?php include ('footer.php') ?>

<script src="js/bootstrap.min.js"></script>
</body>
</html>