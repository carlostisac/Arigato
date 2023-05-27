<?php


// Obtener los datos del formulario
@$nombre = $_POST["nombre"];
@$email = $_POST["email"];
@$contraseña = $_POST["contraseña"];




// Validar que los campos no estén vacíos
if (!empty($nombre) && !empty($email) && !empty($contraseña)) {
    // Realizar la conexión a la base de datos y realizar la inserción de datos
    include("conexion.php");
    // Aquí debes agregar tu código para conectar a la base de datos y realizar la inserción
// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios(nombre,email,contraseña) VALUES ('$nombre', '$email','$contraseña')";

if ($conexion->query($sql) === TRUE) {
    //echo "Datos guardados correctamente";
    
} else {
    echo "Error al guardar los datos: " . $conexion->error;
}
    // Mostrar mensaje de éxito
    //echo "Los datos se han guardado correctamente.";
    header("Location: index.php");
    exit; // Asegurarse de que no se ejecute más código después de la redirección

} else {
    // Mostrar mensaje de error
    echo "Por favor, completa todos los campos del formulario.";
}

// Cerrar la conexión
$conexion->close();
?>
