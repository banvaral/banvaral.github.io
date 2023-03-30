<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php $url="http://".$_SERVER['HTTP_HOST']."/vivemodelo" ?>
<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="container nav navbar-nav">
        <a href="" class="nav-item nav-link active"><img src="../img/logo-admin.svg" alt=""></a>
        <a href="<?php echo $url;?>/administrador/inicio.php" class="nav-item nav-link">Inicio</a>
        <a href="<?php echo $url;?>/administrador/campus.php" class="nav-item nav-link">Administrador de campus</a>
        <a href="<?php echo $url;?>/administrador/licenciaturas.php" class="nav-item nav-link">Administrador de Licenciaturas</a>
        <a href="<?php echo $url;?>/administrador/formularios.php" class="nav-item nav-link">Fomrmulario</a>
        <a href="<?php echo $url;?>/administrador/cuentas.php" class="nav-item nav-link">Cuentas</a>
        <a href="<?php echo $url;?>" class="nav-item nav-link">Ver modulo</a>
        <a href="<?php echo $url;?>/administrador/login.php" class="nav-item nav-link">Cerrar sesión</a>
    </div>
</nav>
</br>

<div class="container">
    <div class="row">