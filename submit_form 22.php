<?php
// Incluir archivo de conexión a la base de datos si no lo has hecho ya
include("conexion 22.php"); // Asegúrate de tener este archivo creado con la conexión a la base de datos

// Procesar el formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $name = $_POST['name'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $hab = $_POST['hab'];
    $adultos = $_POST['adultos'];
    $niños = $_POST['niños'];
    $pago = $_POST['pago'];

    // Insertar los datos en la base de datos
    $sql_insert = "INSERT INTO items (name, dni, email, checkin, checkout, hab, adultos, niños, pago) VALUES ('$name', '$dni', '$email', '$checkin', '$checkout', '$hab', '$adultos', '$niños', '$pago')";

    if ($conn->query($sql_insert) === TRUE) {
        // Redirigir de vuelta a la página principal después de la inserción
        header("Location: index.php");
    } else {
        echo "Error al insertar el nuevo registro: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
