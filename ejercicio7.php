<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio7</title>
</head>
<body>
    <?php
    echo "<h1>Operador AND</h1>";
    $entero1=4;
    $entero2=25;
    printf ("Primer número entero en binario : %b",$entero1);
    echo "<br>";
    printf ("Segundo número entero en binario : %b",$entero2);
    echo "<br>";
    printf ("El resultado de la operación bit a bit AND es : %b",$entero2 & $entero1);
    echo "<br>";
    printf ("El resultado de la operación bit a bit NOT es : %b",~$entero2);
    echo "<br>";
    printf ("El resultado de la operación bit a bit OR es : %b",$entero2 | $entero1);
    echo "<br>";
    printf ("El resultado de la operación bit a bit XOR es : %b",$entero2 ^ $entero1);
    ?>
</body>
</html>