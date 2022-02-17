<!-- Envio de Email segun marca de la tienda -->
<?php 

// var_dump($_POST['email_destino']);
// die();

if ($_POST['email_destino'] == "servicioalcliente@discorreas.com") {

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para = 'servicioalcliente@discorreas.com';
    $titulo = 'Email desde sitio web Tiendas Industriales';
    
    $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
    
    if ($_POST['submit']) {
    if (mail ($para, $titulo, $msjCorreo)) {
    header("Location: email_enviado.php");
    } else {
    echo 'Falló el envio';
        }
    }

} else if ($_POST['email_destino'] == "administrador@americanadecorreas.com") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para = 'administrador@americanadecorreas.com"';
    $titulo = 'Email desde sitio web Tiendas Industriales';
    
    $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
    
    if ($_POST['submit']) {
    if (mail ($para, $titulo, $msjCorreo)) {
    echo 'El mensaje se ha enviado';
    header("Location: email_enviado.php");
    } else {
    echo 'Falló el envio';
        }
    }

} else if ($_POST['email_destino'] == "calle8@americanadecorreas.com") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para = 'calle8@americanadecorreas.com';
    $titulo = 'Email desde sitio web Tiendas Industriales';
    
    $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
    
    if ($_POST['submit']) {
    if (mail ($para, $titulo, $msjCorreo)) {
    echo 'El mensaje se ha enviado';
    header("Location: email_enviado.php");
    } else {
    echo 'Falló el envio';
        }
    }

} else if ($_POST['email_destino'] == "ladorada@americanadecorreas.com") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para = 'ladorada@americanadecorreas.com';
    $titulo = 'Email desde sitio web Tiendas Industriales';
    
    $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
    
    if ($_POST['submit']) {
    if (mail ($para, $titulo, $msjCorreo)) {
    echo 'El mensaje se ha enviado';
    header("Location: email_enviado.php");
    } else {
    echo 'Falló el envio';
        }
    }

} else if ($_POST['email_destino'] == "ventas@correasindustriales.com") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para = 'ventas@correasindustriales.com';
    $titulo = 'Email desde sitio web Tiendas Industriales';
    
    $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
    
    if ($_POST['submit']) {
    if (mail ($para, $titulo, $msjCorreo)) {
    header("Location: email_enviado.php");
    } else {
    echo 'Falló el envio';
        }
    }

}  else if ($_POST['email_destino'] == "gates.center@discorreas.com") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para = 'gates.center@discorreas.com';
    $titulo = 'Email desde sitio web Tiendas Industriales';
    
    $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
    
    if ($_POST['submit']) {
    if (mail ($para, $titulo, $msjCorreo)) {
    header("Location: email_enviado.php");
    } else {
    echo 'Falló el envio';
        }
    }

} else if ($_POST['email_destino'] == "parker.store@discorreas.com") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para = 'parker.store@discorreas.com';
    $titulo = 'Email desde sitio web Tiendas Industriales';
    
    $msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
    
    if ($_POST['submit']) {
    if (mail ($para, $titulo, $msjCorreo)) {
    header("Location: email_enviado.php");
    } else {
    echo 'Falló el envio';
        }
    }

} 

?>