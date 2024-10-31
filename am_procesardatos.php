<?php

include 'php/conexion.php'; 

// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono']; // Captura el teléfono
    $mensaje = $_POST['mensaje'];

    // Preparar y enlazar
    $stmt = $conn->prepare("INSERT INTO contacto (nombre, email, telefono, mensaje) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $email, $telefono, $mensaje); // Agregar el teléfono a los parámetros

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Mensaje enviado exitosamente.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
} else {
    echo "No se enviaron datos.";
}
?>
