<?php
// Mostrar "Hola món!"
echo "<h1>Hola món!</h1>";

// Connexió a la base de dades MySQL
$servername = "db";  // Nom del servei de la base de dades, que és 'db' al docker-compose.yml
$username = "user";  // Usuari que vas definir al docker-compose.yml
$password = "userpass";  // Contrasenya definida al docker-compose.yml
$dbname = "mydb";  // Nom de la base de dades

// Crear connexió
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprovar connexió
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

echo "<p>Connexió a la base de dades establerta correctament!</p>";

// Tancar connexió
$conn->close();
?>

