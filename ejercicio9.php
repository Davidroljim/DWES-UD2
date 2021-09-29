<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio9</title>
</head>
<body>
    <?php

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_ADDR'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['DOCUMENT_ROOT'];
    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    

    function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    $prueba=null;
    static $prueba1=null;
    global $pruebaGlobal;
    return $prueba;
}

    echo $prueba;
    echo $pruebaGlobal;
    echo $prueba1;

    ?>
    
</body>
</html>