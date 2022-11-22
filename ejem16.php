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

$query='SELECT * FROM gatos';
$result=$conn->query($query);

while($row = $result->fetch_assoc() ){
    echo $row['nombre'].'<br/>';
    $img=$row['imagen'];
    //echo '<img src="'.$img.'" width="150">'.'<br/>';
    echo "<img src='{$img}' width='150'> ";
    echo "<br/>";
}



$conn->close();
?>