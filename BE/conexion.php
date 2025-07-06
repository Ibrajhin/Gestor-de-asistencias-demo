<?php
// Configuración de la base de datos
$servername = "localhost";  // Cambia esto si tu servidor MySQL está en otro host
$username = "root";         // Tu usuario de MySQL
$password = "";             // Tu contraseña de MySQL
$dbname = "Control_asistencia";  // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
