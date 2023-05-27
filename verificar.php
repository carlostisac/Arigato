<?php
include("conexion.php");

// Obtener los datos del formulario

@$email = $_POST["email"];
@$contraseña = $_POST["contraseña"];



// Procesar el envío del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $contraseña = $_POST["contraseña"];

    // Consulta a la base de datos para verificar los datos
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$contraseña'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        // Los datos coinciden en la base de datos, realizar otras acciones o redirigir a otra página
        // ...
        header("Location: index.php");
    exit; // Asegurarse de que no se ejecute más código después de la redirección
    } else {
        // Los datos no coinciden en la base de datos, mostrar mensaje de error
        echo "Los datos ingresados no se encuentran en la base de datos.";
        header("Location: login.php");
    }
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>  


