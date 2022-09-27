<?php 

include '../../connection/conf.php';

eliminarAdmin($_POST['idAdmin']);

function eliminarAdmin($id) {

    require '../../connection/conf.php';

    $query="DELETE FROM administradores WHERE id = '".$id."' ";
    $result = $conexion->query($query);

    }
?>

    <script type="text/javascript">
        alert("Administrador Eliminado Exitosamente");
        window.location.href='../../admin/manager.php';
    </script>