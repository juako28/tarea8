<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada de datos</title>
</head>
<body>
    
    <?php
    $nombreHotel = $_POST['nombreHotel'];
    $ubicacionHotel = $_POST['ubicacionHotel'];
    $disponibilidad = $_POST['disponibilidad'];
    $tarifaNoche = $_POST['tarifaNoche'];
   
    $server = "localhost";
    $user = "root";
    $pass = "tarea6";
    $db = "agencia";

    $conexion = new mysqli($server, $user, $pass, $db);
    $consulta = "INSERT INTO hotel(id_hotel, nombre, ubicacion,habitaciones_disponibles, tarifa_noche) VALUES(null, '$nombreHotel','$ubicacionHotel',$disponibilidad, $tarifaNoche)";
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