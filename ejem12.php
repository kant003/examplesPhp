<?php
    // https://www.php.net/manual/en/function.array.php
    // https://www.php.net/manual/en/ref.array.php
    $fruta1='fresa';
    $fruta2='pera';
    $fruta3='manzana';
   
    $frutas=array('fresa','pera','manzana');
    print_r($frutas);
    echo "<br/>";
    echo "En la posicion 2 del array hay: ".$frutas[1];
    echo "<br/>";
    foreach($frutas as $indice=>&$valor){
        echo " ".$indice;
    }
    echo "<br/>";
    foreach($frutas as $indice=>&$valor){
        echo " ".$valor;
    }
    echo "<br/>";
    foreach($frutas as $indice=>&$valor){
        echo " ".$frutas[$indice];
    }
    echo "<br/>";
    for($i=0; $i<count($frutas); $i++){
        echo " ".$frutas[$i];
    }

   
?>