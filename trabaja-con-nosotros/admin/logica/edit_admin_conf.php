<?php 

include '../../connection/conf.php';

editarAdmin(
    $_POST['idAdmin'], 
    $_POST['email'], 
    $_POST['name_surname'],
    $_POST['level'],
    $_POST['password'],
   
);

// var_dump($_POST['idAdmin']);
// die ;

function editarAdmin($id, $email, $nombre, $level, $password) {

    require '../../connection/conf.php';

    $query = "UPDATE administradores SET loginf = '".$email. "', 
    id = '".$id. "',
    loginf = '".$email. "',
    nombre = '".$nombre. "',
    nivel = '".$level. "'
    WHERE id='".$id."' ";

    // mysql_query($query);

    
    $result = $conexion->query($query);
    // $row = $result->fetch_assoc();
}

?>

    <script type="text/javascript">
        alert("Datos de Administrador editados con exito");
        window.location.href='../../admin/manager.php';
    </script>