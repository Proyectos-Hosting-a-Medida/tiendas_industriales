<?php 

require_once('../connection/conf.php');

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: ../admin");
} else {
    
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
            <div> <a href="#"><img src="../img/logo-nuevo-209-x-65.png" alt="Ambientes de Hogar"></a></div>
            <div class="col-12">
            <hr>
            <form method="POST" action="logica/adminRegister.php">
                <label class="form-label"><h1><b>DASHBOARD ADMINISTRATIVO</b></h1></label>
                <p><i class="fas fa-user-shield"></i> Registro de Nuevo Administrador</p>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">NOMBRE Y APELLIDO</label>
                        <input type="login" class="form-control" name="admin_name" id="user_name" placeholder="Coloque su nombre y apellido" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">EMAIL</label>
                        <input type="login" class="form-control" name="admin_email" id="user_email" placeholder="Coloque su email de usuario" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nivel">NIVEL</label>
                        <input type="login" class="form-control" name="admin_level" id="user_level" placeholder="Eliga nivel de usuario" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nombres">PASSWORD</label>
                        <input type="password" class="form-control" name="admin_password" id="user_password" placeholder="Coloque su clave" required="required">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success">REGISTRAR ADMINISTRADOR</button>  
            </form>




        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
    </body>
</html>