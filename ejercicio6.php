<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio6</title>
</head>
<body>
    <?php
    $opDiarias="2";
    $opSemanales="4";
    define("MAXOPDIARIAS",6);
    define("MAXOPSEMANALES",30);

        echo"el valor de operaciones diarias es mayor o igual que el máximo: ", var_export($opDiarias>=MAXOPDIARIAS);
        echo "<br>";
        echo"El valor de operaciones semanales es mayor o igual que el máximo: ", var_export($opSemanales >= MAXOPSEMANALES);
        echo "<br>";
        echo "El valor de operaciones diarias es idéntico al máximo: ", var_export($opDiarias===MAXOPDIARIAS);
        echo "<br>";
        echo "El valor de operaciones diarias es distinto al de operaciones semanales: ", var_export($opDiarias!=$opSemanales);
    ?>
</body>
</html>