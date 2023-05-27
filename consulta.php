<?php
include("conexion.php");

// Realizar la consulta
$sql = "SELECT * FROM usuarios";
$result = $conexion->query($sql);

// Mostrar los resultados en un formulario HTML
if ($result->num_rows > 0) {
    
    echo "<form>";
    while ($row = $result->fetch_assoc()) {
        echo "<input type='text' name='nombre' value='" . $row["nombre"] . "'><br>";
        echo "<input type='email' name='email' value='" . $row["email"] . "'><br>";
        echo "<input type='password' name='contraseña' value='" . $row["contraseña"] . "'><br>";
        // Añade aquí más campos según tu estructura de tabla
        echo "<br>";
        
    }
    echo "</form>";
} else {
    echo "No se encontraron resultados.";
}

?>
