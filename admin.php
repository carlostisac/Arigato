


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
  <h1 ><center> administrar </center></h1>
    <div class="row">
    <div class="col-3"></div>
        <div class="col-6">
        
    <form action="consulta.php" method="POST" class="row g-3 needs-validation" novalidate>
      <div class="form-group">
        <label for="nombre" style="color:white;">Nombre</label>
        <input
          type="text"
          class="form-control"
          name="nombre"
          id="nombre"
          placeholder="Nombre"
          required
        />
        <input type="submit" value="Consultar">
        <div class="valid-feedback">OK</div>
                    <div class="invalid-feedback">
                      Es necesario poner el nombre
                    </div>
      </div>
      <div class="form-group">
        <label for="email" style="color:white;">Email</label>
        <input
          type="email"
          class="form-control"
          name="email"
          id="email"
          aria-describedby="emailHelp"
          placeholder="Enter email"
          required
        />
        <input type="submit" value="Consultar">
        <small id="emailHelp" class="form-text text-muted"
          >We'll never share your email with anyone else.</small>
          
      </div>
      <div class="form-group">
        <label for="contraseña" style="color:white;">Contraseña</label>
        <input
          type="password"
          class="form-control"
          name="contraseña"
          id="Contraseña"
          placeholder="Password"
          required
        />
        <input type="submit" value="Consultar">
        
      </div>
      
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" required/>
        <label class="form-check-label" for="exampleCheck1" style="color:white;">verificar</label>
        
      </div>
      <button onclick="window.location.href = 'http://pfinal/login.php'" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">salir</button><br>

    </form>
    </div>
    <div class="col-3"></div>
    </div>
    </div>
    
  </body>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>


    


<?php

include("footer.php");
?>

