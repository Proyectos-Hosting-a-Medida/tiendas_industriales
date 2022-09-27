
<?php 

require_once('connection/conf.php');
//   if (!$conexion->set_charset("utf8")) {
//       printf("Error al cargar el conjunto de caracteres utf8: %s\n", $conexion->error);
//       exit();
//   } else {
//       printf("Conjunto de caracteres actual: %s\n", $conexion->character_set_name());
//   }

  if (!isset($_GET['buscar'])){$_GET['buscar'] = '';}
//   if (!isset($_REQUEST["mostrar_todo"])){$_REQUEST["mostrar_todo"] = '';}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="es">

   <head>
          

      <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
      <title>Ambientes de Hogar | Cupón de Descuento</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <meta name="title" content="Ambientes de Hogar | Catálogo digital de productos" />
    <meta name="description" content="Catálogo de productos online en formato PDF" />
    <meta name="keywords" content="Salas, Mesas, Comedores, Muebles, Sillas, Alcobas, Colchones, Combos" />
    <meta name="author" content="Ambientes de Hogar" />
    <meta name="owner" content="Pedro Eslava" />



      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
      <script src="js/validator.js" type="text/javascript"></script>
      <link rel="icon" type="image/png" href="img/favicon/favicon.ico" sizes="32x32">
      <meta name="theme-color" content="#ffffff">


      <link rel="stylesheet" href="css/foundation.css" type="text/css" />
      <link rel="stylesheet" href="css/app.css" type="text/css" />

<!-- Ambientes de Hogar -->

    <meta name="origintag" content="landing" />
    <meta name="analyticstag" content="UA-175518113-1" /> 

   
    <!-- <meta name="fbtag" content="2208470262496685" /> --> 
    <!-- <meta name="adwordstag" content="AW-753717040" /> -->
    <!-- <meta name="adwordstag_conversion" content="YL1mCPGW45cBELCes-cC" /> -->

<!-- END Ambientes de Hogar  -->

   </head>

   <body>

   <!-- loading en paginas -->
   <div id="loader"></div>
        <!-- <div class="row logo-verify"> <img src="img/ambientesdehogar.png"></div>
   
            <div class="row verify">
                <form method="POST" action="verify.php">
                    <div class="article">
                        <h1 class="titulo"> YA CASI TIENES TU DESCUENTO!</h1>
                        <p class="subtitulo">Confirma tú número de documento</p>

                        <input type="text" class="" id="buscar" name="buscar" value="<?php //echo $_POST['buscar']; ?>" data-name="Buscar" data-required="true" placeholder="DIGITE SU NUMERO DE DOCUMENTO" required="required">
                    </div>
                    <button type="text" class="buscar">CONFIRMAR</button>
                </form>
            </div>

            <br> -->

            <?php
                // Logica de mi aplicacion:
                $aKeyword = explode(" ", $_GET['buscar']);
                $query = "SELECT * FROM clientes WHERE cedula=($aKeyword[0])";
                $result = $conexion->query($query);
                $clientes = array();
                while ($user = $result->fetch_assoc()) {
                    $clientes[] = $user;
                } 

                

                // echo('<pre>');
                //  var_dump($clientes);
                // echo('</pre>');
                // Logica de la vista:

                
            ?>

           
               
            <?php foreach ($clientes as $user): ?>

                <div class="cupon-descuento">
                    <div class="row logo-verify"> <img src="img/ambientesdehogar.png"></div>

                    <h1 class="titulo-descuento"> DESCUENTO DEL 10% </h1>
                    <P class="subtitulo-descuento">PARA REDIMIR EN TIENDAS FISICAS</P>
                    <P class="subtitulo-descuento">Antes del: <?php 
                    $originalDate =  $user["fechaFin"];
                    $newDate = date("d/m/Y", strtotime($originalDate));
                    echo ($newDate);?></p>

                    <h4 class="titulo-datosclientes"> Datos del Cliente </h4>
                    <P class="datos-clientes">TITULAR: <b> <?php echo $user["nombre"]?> </b></P>
                    <P class="datos-clientes">CC: <b> <?php echo $user["cedula"]?> </b></P>
                    <P class="datos-clientes">LOCALIDAD: <b> <?php echo $user["barrio"]?> </b></P>
                    <hr>

                    <P class="titulo-descuento">VALIDO PARA</P>

                    <?php
                        if ($user["tipoArticulo"] == "ALCOBAS") {
                        echo "<p class='titulo-descuento'> una (1) Alcoba </p>";
                        }
                    ?>

                    <?php
                        if ($user["tipoArticulo"] == "SALAS") {
                        echo "<p class='titulo-descuento'> una (1) Sala</p>";
                        }
                    ?>

                    <?php
                        if ($user["tipoArticulo"] == "COMEDOR") {
                        echo "<p class='titulo-descuento'> un (1) Comedor</p>";
                        }
                    ?>

                    <?php
                        if ($user["tipoArticulo"] == "COMBOS") {
                        echo "<p class='titulo-descuento'> un (1) Combo</p>";
                        }
                    ?>

                    
                   

                    <div id="imprimir-pc">
                        <button type="text" class="imprimir-cupon"><a href="javascript:print()"> IMPRIMIR MI CUPON</a></button>
                    </div>
                    
                    <div id="imprimir-movil">
                        <h2 class="capture-movil">Capture esta pantalla en su dispositivo y presentela en el comercio</h2>
                    </di>

                </div>
                    
            <?php endforeach; ?>

      <script src="js/vendor/jquery.min.js"></script>
      <script src="js/vendor/what-input.min.js"></script>
      <script src="js/foundation.min.js"></script>
      <script src="js/app.js"></script>

   </body>
</html>