<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="contacto.php" method="get">
        <div class="container mt-3">
            <h1 class="text-center">Datos de Contacto</h1>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input type="text" name="nombre" class="form-control">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">
                        Enviar
                    </button>
                </div>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>