<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <?php
    $base= 5;
    $altura= 10;
    $diagonalMayor= 8;
    $diagonalMenor= 6;
    $areaTriangulo= $base*$altura/2;
    $areaCuadrado= $base*$altura;
    $areaRombo= $diagonalMayor*$diagonalMenor/2;
    
    define("PI", 3.14159);
    echo PI;
    printf ("<p> El Triangulo de base tiene %d cm, de altura %d cm y tiene un area de %d cm </p>",$base, $altura, $areaTriangulo);
    printf ("<p> El Cuadrado de base tiene %d cm, de altura %d cm y tiene un area de %d cm </p>",$base, $altura, $areaCuadrado );
    printf ("<p> El Rombo de diagonal mayor tiene %d cm, de diagonal menor tiene %d cm y tiene un area de %d cm </p>",$diagonalMayor, $diagonalMenor, $areaRombo );


    ?>
</body>
</html>