<!-- filepath: c:\xampp\htdocs\Gerardo\dashboard\dashboard.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css"> <!-- Archivo CSS personalizado -->
</head>
<body>
    <!-- Header -->
    <header class="navbar navbar-dark bg-primary p-3">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Mi Dashboard</a>
            <button class="btn btn-outline-light" onclick="logout()">Cerrar Sesión</button>
        </div>
    </header>

    <!-- Main Content -->
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-light sidebar p-3" style="width: 250px; height: 100vh;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="perfil_user.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="asistencia_user.php">Asistencia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajustes_user.php">Ajustes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="help_user.php">Ayuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="logout()">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content Area -->
        <main class="p-4" style="flex-grow: 1;">
            <h1>Bienvenido al Dashboard</h1>
            <hr>
            <p>Aca va ir el contenido general.</p>
        </main>
    </div>

    <script>
        function logout() {
            if (confirm("¿Estás seguro de que deseas cerrar sesión?")) {
                window.location.href = "../index.php";
            }
        }
    </script>
</body>
</html>