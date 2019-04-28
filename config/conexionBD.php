<?php
$servername="localhost";
$username="root";
$password='';
$dbname ="hipermedial";


//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error){

echo "error:";
die("Connection failed: ". $conn->connect_error);

} else{


    echo "conexion exitosa!! :";
}
?>