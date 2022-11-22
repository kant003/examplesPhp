<?php
// Uso de bases de datos
$host='localhost';
$user='root';
$pass='';
$dbName='prueba';
$conn = new mysqli($host, $user, $pass, $dbName);
if($conn->connect_error){
    die('fallo al conectarse:'.$conn->connect_error);
}

echo 'Conexión ok';

$conn->close();
?>