<?php
// Variables con los datos de conexión
$servername = "mysql-php"; // Docker tiene su propio dns y en este caso este dominio apunta a la base de datos
// El dominio lo determina el nombre del servicio (mirar docker-compose)
$username = "root"; // El usuario
$password = "123456789"; // Contraseña

// Variable que hace la conexión
$conn = new mysqli($servername, $username, $password);

// Comprobación de la conexión
if ($conn->connect_error) { // -> Permite acceder a propiedades o métodos de un objeto instanciado.
    die("Error de conexión: " . $conn->connect_error);
}
// La lógica es que si la variable conn da error de conexión responde con la función die
// que termina el script mostrando un mensaje, en este caso las comillas y el log del comando $conn->connect_error
echo "Conexión exitosa"; // Si no muere en el if quiere decir que la ejecución a funciona correctamente y muestra este echo
$conn->close(); // Termina la conexión
?>