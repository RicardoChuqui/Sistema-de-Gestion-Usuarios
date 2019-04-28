<!DOCTYPE html>
<html>
<head>
    <title>Cambiar Contrasena </title>
</head>
<body>
<?php
    session_start();    
    

    //incluir conexion a la base de datos
    include '../../../config/conexionBD.php';

    $contrasena_actual =$_REQUEST ["act_contrasena"];
    $contrasena_nueva =$_REQUEST ["nue_contrasena"];
    $sql = "UPDATE usuario 
           SET usu_password = '$contrasena_nueva'
           WHERE usu_password= '$contrasena_actual'";

    if ($conn->query($sql) === TRUE) {
        echo "Se cambio la Clave Correctamente!!!<br>";     
    } else {        
        echo "Error: " . $sql . "<br>" . $conn->errno . "<br>";        
    }
    echo "<a href='index.php'>Regresar</a>";

    $conn->close();
    
?>
</body>
</html>



