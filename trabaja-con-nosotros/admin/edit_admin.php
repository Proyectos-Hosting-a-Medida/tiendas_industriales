
<?php 

include_once('../connection/conf.php');

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: ../admin");
} else {

}

//   if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
//   if (!isset($_REQUEST["mostrar_todo"])){$_REQUEST["mostrar_todo"] = '';}

  $consulta = consultarAdministrador($_GET['loginf']);

  function consultarAdministrador($loginf) {
    $query = "SELECT * FROM administradores WHERE loginf = '".$loginf."' ";  
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
        $row['loginf'],
        $row['passwordf'],
        $row['nivel']

    ];

  }
  

?>
<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Buscador de Clientes con opción a cupon de Descuento"/>
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
                    <a href="manager.php"><img src="../img/logo-nuevo-209-x-65.png" alt="Ambientes de Hogar"></a>
                </div>
                <div class="col">
                    <label class="form-label"><h4>Usted está editando los datos de: <b><?php echo $consulta[1] ?></b> </h4></label>
                </div>
            </div>
            <!-- <div class="col-12"> 
                <div class="col-6"> <img src="../img/logo-nuevo-209-x-65.png"></div>
                <div class="col-6"> <img src="../img/logo-nuevo-209-x-65.png"></div>
            </div> -->
            
            <div class="col-12">
            <hr>
            
            <form method="POST" action="logica/edit_admin_conf.php">
                <label class="form-label"><h1><b>DASHBOARD ADMINISTRATIVO</b></h1></label>
                <p> <i class="fas fa-user-shield"></i> Modificación de datos de administrador </p>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="email">EMAIL / USUARIO</label>
                        <input type="email" class="form-control" name="email" id="admin_mail" value= "<?php echo $consulta[2] ?>" >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="nombres">NOMBRES Y APELLIDOS</label>
                        <input type="text" class="form-control" name="name_surname" id="admin_name" value= "<?php echo $consulta[1] ?>">
                    </div>
                </div>

                    <div class="form-group col-md-6">
                        <label for="articulos">NIVEL DE ADMINISTRADOR</label>
                        <input type="text" class="form-control" name="level" id="admin_level" value= "<?php echo $consulta[4] ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cc">PASSWORD</label>
                        <input type="text" class="form-control" name="password" id="admin_password" readonly value= "<?php echo $consulta[3] ?>">
                    </div>
                
                <br>
            
                <button type="submit" class="btn btn-success">EDITAR ADMINISTRADOR</button>
                <input type="hidden" class="form-control" value= "<?php echo $consulta[0] ?>" name="idAdmin">
            </form>




        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
    </body>
</html>