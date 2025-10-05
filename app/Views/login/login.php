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
    <h1 class="mt-3 text-center">Inicio de Sesión</h1>
<div class="container">
    <form action="/login" method="POST">
        <div class="row">
            <div class="col-md-6 col-lg-4 mx-auto mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="text" name="nomusuario" id="nomusuario" class="form-control">
                            <label for="nomusuario">Usuario</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="claveacceso" id="claveacceso" class="form-control">
                            <label for="claveacceso">Contraseña</label>
                        </div>
                        <div>
                        <strong>
                            <?php if(session()->getFlashdata('error_nomuser')): ?>
                                <?=session()->getFlashdata('error_nomuser')?>
                            <?php endif;?>
                            <?php if(session()->getFlashdata('error_password')): ?>
                                <?=session()->getFlashdata('error_password')?>
                            <?php endif;?>
                            </strong>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

</body>
</html>