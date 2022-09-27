<?php
require('../../connection/conf.php');

// session_start();
// $usuario = $_SESSION['username'];

// if(!isset($usuario)){
//     header("location: ../admin");
// } else {
    
// }

function encriptar($string){
    return md5($string);
}

 // $dsn = "mysql:host=$dbhost;dbname=$db";
 $dsn = "mysql:host=$servidor;port=$port;dbname=$nombreBD";
 $pdo = new PDO($dsn, $usuario, $password);

 try {
   $gbd = new PDO($dsn, $usuario, $password);
} catch (PDOException $e) {
   echo 'Falló la conexión: ' . $e->getMessage();
}


$sql = "INSERT INTO administradores (nombre, loginf, passwordf, nivel) VALUES (?,?,?,?)";
$stmt= $pdo->prepare($sql);
$response = $stmt->execute([$_POST['admin_name'], 
                            $_POST['admin_email'], 
                            encriptar($_POST['admin_password']), 
                            $_POST['admin_level']]);
                           
$pdo = null;

// var_dump($response);

// die;

// include 'response.html'; //se debe crear un html que confirma el envío
header ("Location: ../manager.php");

?>