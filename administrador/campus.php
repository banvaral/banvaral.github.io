<?php include("cabecera.php"); ?>

<div class="col-md-5">

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
<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre">
</div>

<div class = "form-group">
<label for="exampleInputEmail1">Imagen</label>
<input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Nombre">
</div>
<br/>
<div class="btn-group" role="group" aria-label="">
    <button type="button" name="action" value="agregar" class="btn btn-success">Agregar</button>
</div>
</form>

    </div>

</div>

</div>
<div class="col-md-7">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>2</td>
            <td>Licenciatura en negocios</td>
            <td>imagen.jpg</td>
            <td> <button type="button" name="action" value="modificar" class="btn btn-warning">Editar</button>
    <button type="button" name="action" value="cancelar" class="btn btn-danger">Eliminar</button></td>
        </tr>
    </tbody>
</table>

</div>

<?php include("pie.php"); ?>