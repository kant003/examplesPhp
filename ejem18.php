<a href="ejem17.php">Insertar nuevo gato</a>
<hr>
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

if($_GET){
    $idABorrar = $_GET['idBorrar'];
    $query = "DELETE FROM gatos WHERE id=".$idABorrar;
    $result = $conn->query($query);
  
    if($result == TRUE){
        echo "el gato se borró correctamente";
        header('Location: ejem18.php');
    }else{
        echo "Error al intentar borrar.".$conn->error;
    }
}

$query='SELECT * FROM gatos';
$result=$conn->query($query);

while($row = $result->fetch_assoc() ){
    echo $row['nombre'].'<br/>';
    $id=$row['id'];
    echo "<a href='ejem18.php?idBorrar={$id}'>Borrar</a>";
    echo "<br/>";
    $img=$row['imagen'];
    //echo '<img src="'.$img.'" width="150">'.'<br/>';
    echo "<img src='{$img}' width='150'> ";
    echo "<br/>";
}



$conn->close();
?>