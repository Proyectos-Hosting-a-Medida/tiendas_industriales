<?php 

include '../../connection/conf.php';

editarCliente(
    $_POST['idCliente'], 
    $_POST['name_surname'], 
    $_POST['email'],
    $_POST['cedula'],
    $_POST['phone'],
    $_POST['barrio'],
    $_POST['articulo'],
    $_POST['fecha_inicio'],
    $_POST['fecha_fin'],
   
);

// var_dump($_POST['celular']);
// die ;

function editarCliente($id, $nombre, $email, $cedula, $phone, $barrio, $tipoArticulo, $fechaInicio, $fechaFin) {

    require '../../connection/conf.php';

    $query = "UPDATE clientes SET cedula = '".$cedula. "', 
    nombre = '".$nombre. "',
    email = '".$email. "',
    cedula = '".$cedula. "',
    telefono = '".$phone. "',
    barrio = '".$barrio. "',
    tipoArticulo = '".$tipoArticulo. "',
    fechaInicio = '".$fechaInicio. "',
    fechaFin = '".$fechaFin. "' WHERE id='".$id."'  ";

    // mysql_query($query);

    
    $result = $conexion->query($query);
    // $row = $result->fetch_assoc();
}

?>

    <script type="text/javascript">
        alert("Listo!. Cliente Modificado Exitosamente");
        window.location.href='../../admin/dashboard.php';
    </script>