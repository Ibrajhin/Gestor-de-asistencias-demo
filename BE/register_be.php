<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Asistencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/register.css">
    <!-- Estilos desde CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- JS desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    
</head>
<body>

<?php
// Incluir el archivo de conexión
include('conexion.php');

// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Encriptar la contraseña
    $security_question = $_POST['security_question'];
    $security_answer = password_hash($_POST['security_answer'], PASSWORD_DEFAULT); // Encriptar la respuesta si lo deseas

    // Verificar si el correo ya está registrado
    $check_email = "SELECT * FROM usuarios WHERE correo = '$correo'";
    $result = $conn->query($check_email);

    if ($result->num_rows > 0) {
        // Si el correo ya está registrado
        echo "<script>
                alertify.error('El correo ya está registrado. Por favor, ingresa otro.');
                setTimeout(() => { window.location.href='../register.php'; }, 3000);
              </script>";
    } else {
        // Preparar y ejecutar la consulta para insertar los datos
        $sql = "INSERT INTO usuarios (nombre, apellido, correo, password, security_question, security_answer) 
                VALUES ('$nombre', '$apellido', '$correo', '$password', '$security_question', '$security_answer')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    alertify.success('Registro exitoso. Puedes iniciar sesión ahora.');
                    setTimeout(() => { window.location.href='../index.php'; }, 3000);
                  </script>";
        } else {
            echo "<script>
                    alertify.error('Error: " . $conn->error . "');
                    setTimeout(() => { window.location.href='../register.php'; }, 3000);
                  </script>";
        }
    }
    
    // Cerrar la conexión
    $conn->close();
}
?>

</body>
</html>



