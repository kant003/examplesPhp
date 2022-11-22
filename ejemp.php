<?php



try {
    $user='cebem';
$pass='sz3ozXQDNigY5DIAkS1VJDIwhrV1Y5mK'; 
$server='dpg-cdps0run6mppiadgs7mg-a.frankfurt-postgres.render.com';
$db='prueba_cebem';
$con = new PDO("postgres:host=$server;dbname=prueba_cebem", $user, $pass);
//postgres://cebem:sz3ozXQDNigY5DIAkS1VJDIwhrV1Y5mK@dpg-cdps0run6mppiadgs7mg-a.frankfurt-postgres.render.com/prueba_cebem
//postgres://cebem:sz3ozXQDNigY5DIAkS1VJDIwhrV1Y5mK@dpg-cdps0run6mppiadgs7mg-a/prueba_cebem
print_r($con);
 }
 catch(PDOException $e)
 {
       echo $e->getMessage();
 }
 
 ?>

