<?php
// Incluir el archivo de conexión
include('conexion.php');

// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el correo electrónico desde el formulario
    $correo = $_POST['username'];

    // Verificar si el correo está registrado en la base de datos
    $check_email = "SELECT * FROM usuarios WHERE correo = '$correo'";
    $result = $conn->query($check_email);

    if ($result->num_rows > 0) {
        // Si el correo está registrado, redirigir a recuperar2.php y pasar el correo
        session_start();  // Iniciar sesión para guardar el correo en la sesión
        $_SESSION['correo'] = $correo;  // Guardar el correo en la sesión
        echo "<script>window.location.href='../recuperar2.php';</script>";
    } else {
        // Si el correo no está registrado, mostrar un alert y redirigir al formulario de recuperación
        echo "<script>alert('El correo electrónico es incorrecto o no está registrado.'); window.location.href='../recuperar.php';</script>";
    }

    // Cerrar la conexión
    $conn->close();
}
?>
