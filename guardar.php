<?php

include(conexion.php);
$sql = "INSERT INTO Usuarios (nombre, apellido, edad ) VALUES('migue,'romero','21')";

$res = $conexion->query($sql);

if($res){
    echo "insercion Exitosa";
}else{
    echo "Fallo la insercion";
}

?>