<?php

$conexion = new mysqli("programacionweb","root","","php");
if($conexion){
    //echo "La conexion funciono correctamente";
}else{
    echo "Fallo la conexion";
}

?>