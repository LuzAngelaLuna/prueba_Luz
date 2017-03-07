<?php 

include 'conexion.php';

if(isset($_POST["Enviar"]))
{ 
   $nombre = $_POST["nombre"];
   $apellido_paterno = $_POST["apellido_paterno"];
   $apellido_materno = $_POST["apellido_materno"];
   $email = $_POST["email"];
   $Fecha_nac = $_POST["Fecha_nac"];
   $Direccion = $_POST["Direccion"];
   if($_POST['nombre'] == '' or $_POST['apellido_paterno'] == '' or $_POST['apellido_materno'] == '' or $_POST['email'] == '' or $_POST['Fecha_nac'] == '' or $_POST['Direccion'] == '')
   { 
    echo 'Por favor llene todos los campos.';
} else{
    $query_in = "INSERT INTO empleados (id,nombre,apellido_paterno,apellido_materno,email,Fecha_nac,Direccion)
    VALUES (NULL,'$nombre','$apellido_paterno','$apellido_materno','$email','$Fecha_nac','$Direccion')";
    mysql_query($query_in) or die(mysql_error());
    echo 'El usuario '.$nombre.' ha sido registrado de manera satisfactoria.<br />';
}echo'bien'; 
} 
}?> 