<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio8</title>
</head>
<body>
    <?php

    $variable1= "2.3";
    echo "Variable 1: ",$variable1;
    echo "<br>";
    echo "Es de tipo : ",gettype($variable1);
    echo "<br>";
    echo "Es float : ",var_export(is_float($variable1));
    echo "<br>";
    echo "Es integer : ",var_export(is_integer($variable1));
    echo "<br>";

    settype($variable1,"float");
    echo "Es null : ",var_export(is_null($variable1));
    echo "<br>";
    echo "Es double : ",var_export(is_double($variable1));
    echo "<br>";
    echo "Es string : ",var_export(is_string($variable1));
    echo "<br>";
    echo "Fuerza la conversión a integer de la variable 1: ",(int)$variable1;
    
    $variable2= "75alñsdg";
    echo "<br>";
    echo "Fuerza la conversión a integer de la variable 2: ",(int)$variable2;
    ?>
</body>
</html>