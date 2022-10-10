<?php 

    ini_set("SMTP", "mail.tiendasindusriales.com");
    ini_set("smtp_port", "localhost");
    ini_set('sendmail_from', 'info@tiendasindustriales.com');

    $nombre = strip_tags($_POST["name_surname"]);
    $email =  strip_tags($_POST["email"]);
    $cedula = strip_tags($_POST["cedula"]);
    $barrio = strip_tags($_POST["barrio"]);
    $phone =  strip_tags($_POST["phone"]);
    $cargo =  strip_tags($_POST["tipo_de_cargo"]);
    
    $nameFile = $_FILES['archivo']['name'];
    $sizeFile = $_FILES['archivo']['size'];
    $typeFile = $_FILES['archivo']['type'];
    $tempFile = $_FILES["archivo"]["tmp_name"];
    
    $redirect = "https://www.tiendasindustriales.com/trabaja-con-nosotros/index.php?name=$nombre";

    $fecha = time();
    $fechaFormato = date("j/n/Y",$fecha);

    $correoDestino = "info@tiendasindustriales.com";

    //Asunto del correo
    $asunto = "Nueva hoja de vida enviada desde el sitio web";

    // Mensaje en formato multipart MIME
    $cabecera = "MIME-VERSION: 1.0\r\n";
    $cabecera .= "Content-type: multipart/mixed;";
    $cabecera .= "boundary=\"=T=I=\"\r\n";
    $cabecera .= "From: {$email}";

    $cuerpo .= "--=T=I=\r\n";
    $cuerpo.=  "Content-type: text/plain; charset=iso-8859-1\r\n";
    $cuerpo .= "charset=utf-8\r\n";
    $cuerpo .= "Content-Transfer-Encoding: 8bit\r\n";
    $cuerpo .= "\r\n"; // linea vacia
    $cuerpo .= "Hoja de vida enviada por: " . $nombre . " \r\n";
    $cuerpo .= "Email: " . $email . "\r\n";
    $cuerpo .= "Documento: " . $cedula. "\r\n";
    $cuerpo .= "Localidad: " . $barrio . "\r\n";
    $cuerpo .= "Cargo al que aspira: " . $cargo  . "\r\n";
    $cuerpo .= "\r\n"; // linea vacia

    // Archivo adjunto
    $cuerpo .= "--=T=I=\r\n";
    $cuerpo .= "Content-Type: application/pdf; name=\"".$nameFile."\"\r\n";
    $cuerpo .= "Content-Type: application/msword; name=\"".$nameFile."\"\r\n";
    $cuerpo .= "Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document; name=\"".$nameFile."\"\r\n";
    $cuerpo .= "Content-Type: application/octet-stream; ";
    $cuerpo .= "name=" . $nameFile . "\r\n";
    $cuerpo .= "Content-type: ".$typeFile.";name=\"".$nameFile."\"\n";
    $cuerpo .= "Content-Transfer-Encoding: base64\r\n";
    $cuerpo .= "Content-Disposition: attachment;filename=\"".$nameFile."\"\r\n";
    $cuerpo .= "filename=" . $nameFile . "\r\n";
    $cuerpo .= "\r\n"; // línea vacía


    $fp = fopen($tempFile, "rb");
    $file = fread($fp, $sizeFile);
    $file = chunk_split(base64_encode($file));
    fclose($fp);

    $cuerpo .= "$file\r\n";
    $cuerpo .= "\r\n"; // linea vacia
    // Delimitador de mensaje
    $cuerpo .= "--=T=I=\r\n";
    

    // Envio del correo
    if(mail($correoDestino, $asunto, $cuerpo, $cabecera)){
        // echo "Correo Enviado";
        echo header("Location: $redirect");

    } else {
        echo "Error al enviar";
    }

?>