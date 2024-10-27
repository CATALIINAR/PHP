<?php

include 'dbcon.php';

// atrapar las variables que me envian desde index.php

$Nombre_Completo=$_POST["Nombre_Completo"];
$Correo=$_POST["Correo"];
$Ciudad=$_POST["Ciudad"];
$pqr=$_POST["pqr"];

// insertar valores atrapados a la base de datos, verificando que el usuario no haya enviado una queja antes 

$consultarCliente = "SELECT COUNT(*) as quejas_enviadas FROM pqr WHERE correo_electronico = '$Correo'";
$resultado_existeCliente = mysqli_query($con1, $consultarCliente);
$row = mysqli_fetch_assoc($resultado_existeCliente);

if ($row['quejas_enviadas'] > 0) {
    echo "Lo siento usted ya enviado una queja con antelación";
} else {
    $insertsql = "INSERT INTO pqr(nombres_Completo, correo_electronico, ciudad, solicitud) VALUES('$Nombre_Completo','$Correo','$Ciudad', '$pqr')";
    
}

// ejecutar la consulta

$res = mysqli_query($con1, $consultarCliente);  

if($res){
    echo "Datos insertados exitosamente";
    mysqli_close($con1); 
    header("Location: index.php");
    exit; 
}
else {
    echo "Error al insertar datos
    ";
}

?>