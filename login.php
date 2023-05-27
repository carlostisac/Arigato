

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

include("headerl.php");
?>
  <body style="background-image: url(Imagenes/Fondo.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;">
  <div class="container">
      
    <h1 ><center> Bienvenido </center></h1>
    <div class="row">
    <div class="col-3"></div>
        <div class="col-6">
        
    <form action="verificar.php" method="POST" class="row g-3 needs-validation" novalidate>
      <div class="form-group">
        <label for="email" style="color:white;">Email address</label>
        <input
          type="email"
          class="form-control"
          name="email"
          id="email"
          aria-describedby="emailHelp"
          placeholder="Enter email"
          required
        />
        <div class="valid-feedback">OK</div>
                    <div class="invalid-feedback">
                      Es necesario poner el correo
                    </div>
        <small id="emailHelp" class="form-text text-muted"
          >We'll never share your email with anyone else.</small
        >
      </div>
      <div class="form-group">
        <label for="contraseña" style="color:white;">Password</label>
        <input
          type="password"
          class="form-control"
          name="contraseña"
          id="contraseña"
          placeholder="Password"
          required
        />
        <div class="valid-feedback">OK</div>
                    <div class="invalid-feedback">
                      Es necesario poner tu contraseña
                    </div>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" required />
        <label class="form-check-label" for="exampleCheck1" style="color:white;">Verificar</label>
        <div class="valid-feedback">OK</div>
                    <div class="invalid-feedback" style="color:white;">
                      Es necesario verificar
                    </div>
      </div>
      <button type="submit" value="Verificar" class="btn btn-primary">Iniciar sesion</button><br>
      <p style="color:white;">¿no tienes cuenta?,<a href="registro.php">crea una</a></p><br>
      <script>
                    (() => {
                      "use strict";

                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                      const forms =
                        document.querySelectorAll(".needs-validation");

                      // Loop over them and prevent submission
                      Array.from(forms).forEach((form) => {
                        form.addEventListener(
                          "submit",
                          (event) => {
                            if (!form.checkValidity()) {
                              event.preventDefault();
                              event.stopPropagation();
                            }

                            form.classList.add("was-validated");
                            
                          },
                          false
                          
                        );
                      });
                    })();
                  </script>
    </form>
    <?php

include("verificar.php");
?>
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

