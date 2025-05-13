<!DOCTYPE html>
<html>
<head>
    <title>Procesando Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php
        session_start();
        require_once "conexion.php";
        require_once "clases/Persona.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];

            try {
                $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre = ? AND correo = ?");
                $stmt->execute([$nombre, $correo]);
                $usuario = $stmt->fetch();

                if ($usuario) {
              
                    $_SESSION["usuario_nombre"] = $usuario['nombre'];
                    $_SESSION["usuario_correo"] = $usuario['correo'];
                    $_SESSION["usuario_rol"] = "cliente"; 
                    
                    echo '<div class="message success">Login exitoso. Redirigiendo...</div>';
                    echo '<script>
                        setTimeout(function() {
                            window.location.href = "dashboard.php";
                        }, 1500);
                    </script>';
                } else {
                    echo '<div class="message error">Usuario no encontrado</div>';
                    echo '<a href="index.php" class="btn-link">Volver a intentar</a>';
                }
            } catch (PDOException $e) {
                echo '<div class="message error">Error en la base de datos: ' . $e->getMessage() . '</div>';
                echo '<a href="index.php" class="btn-link">Volver</a>';
            }
        } else {
            echo '<div class="message error">Método de acceso no válido</div>';
            echo '<a href="index.php" class="btn-link">Ir al formulario de login</a>';
        }
        ?>
    </div>
</body>
</html>