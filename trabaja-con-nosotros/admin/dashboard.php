<?php 

    require_once('../connection/conf.php');

    session_start();
    $usuario = $_SESSION['username'];

    if(!isset($usuario)){
        header("location: ../admin");
    } else {



//   if (!$conexion->set_charset("utf8")) {
//       printf("Error al cargar el conjunto de caracteres utf8: %s\n", $conexion->error);
//       exit();
//   } else {
//       printf("Conjunto de caracteres actual: %s\n", $conexion->character_set_name());
//   }

  if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
  if (!isset($_REQUEST["mostrar_todo"])){$_REQUEST["mostrar_todo"] = '';}
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="../css/app.css">
<title>Panel de Control | Administración</title>
</head>
<body>


<div class="container mt-5">
<!-- <div> <img src="../img/logo-nuevo-209-x-65.png"></div> -->

<div class="row">
    <div class="col">
        <label class="form-label"><img src="../img/logo-nuevo-209-x-65.png"></label>
        <p> <i class="far fa-user"></i> <?php echo "Hola! " . $usuario ; ?> </p>  
    </div>
    <div class="col">
        <!-- <p> <i class="far fa-user"></i></p>  -->
    </div>
    <div class="col">
        <label class="form-label"><p><i class='far fa-times-circle'></i><?php echo "<a href='logica/salir.php'> CERRAR SESION </a>"?></p></label>
        <p> <i class="fas fa-user-shield"></i><a href="register.php"> Registro de nuevo administrador</a> <br> 
        <i class="fas fa-users-cog"></i> <a href="manager.php"> Ver todos los administradores</a> <br>
        <i class="far fa-file-excel"></i> <a href="logica/excel.php"> Exportar a Excel </a></p><br>
    </div>
</div>


<div class="col-12">
<hr>

<form method="POST" action="dashboard.php">
    <div class="mb-3">
    <label class="form-label"><h1><b>DASHBOARD ADMINISTRATIVO</b></h1></label>
    <input type="text" class="form-control" id="buscar" data-name="buscar" data-required="false" placeholder="Coloque número de documento o nombre del cliente y presione Buscar Cliente" name="buscar" required="required" value="<?php echo $_POST['buscar']; ?>">
    </div>
    <button type="text" class="btn btn-outline-secondary btn-lg">BUSCAR CLIENTE</button>
    <a class="btn btn-outline-info btn-lg" href="dashboard.php?mostrar_todo=ok">MOSTRAR TODO</a>
</form>



<div class="card col-12 mt-0 border-0">
<div class="card-body border-0">

<?php 
if(!empty($_POST))
{

        // resaltamos el resultado
        function resaltar_frase($string, $frase, $taga = '<b>', $tagb = '</b>'){
            return ($string !== '' && $frase !== '')
            ? preg_replace('/('.preg_quote($frase, '/').')/i'.('true' ? 'u' : ''), $taga.'\\1'.$tagb, $string)
            : $string;
             }
    
  
      $aKeyword = explode(" ", $_POST['buscar']);
      $filtro = "WHERE nombre LIKE LOWER('%".$aKeyword[0]."%') OR cedula LIKE LOWER('%".$aKeyword[0]."%')";
      $query ="SELECT * FROM clientes WHERE nombre LIKE LOWER('%".$aKeyword[0]."%') OR cedula LIKE LOWER('%".$aKeyword[0]."%')";
  

     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= " OR nombre LIKE '%" . $aKeyword[$i] . "%' OR cedula LIKE '%" . $aKeyword[$i] . "%'";
        }
      }
     
     $result = $conexion->query($query);
     $numero = mysqli_num_rows($result);
     if (!isset($_POST['buscar'])){
     echo "Has buscado:<b> ". $_POST['buscar']."</b>";
     }

     if( mysqli_num_rows($result) > 0 AND $_POST['buscar'] != '') {
        $row_count=0;
        echo "<br>Resultados encontrados:<b> ".$numero."</b>";
        echo "<br><br><table class='table table-striped'>";
        While($row = $result->fetch_assoc()) {   
            $row_count++;   
            echo "<tr><td>".$row_count." </td><td>". resaltar_frase($row['nombre'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['cedula'] ,$_POST['buscar']). "</td><td>". resaltar_frase($row['fechaFin'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['tipoArticulo'] ,$_POST['buscar']) . "</td></tr>";
        }
        echo "</table>";
	
    }
    else {
      //mostramos todos los resultados
      if( $_REQUEST["mostrar_todo"] == 'ok') {
        $row_count=0;
        echo "<br>Resultados encontrados:<b> ".$numero."</b>";
        echo "<br><br><table class='table table-striped'>";
        While($row = $result->fetch_assoc()) {   
            $row_count++;   

            $originalDate =  $row["fechaFin"];
            $newDate = date("d/m/Y", strtotime($originalDate));
            // echo ($newDate);
            echo "<tr><td>".$row_count." </td><td>". resaltar_frase($row['nombre'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['email'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['cedula'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['telefono'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['barrio'] ,$_POST['buscar']) . "</td><td>". resaltar_frase($newDate ,$_POST['buscar']) . "</td><td>". resaltar_frase($row['tipoArticulo'] ,$_POST['buscar']) . "</td><td>". 
            // '<button type="text" class="btn btn-success"><a href=" "> EDITAR </button>' . "</td><td>". 
            "<button type='button' class='btn btn-outline-success'>" . "<a href=". "edit.php?cedula=" . $row['cedula'] . " . >  <i class='fas fa-edit'></i>  </a> </button>" . "</td><td>". 
            "<button type='button' class='btn btn-outline-danger'>" . "<a href=". "delete.php?cedula=" . $row['cedula'] . " . > <i class='far fa-trash-alt'></i> </button> </a>" . "</td><td>". 
            "</td></tr>";
        }
        echo "</table>";
	
        }
    }
}
?>


</div>
</div>

</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>