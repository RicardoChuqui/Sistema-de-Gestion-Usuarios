<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Gestión de usuarios</title>
 <linK rel="stylesheet" type="text/css" href="estilos/estilo.css">
</head>
<body>

 <table>
 <tr>
 <th>Codigo</th>
 <th>Cedula</th>
 <th>Nombres</th>
 <th>Apellidos</th>
 <th>Dirección</th>
 <th>Telefono</th>
 <th>Correo</th>
 <th>Fecha Nacimiento</th>
 <th>Eliminar</th>
 <th>Actualizar</th>
 <th>Cambiar Contraseña</th>
 </tr>
 <?php
 include '../../../config/conexionBD.php';
 $sql = "SELECT * FROM usuario";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
 echo "<tr>";
 echo " <td>" . $row["usu_codigo"] . "</td>";
 echo " <td>" . $row["usu_cedula"] . "</td>";
 echo " <td>" . $row['usu_nombres'] ."</td>";
 echo " <td>" . $row['usu_apellidos'] . "</td>";
 echo " <td>" . $row['usu_direccion'] . "</td>";
 echo " <td>" . $row['usu_telefono'] . "</td>";
 echo " <td>" . $row['usu_correo'] . "</td>";
 echo " <td>" . $row['usu_fecha_nacimiento'] . "</td>";
 echo " <td> <a href='eliminar.php? usu_codigo=". $row["usu_codigo"] . "' onclick='return confirm(\"¿Está seguro que desea eliminar?\")'>Eliminar</a></td>"; 
 echo " <td> <a href='actualizar.php ? usu_codigo=". $row["usu_codigo"] . "'>Modificar</a></td>";                                   
 echo " <td> <a href='cambiar_contraseña.php ? usu_codigo=". $row["usu_codigo"] . "'>ModificarContrasena</a></td>";     
 echo "</tr>";
 }
 } else {
 echo "<tr>";
 echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
 echo "</tr>";
 }
 $conn->close();
 ?>
 </table>
</body>
</html>