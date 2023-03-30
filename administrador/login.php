<?php

if($_POST){
    header('Location:inicio.php');
}
?>

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
    <div class="container">
        <div class="row">

        <div class="col-md-4"></div>
            <div class="col-md-4">
</br></br></br>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Usuario</label>
                            <input type="text" name="usuario" class="form-control" aria-describedby="emailHelp" placeholder="Escribe tu usuario">
                            
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Contraseña:</label>
                            <input type="password" name="contraseña" class="form-control"  placeholder="Escribe tu contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar al administrador</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>