<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
</head>
<body>

<?php
    $pantalon = 29.99;
    $nPantalones= 3;
    $camisa= 25.99;
    $nCamisas= 2;
    define("DESCUENTO",8);
    //actv4
    $zapatos= 45.99;
    $zapatos1=45.99;
    $descuentoZapatos= 12/100;
    $descuentoZapatos*=$zapatos;
    $zapatos-=$descuentoZapatos;  

    $descuentoF=DESCUENTO/100;
    $precioTotalSD= $pantalon*$nPantalones+$camisa*$nCamisas;
    $calculaDescuento= ($pantalon*$nPantalones+$camisa*$nCamisas)*$descuentoF;
    $precioTotalCD=$precioTotalSD-$calculaDescuento;
    $precioTotalCD1+=$precioTotalCD;
    $precioTotalCD1+=$zapatos;

    printf ("<p> El precio de un pantalón es de %.2f euros</p>",$pantalon);
    printf ("<p> El precio de una camisa es de %.2f euros</p>",$camisa);
    printf ("<p> El total sin descuento es de %.2f</p>",$precioTotalSD);
    printf ("<p> El total con descuento es de %.2f</p>",$precioTotalCD);

    printf ("<p> El precio de un pantalón es de %.2f euros</p>",$zapatos1);
    printf ("<p> El precio de un pantalón es de %.2f euros</p>",$zapatos);
    printf ("<p> El precio de un pantalón es de %.2f euros</p>",$precioTotalCD1);
    ?>

</body>
</html>