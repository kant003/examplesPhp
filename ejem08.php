<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista usando un for</h1>
    <ul>
        <?php
        for($i=5;$i<=10;$i++){
            echo "<li> Número ".$i."</li>";
        }
        ?>
    </ul>

    <h1>Lista usando un do while</h1>
    <ul>
        <?php
        $cont = 5;
        do{
            echo "<li> Número ".$cont."</li>";
            $cont++;
        }while($cont <= 10)
        ?>
    </ul>

    <h1>Listas con un while</h1>
    <ul>
        <?php
        $cont = 5;
        while($cont <= 10){
            echo "<li> Número ".$cont."</li>";
            $cont++;
        }
        ?>
    </ul>

</body>
</html>