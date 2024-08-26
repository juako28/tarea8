<?php
    include "viajes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vuelos</title>
</head>
<body>
    <?php
    $origenVuelo = $_POST['origen'];
    $destinoVuelo = $_POST['destino'];
    $fechaVuelo = $_POST['fechaViaje'];
    $plazaVuelo = $_POST['plaza'];
    $precioVuelo = $_POST['precio'];
    
    $server = "localhost";
    $user = "root";
    $pass = "tarea6";
    $db = "agencia";

    $conexion = new mysqli($server, $user, $pass, $db);
    $consulta = "INSERT INTO vuelo(id_vuelo, origen, destino, fecha, plazas_disponibles, precio) VALUES(null, '$origenVuelo','$destinoVuelo','$fechaVuelo', $plazaVuelo, $precioVuelo)";
    $resultado = mysqli_query($conexion,$consulta);
    
    if ($resultado) {

       echo"Datos agregados correctamente";
       # code...
    }else{
        echo"error al ingresar los datos";
    }
    mysqli_close($conexion);
 
?>
</body>
</html>