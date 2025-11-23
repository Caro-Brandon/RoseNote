<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="shortcut icon" href="../assets/img/iconos/rosa.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" defer></script>

    <link rel="stylesheet" href="../assets/css/register.css"> 

    <script src="../assets/js/login/mensaje.js" defer></script>
</head>
<body>

<form action="../login.php" method="POST">
    <div class="contenedorForm">
        <h1>Iniciar Sesión</h1>

        <div class="contenedor"> 
            <input type="email" name="email" placeholder="Correo electrónico o nombre" class="rellenar" required>
        </div>

        <div class="contenedor"> 
            <input type="password" name="contraseña" placeholder="Ingrese su contraseña" class="rellenar" required>
        </div>
        <div id="mensaje"></div>

        <button type="submit" class="btn" name="btn">Ingresar</button>
       
        <p style="margin-top: 15px;" class="cuenta">
            ¿No tenés cuenta?  
            <a href="register.php">Registrate aquí</a>
        </p>
    </div>
</form>

</body>
</html>
