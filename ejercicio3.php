<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 3</title>
</head>
<body>
    <?php
    $pantalon = 29.99;
    $nPantalones= 3;
    $camisa= 25.99;
    $nCamisas= 2;
    define("DESCUENTO",8);
    
    $descuentoF=DESCUENTO/100;
    $precioTotalSD= $pantalon*$nPantalones+$camisa*$nCamisas;
    $calculaDescuento= ($pantalon*$nPantalones+$camisa*$nCamisas)*$descuentoF;
    $precioTotalCD=$precioTotalSD-$calculaDescuento;

    printf ("<p> El precio de un pantalón es de %.2f euros</p>",$pantalon);
    printf ("<p> El precio de una camisa es de %.2f euros</p>",$camisa);
    printf ("<p> El total sin descuento es de %.2f</p>",$precioTotalSD);
    printf ("<p> El total con descuento es de %.2f</p>",$precioTotalCD);
    ?>
</body>
</html>