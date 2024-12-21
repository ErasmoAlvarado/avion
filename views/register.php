<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/form.css">
    <title>Document</title>
</head>
<body>
    <div class="center-container">
        <div class="form-container">
        <img src="../public/assets/signup.jpg" alt="logo" class="logo">
        <p class="title">Registrate :)</p>
        <form method="post" class="form">
            <input type="number" class="input" placeholder="Cédula" name="cedula" required>
            <div class="input-row">
                <input type="text" class="input" placeholder="nombre" name="nombre" required>
                <input type="text" class="input" placeholder="apellido" name="apellido" required>
            </div>
            <input type="email" class="input" placeholder="Correo electrónico" name="correo" required>
            <input type="password" class="input" placeholder="Contraseña" name="contrasena" required>
            <button type="submit" class="form-btn">Registrarte</button>
        </form>
        <div class="sign-up-center">
            <p class="sign-up-label">
                ¿Ya tienes cuenta?<a class="sign-up-link"  href="/avion/public">Ingresa</a>
            </p>
        </div>
        </div>
    </div>
</body>
</html>