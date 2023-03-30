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
                    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Agregar nombre de la licenciatura">
                </div>
<br/>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecciona un campus</option>
                    <option value="1">Escuela de negocios</option>
                    <option value="2">Escuela de derecho</option>
                    <option value="3">Escuela de humanidades</option>
                    <option value="3">Escuela de salud</option>
                    <option value="3">Escuela de diseño</option>
                    <option value="3">Escuela de arquitectura</option>
                    <option value="3">Escuela de ingeniería</option>
                </select>
<br/>
                <div class = "form-group">
                    <label for="exampleInputEmail1">Acrónimo</label>
                    <input type="text" class="form-control" name="txtAcronimo" id="txtAcronimo" placeholder="Agregar el acrónimo de la licenciatura">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Información</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Agregar información"></textarea>
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
<div class="col-md-9">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Campus</th>
                <th>Acrónimo</th>
                <th>Información</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Licenciatura en negocios</td>
                <td>Escuela de negocios</td>
                <td>LN</td>
                <td>El estudiante analizará y comprenderá los principales elementos, factores y relaciones que definen los principales procesos internacionales, asi como las dinámicas de la sociedad internacional de nuestro tiempo.</td>
                <td>imagen.jpg</td>
                <td> <button type="button" name="action" value="modificar" class="btn btn-warning">Editar</button>
                <button type="button" name="action" value="cancelar" class="btn btn-danger">Eliminar</button></td>
            </tr>
        </tbody>
    </table>
</div>

<?php include("pie.php"); ?>