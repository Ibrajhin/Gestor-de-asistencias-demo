<?php
// Iniciar la sesión
session_start();

// Verificar si el correo está en la sesión
if (!isset($_SESSION['correo'])) {
    // Si no hay correo en la sesión, redirigir al usuario al formulario de recuperación
    echo "<script>window.location.href='recuperar.php';</script>";
    exit();
}

$correo = $_SESSION['correo'];  // Obtener el correo almacenado en la sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Asistencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

    <header class="header">
        <img src="assets/MPPPE.png" alt="Logo">
        <h2>U.E.M Manuel Palacios Fajardo</h2>
    </header>

    <div class="register-container">
        <img src="assets/logo_escuela.png" alt="Logo Institución" class="login-logo">
        <form id="securityForm" action="BE/new_password_be.php" method="POST">
            <div class="form-group">
                <input type="password" id="new_password" name="new_password" placeholder="Nueva contraseña" required>
            </div>
            <div class="form-group">
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmar contraseña" required>
            </div>

            <button type="submit" class="btn-register">Aceptar</button>
            <div class="extra-links">
                <p>¿Quieres iniciar sesión? <a href="index.php">Haga click acá</a></p>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 U.E.M Manuel Palacios Fajardo. Todos los derechos reservados.</p>
    </footer>

</body>
</html>