<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<body>
    <h3 class="text-center mt-3">Registro</h3>

    <form action="/login/crear/usuario" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="nombres" id="nombres" class="form-control">
                                <label for="nombres">Ingrese Nombres</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="apellidos" id="apellidos" class="form-control">
                                <label for="apellidos">Ingrese Apellidos</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" name="nomusuario" id="nomusuario" class="form-control">
                                <label for="nomusuario">Ingrese Nombre de Usuario</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <select name="nivelacceso" id="nivelacceso" class="form-select">
                                    <option value="ADMIN">ADMIN</option>
                                    <option value="USER">USER</option>
                                </select>
                                <label for="nivelacceso">Nivel de Acceso</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" name="claveacceso" id="claveacceso" class="form-control">
                                <label for="claveacceso">Ingrese Contraseña</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-5 mx-auto">
                            <div class="form-floating">
                                <input type="file" name="avatar" id="avatar" class="form-control" accept="image/*">
                                <label for="avatar">Imagen</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>