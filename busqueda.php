<?php    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>hoteles</title>
</head>


<body>
<table class="table">    
<thead>
    <tr>
        
        <th scope="col">destino</th>
        <th scope="col">origen</th>
        <th scope="col">plazas disponibles</th>
        <th scope="col">Nombre Hotel</th>
        <th scope="col">Habitaciones Disponibles</th>
    </tr>
    
</thead>
<tbody>
    <?php
    $destinoBuscado = $_POST['destinoBuscado'];
    $server = "localhost";
    $user = "root";
    $pass = "tarea6";
    $db = "agencia";
    $conexion = new mysqli($server, $user, $pass, $db);
    $consulta = "SELECT v.destino, v.origen, v.plazas_disponibles, h.nombre, h.habitaciones_disponibles from vuelo v INNER JOIN hotel h ON v.destino = h.ubicacion WHERE v.destino = '$destinoBuscado'";
    $busqueda = mysqli_query($conexion,$consulta);
    $numero = mysqli_num_rows($busqueda);
?>

<?php
while($resultado=mysqli_fetch_assoc($busqueda)) {
?>

<tr>
    
    <td><?php echo $resultado["destino"];?></td>
    <td><?php echo $resultado["origen"];?></td>
    <td><?php echo $resultado["plazas_disponibles"];?></td>
    <td><?php echo $resultado["nombre"];?></td>
    <td><?php echo $resultado["habitaciones_disponibles"];?></td>
    
</tr>
<?php }?>

</tbody>
</table>
</body>
</html>