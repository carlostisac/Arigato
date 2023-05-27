<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Galeria</title>
    <!--Galeria--> 
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <!--Galeria -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!--Galeria--> 
    <link rel="stylesheet" href="./style.css">
    <!--Galeria -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <?php
    include("header.php");
    ?>
  </head>

  <body style="background-color: #636363;">
   
    

    <!-------------------------------------------------Contacto------------------------------>

    <div class="tz-gallery ">
    <center><h4 class="text-white mx-auto fw-bold mx-auto p-1" style="font-size: 40px" id="Galeria">Galería </h1></center>
      <div class="row">
          <div class="col-sm-12 col-md-4">
              <a class="lightbox" href="Imagenes/G2.jpg">
                  <img src="Imagenes/G2.jpg" alt="Bridge">
              </a>
          </div>
          <div class="col-sm-6 col-md-4">
              <a class="lightbox" href="Imagenes/G3.jpg">
                  <img src="Imagenes/G3.jpg" alt="Park">
              </a>
          </div>
          <div class="col-sm-6 col-md-4">
              <a class="lightbox" href="Imagenes/G4.jpg">
                  <img src="Imagenes/G4.jpg" alt="Tunnel">
              </a>
          </div>
          <div class="col-sm-12 col-md-6">
              <a class="lightbox" href="Imagenes/G14.jpeg">
                  <img src="Imagenes/G14.jpeg" alt="Traffic">
              </a>
          </div>
          <div class="col-sm-12 col-md-6">
              <a class="lightbox" href="Imagenes/G6.jpg">
                  <img src="Imagenes/G6.jpg" alt="Coast">
              </a>
          </div> 
          <div class="col-sm-6 col-md-4">
              <a class="lightbox" href="Imagenes/G7.jpg">
                  <img src="Imagenes/G7.jpg" alt="Rails">
              </a>
          </div>
          
          <div class="col-sm-12 col-md-4">
              <a class="lightbox" href="Imagenes/G11.jpeg">
                  <img src="Imagenes/G11.jpeg" alt="Bridge">
              </a>
          </div>
          <div class="col-sm-6 col-md-4">
              <a class="lightbox" href="Imagenes/G12.jpeg">
                  <img src="Imagenes/G12.jpeg" alt="Park">
              </a>
          </div>

      </div>

  </div>

    
    
    <!-----FOOTER------FOOTER-----FOOTER---FOOTER-------FOOTER------FOOTER--------FOOTER--------->
    <?php

include("footer.php");
?>




</footer>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

     <!--Los scripts siempre van aqui-->
     <script src="js/bootstrap.bundle.min.js"></script>
    
    <!--Galeria empieza-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.tz-gallery');
  </script>
    <!--Galeria termina-->




  </body>

</html>