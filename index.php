<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="nombre">Nombre de Usuario</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Ingresa tu nombre">
            </div>

            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id="correo" name="correo" required placeholder="Ingresa tu correo">
            </div>

            <button type="submit">Ingresar al Sistema</button>
        </form>
    </div>
</body>
</html>