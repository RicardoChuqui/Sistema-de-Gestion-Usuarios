<?php
    session_start();    
    
    include '../../../config/conexionBD.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar datos de persona</title>  
    <linK rel="stylesheet" type="text/css" href="estilos/estilo.css">  
</head>

<body>
    <?php
        $codigo = $_GET["usu_codigo"];
        $sql = "SELECT * FROM usuario where usu_codigo='$codigo'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
             ?>
                <form id="formulario01" method="POST" action="nueva_contrasena.php">

                   <br>

                    <label for="act_contrasena">Contraseña Actual (*)</label>
                    <input type="password" id="act_contrasena" name="act_contrasena" value="" placeholder="Ingrese su contraseña Actual..."/>
                    <br>
                    <label for="nue_contrasena">Contraseña Nueva (*)</label>
                    <input type="password" id="nue_contrasena" name="nue_contrasena" value="" placeholder="Ingrese su contraseña Nueva..."/>
                    <br>
                    
                    <input type="submit" id="guardar" name="guardar" value="Guardar" />
                    <input type="button" id="regresar" name="regresar" value="Cancelar" onclick="location.href = 'index.php';" />
                </form>    

             <?php
            }
        } else {            
            echo "Ha ocurrido un error inesperado !";
        }
        $conn->close();         
    ?>                      

</body>
</html>