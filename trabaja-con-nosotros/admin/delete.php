
<?php 

include_once('../connection/conf.php');

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: ../admin");
} else {
    
}


  $consulta = consultarCliente($_GET['cedula']);

  function consultarCliente($cedula) {
    $query = "SELECT * FROM clientes WHERE cedula = '".$cedula."' ";
     
    // var_dump($query);
    // die;
    require '../connection/conf.php';
    // $servidor= "localhost";
    // $usuario= "root";
    // $password = "root";
    // $nombreBD= "ah-cupon";
    // $port="3310";
    // $conexion = new mysqli($servidor, $usuario, $password, $nombreBD, $port);
    // if ($conexion->connect_error) {
    //     die("la conexión ha fallado: " . $conexion->connect_error);
    // }


    $result = $conexion->query($query);
    // $result = mysql_query($query);

    // var_dump($query);
    // die;

    $row = $result->fetch_assoc();

    // var_dump($row);
    // die;

    return [
        $row['id'],
        $row['nombre'],
        $row['email'],
        $row['cedula'],
        $row['telefono'],
        $row['barrio'],
        $row['tipoArticulo'],
        $row['fechaInicio'],
        $row['fechaFin']

    ];

  }
  

?>
<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Eliminación de Clientes con opción a cupon de Descuento"/>
        <link rel="icon" type="image/png" href="../img/favicon/favicon.ico" sizes="32x32">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="../css/app.css">
        <title>Panel de Control | Administración</title>
    </head>
    <body>


            <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <a href="dashboard.php"><img src="../img/logo-nuevo-209-x-65.png" alt="Ambientes de Hogar"></a>
                </div>
                <div class="col">
                    <!-- <label class="form-label"><h4>Usted está por eliminar los datos de: <b><?php echo $consulta[1] ?></b> </h4></label> -->
                    <p class="alert alert-danger"><b>CUIDADO:</b> Se eliminarán los datos del cliente <?php echo $consulta[1] ?> / <?php echo $consulta[3] ?></p>
                </div>
            </div>
            <div class="col-12">
            <hr>
            
            <form method="POST" action="logica/delete_conf.php">
                <label class="form-label"><h1><b>DASHBOARD ADMINISTRATIVO</b></h1></label>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="email">EMAIL</label>
                        <input type="email" class="form-control" name="email" id="user_mail" value= "<?php echo $consulta[2] ?>" >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="nombres">NOMBRES Y APELLIDOS</label>
                        <input type="text" class="form-control" name="name_surname" id="user_name" value= "<?php echo $consulta[1] ?>">
                    </div>

                </div>

                    <div class="form-group col-md-6">
                        <label for="cc">DOCUMENTO DE IDENTIDAD</label>
                        <input type="text" class="form-control" name="cedula" id="user_cedula" value= "<?php echo $consulta[3] ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="articulos">ARTICULO</label>
                        <input type="text" class="form-control" name="articulo" id="modelo" value= "<?php echo $consulta[6] ?>">
                    </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="localidad">LOCALIDAD</label>
                        <input type="text" class="form-control" name="barrio" id="user_barrio" data-name="localidad" value= "<?php echo $consulta[5] ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="celular">CELULAR</label>
                        <input type="text" class="form-control" name="phone" id="user_phone" data-name="Celular" value= "<?php echo $consulta[4] ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="fecha-ini">FECHA INICIO</label>
                        <input type="text" class="form-control" value= "<?php echo $consulta[7] ?>" name="fecha_inicio"">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="fecha-fin">FECHA FIN</label>
                        <input type="text" class="form-control" value= "<?php echo $consulta[8] ?>" name="fecha_fin">
                    </div>
                    
                </div> 
                
                <br>
            
                <button type="submit" class="btn btn-danger">ELIMINAR CLIENTE</button>
                <input type="hidden" class="form-control" value= "<?php echo $consulta[0] ?>" name="idCliente"">
            </form>




        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
    </body>
</html>