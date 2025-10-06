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
    <div class="d-flex justify-content-end">
        <img src="<?=base_url($usuario['avatar'])?>" alt="Avatar" class="rounded-circle img-fluid" width="80" height="80">
    </div>
    <h1 class="text-center">Bienvenido <?=$usuario['nivelacceso']?> <?=$usuario['nombres']?></h1>
    <div class="text-center mt-5">
        <a href="<?= base_url('login/registrar') ?>" class="btn btn-primary">REGISTRAR USUARIO</a>
    </div>
</body>
</html>