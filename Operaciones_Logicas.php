<?php
//crear las variables
$logueado=true;
$administrador=false;
$voluntario=true;
echo "<p>variables: $logueado</p>";
echo "<p>variables: $administrador</p>";
echo "<p>variables: $voluntario</p>";
//Si el usuario está logueado y es administrador.
echo "Si el usuario está logueado y es administrador";
var_dump($logueado && $administrador);
//Si el usuario es administrador o voluntario.
echo"Si el usuario es administrador o voluntario";
 var_dump($administrador || $voluntario);
//Si el usuario no está logueado.
echo"Si el usuario no está logueado";
 var_dump( ! $logueado);
 //Si el usuario es administrador o voluntario, pero no las dos cosas.
 echo"Si el usuario es administrador o/y voluntario, pero no las dos cosas";
var_dump ($administrador xor $voluntario); 

?>