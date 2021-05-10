<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/esti.css">
        <body background="img/Paisaj.jpg">

    <title>Personal</title>
</head>
<body>
<?php

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$fecha_fecha=$_POST['fecha'];
$documento=$_POST['documento'];
$correo_elec=$_POST['correo'];
$contraseña=$_POST['contraseña'];

echo "GRACIAS POR HABER LLENADO EL FORMULARIO :D";
echo "<br>";
echo "<br>";
echo "Lo siguiente que verás son los datos los cuales tu llenaste:";
echo "<br>";
echo "<br>";
echo "Tu nombre es: " .$nombres; 
echo "<br>";
echo "Tu apellido es: " .$apellidos;
echo "<br>";
echo "Tu fecha de nacimiento es: " .$fecha_fecha;
echo "<br>";
echo "Tu documento de identidad es: " .$documento;
echo "<br>";
echo "Tu correo electrónico es: " .$correo_elec;
echo "<br>";
echo "Tu contraseña es: " .$contraseña ;
echo "<br>";
?>
<img src="img/Bienhecho.png" alt="">
<a href="formulario.html"><input type="submit" name="Regresar"><br>


</body>
</html>