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
        <form id="verificarForm" action="BE/recuperar_be.php" method="POST">
            <div class="form-group">
                <label for="username">Correo Electrónico:</label>
                <input type="email" id="username" name="username" placeholder="Ingrese su correo" required>
            </div>
            <button type="submit" class="btn-register">Verificar</button>

            <div class="extra-links">
                <p>¿Quieres iniciar sesión? <a href="index.php">Haz clic aquí</a></p>
                <p>¿No estás registrado? <a href="register.php">Haz clic aquí</a></p>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 U.E.M Manuel Palacios Fajardo. Todos los derechos reservados.</p>
    </footer>

</body>
</html>


   
            

