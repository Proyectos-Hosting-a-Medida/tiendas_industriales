<?php 

require '../../connection/conf.php';

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];


$query = "SELECT COUNT(*) as contar FROM administradores WHERE loginf = '$usuario' and passwordf =MD5('$clave')";
$result = $conexion->query($query);

$array = mysqli_fetch_array($result);

if($array['contar']>0){
    $_SESSION['username'] = $usuario ;
    header("location: ../dashboard.php");

}else {
    echo "<b>DATOS INCORRECTOS</b>";
}



?>