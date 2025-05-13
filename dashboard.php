<!DOCTYPE html>
<html>
<head>
    <title>Panel de Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        session_start();
        require_once "clases/Persona.php";
        require_once "conexion.php";

   
        if (!isset($_SESSION["usuario_nombre"]) || !isset($_SESSION["usuario_correo"])) {
            echo '<div class="message error">No has iniciado sesión</div>';
            echo '<a href="index.php" class="btn-link">Iniciar sesión</a>';
            exit();
        }

       
        $usuario = new Usuario(
            $_SESSION["usuario_nombre"],
            $_SESSION["usuario_correo"],
            $_SESSION["usuario_rol"]
        );
        ?>

        <div class="welcome-header">
            <h2>¡Bienvenido, <?php echo $usuario->nombre; ?>!</h2>
        </div>

        <div class="user-info">
            <p><?php echo $usuario->mostrarDatos(); ?></p>
            <p><?php echo $usuario->mensaje(); ?></p>
            <p><?php echo $usuario->metodoExtra(); ?></p>
        </div>

        <h3>Usuarios Registrados</h3>
        <div style="max-height: 300px; overflow-y: auto; margin: 15px 0;">
            <ul class="users-list">
                <?php
                $stmt = $pdo->query("SELECT nombre FROM usuarios");
                while ($row = $stmt->fetch()) {
                    echo "<li>" . htmlspecialchars($row['nombre']) . "</li>";
                }
                ?>
            </ul>
        </div>

        <a href="logout.php" class="btn-link btn-logout">Cerrar sesión</a>
    </div>
</body>
</html>