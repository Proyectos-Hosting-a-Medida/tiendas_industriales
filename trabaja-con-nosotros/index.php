<?php //require "service_location.php" ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="es">

   <head>
         
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <title>Tiendas Industriales| Postulate para alguna de nuestras vacantes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />   
    <meta name="title" content="Tiendas Industriales| Postulación de Candidatos" />
    <meta name="description" content="Formulario para la postulacion de aspirantes a vacantes en Tiendas Industriales" />
    <meta name="keywords" content="correas, industria automotriz" />
    <meta name="author" content="Tiendas Industriales" />
    <meta name="owner" content="Tiendas Industriales" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="icon" type="image/png" href="img/favicon/favicon.ico" sizes="32x32">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/foundation.css" type="text/css" />
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    <link href="css/app.css" rel="stylesheet" type="text/css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&family=Roboto:wght@100;400;500&display=swap" rel="stylesheet">

   </head>
   <body>
      <article>
          <!-- <div class="logo-ah-new"><img src="img/tiendas_industriales_simbolo.png"></div> -->
         <div class="form_new">
            <form action="controller.php" id="formulario" method="post" enctype="multipart/form-data">
               <div id="head_mobile">
                  <div class="logo-ah">
                     <img src="img/tiendas_industriales.png" alt="Tiendas Industriales">
                  </div>
               </div>

               <div class="center-div">
                  <div class="titu-form">
                  <div class="logo-simbolo"><img src="img/tiendas_industriales.png" alt="Tiendas Industriales"></div>
               </div>

               <h1 class="titulo">TRABAJA CON NOSOTROS</h1>
               <h3>Postulate a nuestras vacantes, enviando tu hoja de vida</h3>
               <fieldset>
                  <div class="row">
                     <input type="text" name="name_surname" id="user_name" data-name="Nombre" data-required="true" placeholder="NOMBRE Y APELLIDO*" required="required">
                  </div>
                  <div class="row">
                     <input type="email" name="email" id="user_mail" data-name="E-mail" data-required="true" placeholder="E-MAIL*" required="required">
                  </div>
                  <div class="row">
                     <input type="number" name="cedula" id="user_cedula" data-name="cedula" data-required="true" placeholder="CEDULA*" required="required">
                  </div>
                 
                  <!-- <input type="text" name="barrio" id="user_barrio" data-name="barrio" data-required="true" placeholder="BARRIO*" required="required"> -->

                  <div class="row select1" style="margin-top: 3px!important; ">                  
                     <select name="barrio" id="user_barrio" data-name="localidad" data-required="true" placeholder="" >
                      <option value="">SELECCIONE LOCALIDAD</option>
                      <option value="ANTONIO NARIÑO">ANTONIO NARIÑO</option>
                      <option value="BARRIOS UNIDOS">BARRIOS UNIDOS</option>
                      <option value="BOSA">BOSA</option>
                      <option value="CANDELARIA">CANDELARIA</option>
                      <option value="CHAPINERO">CHAPINERO</option>
                      <option value="CIUDAD BOLIVAR">CIUDAD BOLIVAR</option>
                      <option value="ENGATIVA">ENGATIVA</option>
                      <option value="FONTIBON">FONTIBON</option>
                      <option value="KENNEDY">KENNEDY</option>
                      <option value="LOS MARTIRES">LOS MARTIRES</option>
                      <option value="PUENTE ARANDA">PUENTE ARANDA</option>
                      <option value="RAFAEL URIBE URIBE">RAFAEL URIBE URIBE</option>
                      <option value="SAN CRISTOBAL">SAN CRISTOBAL</option>
                      <option value="SANTA FE">SANTA FE</option>
                      <option value="SUBA">SUBA</option>
                      <option value="SUMAPAZ">SUMAPAZ</option>
                      <option value="TEUSAQUILLO">TEUSAQUILLO</option>
                      <option value="TUNJUELITO">TUNJUELITO</option>
                      <option value="USAQUEN">USAQUEN</option>
                      <option value="USME">USME</option>
                     </select>
                     <span class="select1-fondo" id="localidad_text">SELECCIONE SU LOCALIDAD:</span>
                  </div>

                  <div class="row" style="margin-top: 3px!important;">
                     <input type="number" name="phone" id="user_phone" data-name="Celular" data-required="false" placeholder="CELULAR" required="required">
                  </div>

                  <input type="hidden"  name="fecha_envio" value= "<?php 
                  // Se imprime fecha de finalización de la oferta
                     $fecha = date_create(date('Y-m-d H:i:s'));
                     echo date_format($fecha,"Y-m-d H:i:s"); ?>" id="user_date" data-name="Fecha-Fin" data-required="false">

                  <div class="row select1" style="margin-top: 3px!important; ">                  
                  <select name="tipo_de_cargo" id="cargo" data-name="tipo de cargo" data-required="true" placeholder="" >
                      <option value="">CARGO AL CUAL SE POSTULA:</option>
                      <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
                      <option value="ASESOR DE VENTAS">ASESOR DE VENTAS</option>
                      <option value="JEFE DE TIENDA">JEFE DE TIENDA</option>
                      <option value="AUXILIAR DE TALLER">AUXILIAR DE TALLER</option>
                  </select>
                  <span class="select1-fondo" id="cargo_text">CARGO AL CUAL SE POSTULA:</span>
                </div>

                <div class="row file-select" style="margin-top: 3px !important;">
                     <P>ADJUNTA TU HOJA DE VIDA (solo pdf, .doc y .docx)
                     <input type="file" name="archivo" id="user_cv" data-name="hoja de vida" data-required="true" placeholder="HOJA DE VIDA" required="required"></P>
                     <span class="select1-fondo" id="user_cv"></span>
               </div>

                  <div class="row">
                     <p>LOS CAMPOS MARCADOS CON * SON OBLIGATORIOS</p>
                  </div>
                  <div class="row checkbox">
                     <ul>
                        <li class="terminos_checks">
                           <input type="checkbox" name="terms_conditions" id="terms_conditions" data-required="true" checked="checked" data-name="autoriza recibir informaci&oacute;n"> 
                           <label for="terms_conditions">
                              <p>Autorizo el uso de mis datos personales.</p>
                           </label>
                        </li>
                     </ul>
                  </div>
                  <div class="row enviar"><input type="submit" value="POSTULARME"></div>
                  <div class="row" style=" text-align: center;" id="copy_pc">
                     <p>&copy; <?php echo date('Y')?>. TIendas Industriales <a href="terminosyCondiciones.pdf" target="_blank"> T&eacute;rminos y Condiciones</a></p>
                  </div>
                  <!-- Logo en Footer -->
                  <!-- <div class="foot-form">
                     <img src="img/sistecredito.png" alt="Sistecredito">
                  </div> -->
               </fieldset>
             </div>
            </form>
         </div>
         <div class="fondo-bg-pc-new">
         </div>
         <div class="fondo-bg-mobile-new">
          <!-- <img src="img/bg-mobil.jpg" alt="ENTREGA INMEDIATA | COMPRE EN MINUTOS, SE LO LLEVAMOS A DOMICILIO."> -->
         </div>
         <div class="row collapse show-for-small-only" >
            <div class=" large-8 medium-7 small-12 columns collapse" id="box_mobile">
               <div id="copy_mobile">
                  <p>&copy; <?php echo date('Y')?> - Tiendas Industriales - <a class="footer_link" href="terminosyCondiciones.pdf" target="_blank"> T&eacute;rminos y Condiciones</a></p>
               </div>
            </div>
         </div>
      </article>
      
      <?php
         if(isset($_GET['enviado']))
         {
             ?>          
      <!--script language="javascript">
         alert('Tus datos han sido enviados, pronto nos comunicaremos contigo');
         //document.getElementById('messageSent').style.display='';
         </script-->
   <div id="overlay-error">
      <div class="contenido">
         <div class="overConfirm">
            <a id="overlay-error-cerrar" class="cerrar">x</a>
            <img src="img/logo-ambientesdehogar.png" style="width: 100%; max-width:25px; display: block; margin: 20px auto; height: 25px;">
            <div class="box dashed">
               <h3>Datos Enviados</h3>
               <hr>
               <p id="p_nombre">Nombre: <span> </span></p>
               <p id="p_email">Email: <span> </span></p>
               <p id="p_cedula">Cedula: <span> </span></p>
               <p id="p_fechaActual">Fecha: <span> </span></p>
            </div>
         </div>
      </div>
   </div>
  <!-- overlay -->
  <?php
    }
  ?>
  <div id="overlay-error" style="display: none;">
    <div class="contenido">
      <a id="overlay-error-cerrar" class="cerrar">x</a>
      <h3>Lo sentimos</h3>
      <p>Los siguientes campos faltan o tienen un formato incorrecto:</p>
      <ul id="overlay-error-msg">
      </ul>
    </div>
  </div>
   <div id="loader" style="display: none;"></div>
  </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
      <script src="js/validator.js" type="text/javascript"></script>
      <script src="js/vendor/jquery.min.js"></script>
      <script src="js/vendor/what-input.min.js"></script>
      <script src="js/foundation.min.js"></script>
      <script src="js/app.js"></script>
   </body>
</html>