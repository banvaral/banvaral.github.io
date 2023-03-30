<?php include("cabecera.php"); ?>

        <div class="col-md-12 container" >
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Numero</th>
                        <th>Email</th>
                        <th>Info</th>
                        <th>Campus</th>
                        <th>Licenciatura</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td>Raul</td>
                        <td>Avila</td>
                        <td>9999 00 0000</td>
                        <td>avila@gmail.com</td>
                        <td>Becas</td>
                        <td>Escuela de negocios</td>
                        <td>Licenciatura en negocios</td>
                        <td>
                            <button type="button" name="accion" value="modificar" class="btn btn-warning">Editar</button>
                            <button type="button" name="accion" value="cancelar" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button type="button" name="accion" value ="enviar" class="btn btn-info btn__excel" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 200px; margin: 0 auto;">
                Enviar excel
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h4>Agregar correo de envio</h4>
                            <div class = "form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Agregar correo de usuario">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>

<?php include("pie.php"); ?>