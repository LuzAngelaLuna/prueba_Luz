<?php

try {
	$usuario= "root";
	$contraseña="";
    $mbd = new PDO('mysql:host=localhost;dbname=nulldata', $usuario, $contraseña);
 
   $sql='SELECT nombre,apellido_paterno,apellido_materno from empleados ' ; 
        
   $result = $mbd->query($sql);		
	// Extract the values from $result
	$rows = $result->fetchAll();

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>