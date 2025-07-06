<?php

include('conexion.php');

session_start();


if (!isset($_SESSION['correo'])) {
    echo "<script>window.location.href='recuperar.php';</script>";
    exit();
}

$correo = $_SESSION['correo']; 
$respuesta = $_POST['security_answer']; 


$query = "SELECT security_answer FROM usuarios WHERE correo = '$correo'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $correct_answer = $row['security_answer'];

    // Comparar las respuestas 
    if (password_verify($respuesta, $correct_answer)) {
        // Si la respuesta es correcta, redirigir al usuario a una nueva página (por ejemplo, para cambiar la contraseña)
        echo "<script>alert('Respuesta correcta. Puedes cambiar tu contraseña ahora.'); window.location.href='../new_password.php';</script>";
    } else {
        // Si la respuesta es incorrecta, mostrar un mensaje de error
        echo "<script>alert('La respuesta de seguridad es incorrecta. Intenta nuevamente.'); window.location.href='../recuperar2.php';</script>";
    }
} else {
    // Si no se encuentra el correo, mostrar un mensaje de error
    echo "<script>alert('Correo no encontrado. Intenta nuevamente.'); window.location.href='../recuperar.php';</script>";
}

// Cerrar la conexión
$conn->close();
?>
