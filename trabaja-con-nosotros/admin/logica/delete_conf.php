<?php 

include '../../connection/conf.php';

eliminarCliente($_POST['idCliente']);

function eliminarCliente($id) {

    require '../../connection/conf.php';

    $query="DELETE FROM clientes WHERE id = '".$id."' ";
    $result = $conexion->query($query);

    }
?>

    <script type="text/javascript">
        alert("Cliente Eliminado Exitosamente");
        window.location.href='../../admin/dashboard.php';
    </script>