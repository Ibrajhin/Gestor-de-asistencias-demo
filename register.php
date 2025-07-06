<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Asistencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/alertify.min.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.min.css"> <!-- Tema opcional -->
    <script src="librerias/alertifyjs/alertify.min.js"></script>
</head>
<body>

    <header class="header">
        <img src="assets/MPPPE.png" alt="Logo">
        <h2>U.E.M Manuel Palacios Fajardo</h2>
    </header>

    <div class="register-container">
        <img src="assets/logo_escuela.png" alt="Logo Institución" class="login-logo">
        <form id="registerForm" action="BE/register_be.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required pattern="[A-Za-z\s]+" title="Solo se permiten caracteres alfabéticos" maxlength="25">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" required pattern="[A-Za-z\s]+" title="Solo se permiten caracteres alfabéticos" maxlength="25">
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" required maxlength="30" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" required maxlength="16" minlength="8">
            </div>
            <div class="form-group">
                <label for="security_question">Pregunta de Seguridad:</label>
                <input type="text" name="security_question" required maxlength="20" >
            </div>
            <div class="form-group">
                <label for="security_answer">Respuesta de Seguridad:</label>
                <input type="password" name="security_answer" required>
            </div>
            <button type="submit" class="btn-register">Registrarse</button>

            <div class="extra-links">
                <p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión aquí</a></p>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 U.E.M Manuel Palacios Fajardo. Todos los derechos reservados.</p>
    </footer>

</body>
</html>

