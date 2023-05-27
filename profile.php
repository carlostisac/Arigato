


<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="./style.css">
    <!--Galeria -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
  </head>
  <?php
include("header.php");
?>
  <body style="background-image: url(Imagenes/Fondo.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;">
  <div class="container">
      <div class="container">
        <div class= "row">
        <div class="col-3">
             

        </div>
        <div class="col-9">
        <?php
// Conexión a la base de datos
include("conexion.php");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Consulta a la base de datos para obtener los datos
$sql = "SELECT * FROM usuarios";
$result = $conexion->query($sql);

// Cerrar la conexión a la base de datos
$conexion->close();
?>


    <form method="POST" action="">
        <?php
        // Mostrar los datos en el formulario
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $nombre = $row["nombre"];
                $email = $row["email"];
                $contraseña = $row["contraseña"];

                echo '<label for="nombre">Nombre:</label>';
                echo '<input type="text" name="nombre" id="nombre" value="' . $nombre . '" required>';
                echo '<br>';
                echo '<label for="email">Email:</label>';
                echo '<input type="email" name="email" id="email" value="' . $email . '" required>';
                echo '<br>';
                echo '<label for="email">Contraseña:</label>';
                echo '<input type="text" name="contraseña" id="contraseña" value="' . $contraseña. '" required>';
                echo '<br>';
            }
        } else {
            echo "No hay datos en la base de datos.";
        }
        ?>

        <input type="submit" value="Guardar cambios">
    </form>
    <br>

    <button onclick="window.location.href = 'http://pfinal/login.php'" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">salir</button><br>
        </div>
        </div>
      </div>
    
  </body>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>


    


<?php

include("footer.php");
?>

