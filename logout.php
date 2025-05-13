<!DOCTYPE html>
<html>
<head>
    <title>Cerrando Sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php
        session_start();
        session_destroy();
        ?>
        
        <h2>Sesión Cerrada</h2>
        <div class="message success">Has cerrado sesión correctamente</div>
        <a href="index.php" class="btn-link">Volver al Inicio</a>
    </div>
</body>
</html>