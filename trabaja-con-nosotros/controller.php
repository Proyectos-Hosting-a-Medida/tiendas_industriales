<?php
// session_start();
// error_reporting(E_ALL);
// //ini_set('display_errors', 'Off');
// ini_set('display_errors', 'On');

require_once('connection/conf.php');

?>


  <?php 

    // Verificar cedula duplicada
    $cedula_nueva = $_POST['cedula'];

    $dsn = "mysql:host=$servidor;port=$port;dbname=$nombreBD";
    $pdo = new PDO($dsn, $usuario, $password);

    $sql = 'SELECT * FROM clientes WHERE cedula = ?';
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array($cedula_nueva));
    $resultado = $stmt->fetch();

    // var_dump($resultado);

    if($resultado){
      header ("Location: no-response.php");
      die;
    }
  ?>

  <?php
    
        // $dsn = "mysql:host=$dbhost;dbname=$db";
        $dsn = "mysql:host=$servidor;port=$port;dbname=$nombreBD";
        $pdo = new PDO($dsn, $usuario, $password);

        try {
          $gbd = new PDO($dsn, $usuario, $password);
      } catch (PDOException $e) {
          echo 'Falló la conexión: ' . $e->getMessage();
      }
    
        $sql = "INSERT INTO clientes (nombre, email, cedula, telefono, barrio, tipoArticulo, fechaInicio, fechaFin) VALUES (?,?,?,?,?,?,?,?)";
        $stmt= $pdo->prepare($sql);
        $response = $stmt->execute([$_POST['name_surname'], 
                                    $_POST['email'], 
                                    $_POST['cedula'], 
                                    $_POST['phone'], 
                                    $_POST['barrio'], 
                                    $_POST['articulo'], 
                                    date("Y-m-d H:i:s"),
                                    $_POST['fecha_fin']]);
                                    // date("Y-m-d H:i:s")]);
        $pdo = null;

        // var_dump($response);
        // die;

        if(isset($_POST['cedula'])){
          sleep(5);
          $cedulaCliente = ($_POST['cedula']);
          header ("Location: verify.php?buscar=$cedulaCliente");
        }else {
          echo "No se pudo imprimir tu cupón" . "</br>";
          echo "<a href='index.php'>  Intenta Nuevamente </a>";
        }
 
    // include 'response.html'; //se debe crear un html que confirma el envío
    // header ("Location: verify.php");
    


// }
   

?>
