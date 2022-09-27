<?php
    header("Content-Type:   application/vnd.ms-Excel; charset=utf-8");
    header("Content-Disposition: attachment; filename=cuponesClientes.xls");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private",false);
    echo "<h1> LISTADO DE CLIENTES CON CUPONES </h1>"; //no ending ; here
?>

<?php require_once('../../connection/conf.php'); ?>
<!-- Tabla de Datos -->
    <table> 
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>NUMERO DOCUMENTO</th>
                    <th>TELEFONO</th>
                    <th>LOCALIDAD</th>
                    <th>ARTICULO</th>
                    <th>FECHA-INICIO</th>
                    <th>FECHA-FIN</th>
                </tr>
                    <?php 
                        // $dsn = "mysql:host=$servidor;port=$port;dbname=$nombreBD";
                        $dsn = new mysqli($servidor, $usuario, $password, $nombreBD, $port);
                        // $dsn->set_charset("utf8");
                        // $sql = $mysqli->query("SELECT * FROM clientes");
                        $sql="SELECT * FROM clientes";
                        // $sql = $mysqli->query("SELECT * FROM clientes");
                        $result = mysqli_query($dsn, $sql);
                        // $result = mysqli($mysqli);
                        while($row = $result->fetch_object()){
                    ?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->nombre ?></td>
                    <td><?php echo $row->cedula ?></td>
                    <td><?php echo $row->telefono ?></td>
                    <td><?php echo $row->barrio ?></td>
                    <td><?php echo $row->tipoArticulo ?></td>
                    <td><?php echo $row->fechaInicio ?></td>
                    <td><?php echo $row->fechaFin ?></td>
                </tr>

                <?php } ?>

    </table>

    