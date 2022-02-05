<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Formulario</title> <!-- Aquí va el título de la página -->

</head>

<body>

<?php

// Recibiendo los datos del formulario

$Nombre = $_POST['nombre'];
$Email = $_POST['email'];
$Mensaje = $_POST['mensaje'];

// Condicional para verificar que el usuario haya rellenado los campos obligatorios

if ($Nombre=='' || $Email=='' || $Mensaje==''){

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{

// Llamando a la clase PHPMAILER (nos facilitará el envio del formulario)

    require("PHPMailer/class.phpmailer.php");
    require("PHPMailer/class.smtp.php");

    $mail = new PHPMailer();

    $mail->From     = $Email;
    $mail->FromName = $Nombre; 
    $mail->AddAddress("samaponte28@gmail.com"); // Dirección a la que llegaran los mensajes.

// Datos que recibiré en el correo

    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Contacto";
    $mail->Body     =  "Nombre: $Nombre \n<br />".
    "Email: $Email \n<br />".    
    "Mensaje: $Mensaje \n<br />";

// Datos del servidor SMTP

 // $mail->IsSMTP();
  // $mail->CharSet = 'UTF-8';
  // $mail->SMTPAuth = true;
  // $mail->SMTPSecure = "tls";
  // $mail->Host = "smtp.gmail.com"; //servidor SMTP
  // $mail->Port = 587; //puerto SMTP
  // $mail->Username = 'tucorreo@gmail.com';
  // $mail->Password = 'contraseña-del-correo';


   // Verificando que todo esté correcto


   if ($mail->Send())
    echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

}

?>

</body>
</html>