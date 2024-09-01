<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center">Formulario Enviado</h1>
        <div class="form-group">
            <p>La informacion de envio correctamente</p>
            <label class="d-block" >Nombre: <?php if(isset($_GET['nombre'])) echo $_GET['nombre']; ?></label>
            <label class="d-block" >Correo: <?php if(isset($_GET['email'])) echo $_GET['email']; ?></label>
        </div>
        <a href="index.php" class="btn btn-danger mt-3">
            Regresar
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>