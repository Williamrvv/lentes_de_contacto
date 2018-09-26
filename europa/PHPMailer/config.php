<?php

/*
*
* Endeos, Working for You
* blog.endeos.com
*
*/

require_once('PHPMailerAutoload.php');


$mail = new PHPMailer;

//$mail->SMTPDebug    = 3;

$mail->IsSMTP();
$mail->Host = 'localhost';   /*localhost*/																		
$mail->SMTPSecure = '';   /**/
$mail->Port = 25;   /*Puerto de conexión al servidor SMTP*/
$mail->SMTPAuth = true;   /*Para habilitar o deshabilitar la autenticación*/
$mail->Username = 'wvalverde@topexlabs.com';   /*Usuario, normalmente el correo electrónico*/
$mail->Password = 'Wilval100*';   /*Tu contraseña*/
$mail->From = 'wvalverde@topexlabs.com';   /*Correo electrónico que estamos autenticando*/
$mail->FromName = 'topex';   /*Puedes poner tu nombre, el de tu empresa, nombre de tu web, etc.*/
$mail->CharSet = 'UTF-8';   /*Codificación del mensaje*/

?>