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
                <form id="formulario01" method="POST" action="actualizarDatos.php">

                <br>
                    <label for="usu_codigo">Codigo (*)</label><br>
                    <input type="number" id="usu_codigo" name="usu_codigo"  value=""  placeholder="Ingrese el codigo..."/>
                   <br>
                    <label for="cedula">Cedula (*)</label><br>
                    <input type="text" id="cedula" name="cedula"  value=""  placeholder="Ingrese el número de cedula ..."/>
                    <br>

                    <label for="nombres">Nombres (*)</label><br>
                    <input type="text" id="nombres" name="nombres" value="" placeholder="Ingrese sus dos nombres ..."/>
                    <br>

                    <label for="apellidos">Apelidos (*)</label><br>
                    <input type="text" id="apellidos" name="apellidos" value="" placeholder="Ingrese sus dos apellidos ..."/>
                    <br>
                   
                    <label for="direccion">Dirección (*)</label><br>
                    <input type="text" id="direccion" name="direccion" value="" placeholder="Ingrese su dirección ..."required/>
                     <br>
                    <label for="telefono">Telefono (*)</label><br>
                    <input type="text" id="telefono" name="telefono" value="" placeholder="Ingrese su número telefónico ..."/>
                    <br>
                    <label for="fecha">Fecha Nacimiento (*)</label><br>
                    <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="" placeholder="Ingrese su fecha de nacimiento ..." required/>
                   
                    <br>
                    <label for="correo">Correo electrónico (*)</label><br>
                    <input type="text" id="correo" name="correo" value="" placeholder="Ingrese su correo electrónico ..."/>
                    <br>

                    <label for="correo">Contraseña (*)</label><br>
                    <input type="password" id="contrasena" name="contrasena" value="" placeholder="Ingrese su contraseña..."/>
                    <br>
                    <br>
                    <input type="submit" id="guardar" name="guardar" value="Guardar" />
                    <input type="reset" id="regresar" name="regresar" value="Cancelar" onclick="location.href = 'index.php';" />
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
