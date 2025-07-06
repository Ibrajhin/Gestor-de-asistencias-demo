<?php
// Incluir el archivo de conexión
include('conexion.php');

session_start();

if (!isset($_SESSION['correo'])) {
    echo "<script>window.location.href='../recuperar.php';</script>";
    exit();
}

$correo = $_SESSION['correo'];  
$new_password = $_POST['new_password'];  
$confirm_password = $_POST['confirm_password'];  

// Verificar si las contraseñas coinciden
if ($new_password !== $confirm_password) {
    echo "<script>alert('Las contraseñas no coinciden. Por favor, intentalo nuevamente.'); window.location.href='../new_password.php';</script>";
} else {

    // Hashear la nueva contraseña
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Actualizar la contraseña en la base de datos
    $query = "UPDATE usuarios SET password = '$hashed_password' WHERE correo = '$correo'";
    if ($conn->query($query) === TRUE) {
        // Si la actualización fue exitosa, redirigir al usuario a la página de inicio
        echo "<script>alert('Contraseña actualizada con éxito.'); window.location.href='../index.php';</script>";
    } else {
        // Si hubo un error, mostrar un mensaje
        echo "<script>alert('Hubo un error al actualizar la contraseña. Intenta nuevamente.'); window.location.href='../new_password.php';</script>";
    }
}

// Cerrar la conexión
$conn->close();
?>
