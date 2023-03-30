<?php include("cabecera.php"); ?>

<div class="col-md-3">

    <div class="card">
        <div class="card-header">
            Datos de licenciaturas
        </div>

        <div class="card-body">
        
            <form method="POST" enctype="multipart/form-data">

                <div class = "form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
                </div>

                <div class = "form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Agregar nombre de usuario">
                </div>

                <div class = "form-group">
                    <label for="exampleInputEmail1">Apellidos</label>
                    <input type="text" class="form-control" name="txtApellidos" id="txtAcronimo" placeholder="Agregar apellidos de usuario">
                </div>

                <div class = "form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Agregar correo de usuario">
                </div>

                <div class = "form-group">
                    <label for="exampleInputEmail1">Numero</label>
                    <input type="number" class="form-control" name="txtNumero" id="txtNumero" placeholder="Agregar numero telefónico de usuario">
                </div>

                <div class = "form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" class="form-control" name="txtUsuario" id="txtUsuario" placeholder="Agregar usuario">
                </div>

                <div class = "form-group">
                    <label for="exampleInputEmail1">Contraseña</label>
                    <input type="password" class="form-control" name="txtContraseña" id="txtContraseña" placeholder="Agregar contraseña">
                </div>

                <br/>
                <div class="btn-group" role="group" aria-label="">
                    <button type="button" name="action" value="agregar" class="btn btn-success">Agregar</button>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="col-md-9">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Número</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Raul</td>
                <td>Avila</td>
                <td>araul@gmail.com</td>
                <td>9999 10 0000</td>
                <td>aRaul</td>
                <td>Raul90000</td>
                <td> <button type="button" name="action" value="modificar" class="btn btn-warning">Editar</button>
                <button type="button" name="action" value="cancelar" class="btn btn-danger">Eliminar</button></td>
            </tr>
        </tbody>
    </table>
</div>

<?php include("pie.php"); ?>