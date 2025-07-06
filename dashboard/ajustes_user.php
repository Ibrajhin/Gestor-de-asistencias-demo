<!-- filepath: c:\xampp\htdocs\Gerardo\dashboard\dashboard.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css"> <!-- Archivo CSS personalizado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> <!-- Bootstrap Icons -->
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

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            flex: 1 1 calc(50% - 20px); /* Dos columnas */
            max-width: calc(50% - 20px);
        }

        .card i {
            font-size: 2rem;
            margin-right: 15px;
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
                    <a class="nav-link" href="dashboard.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="perfil_user.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="asistencia_user.php">Asistencia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="ajustes_user.php">Ajustes</a>
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
            <h1>Ajustes</h1>
            <hr>
            <div class="card-container">
                <!-- Cambiar datos del perfil -->
                <div class="card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-person-circle text-primary"></i>
                        <div>
                            <h5 class="card-title">Cambiar Datos del Perfil</h5>
                            <p class="card-text">Actualiza tu información personal.</p>
                            <a href="perfil_user.php" class="btn btn-primary">Editar Perfil</a>
                        </div>
                    </div>
                </div>

                <!-- Descargar Curriculum -->
                <div class="card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-file-earmark-person-fill text-success"></i>
                        <div>
                            <h5 class="card-title">Descargar Curriculum</h5>
                            <p class="card-text">Descarga tu curriculum en formato PDF.</p>
                            <a href="../documentos/curriculum.pdf" class="btn btn-success" download>Descargar</a>
                        </div>
                    </div>
                </div>

                <!-- Descargar Listado de Asistencia -->
                <div class="card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-list-check text-warning"></i>
                        <div>
                            <h5 class="card-title">Descargar Listado de Asistencia</h5>
                            <p class="card-text">Obtén el listado de asistencia en formato PDF.</p>
                            <a href="../documentos/listado_asistencia.pdf" class="btn btn-warning" download>Descargar</a>
                        </div>
                    </div>
                </div>

                <!-- Presentar Queja -->
                <div class="card shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-chat-dots-fill text-danger"></i>
                        <div>
                            <h5 class="card-title">Presentar Queja</h5>
                            <p class="card-text">Envía una queja o sugerencia al administrador.</p>
                            <a href="queja_form.php" class="btn btn-danger">Presentar Queja</a>
                        </div>
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