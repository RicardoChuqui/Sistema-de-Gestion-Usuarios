<?php
    session_start();
    if(!isset($_SESSION['logueado']) || $_SESSION['logueado'] != "true"){
        echo "<script>alert('No tiene permisos para ingresar');</script>";
        header("Location:../../../public/controladores/login.php");
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Eliminar datos de persona </title>
</head>
<body>
<?php
    //incluir conexion a la base de datos
    include '../../../config/conexionBD.php';
    
    $codigo = $GET["usu_codigo"];    

    $sql = "DELETE FROM usuario WHERE usu_codigo = $codigo ";

    if ($conn->query($sql) === TRUE) {
        echo "Se ha eliminado los datos personales correctamemte!!!<br>";     
    } else {        
        echo "Error: " . $sql . "<br>" . $conn->errno . "<br>";        
    }
    echo "<a href='index.php'>Regresar</a>";

    $conn->close();
    
?>
</body>
</html>