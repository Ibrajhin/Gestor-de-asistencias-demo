<!-- filepath: c:\xampp\htdocs\Gerardo\dashboard\help_user.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="../css/dashboard.css"> <!-- Archivo CSS personalizado -->
    <style>
        /* Estilos para el loader */
        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        #loader .spinner-border {
            width: 3rem;
            height: 3rem;
        }

        /* Ocultar el contenido principal mientras el loader está activo */
        body.loading main {
            display: none;
        }
    </style>
</head>
<body class="loading">
    <!-- Loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Cargando...</span>
        </div>
    </div>

    <!-- Header -->
    <header class="navbar navbar-dark bg-primary p-3">
        <div class="container-fluid">
            <a href="dashboard.php" class="navbar-brand">Mi Dashboard</a>
            <button class="btn btn-outline-light" onclick="logout()">Cerrar Sesión</button>
        </div>
    </header>

    <!-- Main Content -->
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-light sidebar p-3" style="width: 250px; height: 100vh;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Inicio</a>
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
                    <a class="nav-link active" href="help_user.php">Ayuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="logout()">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content Area -->
        <main class="p-4" style="flex-grow: 1;">
            <h1>Descarga el Manual de Usuario</h1>
            <hr>
            <div class="card shadow-sm" style="max-width: 600px;">
                <div class="card-body d-flex align-items-center">
                    <i class="bi bi-file-earmark-pdf-fill text-danger" style="font-size: 2rem; margin-right: 15px;"></i>
                    <div>
                        <h5 class="card-title">Manual de Usuario</h5>
                        <p class="card-text">Haz clic en el botón para descargar el manual de usuario en formato PDF.</p>
                        <a href="../manuales/manual_usuario.pdf" class="btn btn-primary" download>
                            Descargar Manual
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Ocultar el loader después de que la página haya cargado
        window.addEventListener('load', () => {
            document.body.classList.remove('loading');
            document.getElementById('loader').style.display = 'none';
        });

        function logout() {
            if (confirm("¿Estás seguro de que deseas cerrar sesión?")) {
                window.location.href = "../index.php";
            }
        }
    </script>
</body>
</html>