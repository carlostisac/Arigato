<?php

$conexion = new mysqli("pfinal","root","","arigato");
if($conexion){
    //echo "La conexion funciono correctamente";
}else{
    echo "Fallo la conexion";
}

?>