
<?php

    //BD en local
    // $servidor= "localhost";
    // $usuario= "root";
    // $password = "root";
    // $nombreBD= "ah-cupon";
    // $port="3310";
    // $conexion = new mysqli($servidor, $usuario, $password, $nombreBD, $port);
    // if ($conexion->connect_error) {
    //     die("la conexión ha fallado: " . $conexion->connect_error);
    // }

    // En servidor Remoto Hosting Colombia

    $servidor= "localhost";
    $usuario= "ambien_cupones";
    $password = "Caracasvenezuela";
    $nombreBD= "ambien_cupones";
    $port="3306";
    $conexion = new mysqli($servidor, $usuario, $password, $nombreBD, $port);
    if ($conexion->connect_error) {
        die("la conexión ha fallado: " . $conexion->connect_error);
    }

?>




<?php

// $servidor = "localhost";
// $nombreBD = "ambien_cupones";
// $usuario = "ambien_cupones";
// $password = "Zamuceton1";
// // Create connection
// $conexion = mysqli_connect($servidor, $usuario, $password, $nombreBD);
// // Check connection
// if (!$conexion) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// mysqli_close($conexion);

?>