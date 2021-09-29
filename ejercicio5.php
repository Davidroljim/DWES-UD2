<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio5</title>
</head>
<body>
    <h1>Tabla de verdad de operador AND</h1>

    <table border="2">
    <tr>
        <th>Variable 1</th>
        <th>Variable 2</th>
        <th>Variable 3</th>
        <th>Variable 4</th>
    </tr>
    <tr>
    <?php
    $variable1= true;
    $variable2= true;
    $variable3= true;
    $resultado= $variable1 && $variable2 && $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>
    
    </tr>


    <tr>
    <?php
    $variable1= false;
    $variable2= true;
    $variable3= true;
    $resultado= $variable1 && $variable2 && $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>
    
    </tr>

    <tr>
    <?php
    $variable1= false;
    $variable2= false;
    $variable3= true;
    $resultado= $variable1 && $variable2 && $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>
    
    </tr>


    <tr>
    <?php
    $variable1= false;
    $variable2= false;
    $variable3= false;
    $resultado= $variable1 && $variable2 && $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>
    
    </tr>

    <tr>
    <?php
    $variable1= false;
    $variable2= true;
    $variable3= false;
    $resultado= $variable1 && $variable2 && $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>
    
    </tr>

    <tr>
    <?php
    $variable1= true;
    $variable2= false;
    $variable3= false;
    $resultado= $variable1 && $variable2 && $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>

    </tr>

    <tr>
    <?php
    $variable1= true;
    $variable2= false;
    $variable3= true;
    $resultado= $variable1 && $variable2 && $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>

    </tr>

    <tr>
    <?php
    $variable1= true;
    $variable2= true;
    $variable3= false;
    $resultado= $variable1 && $variable2 && $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>

    </tr>

    </table>
    <br>
    <br>
    <br>

    <table border="2">
    <tr>
        <th>Variable 1</th>
        <th>Variable 2</th>
        <th>Variable 3</th>
        <th>Variable 4</th>
    </tr>
    <tr>
    <?php
    $variable1= true;
    $variable2= true;
    $variable3= true;
    $resultado= $variable1 || $variable2 || $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>
    
    </tr>


    <tr>
    <?php
    $variable1= false;
    $variable2= true;
    $variable3= true;
    $resultado= $variable1 || $variable2 || $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>
    
    </tr>

    <tr>
    <?php
    $variable1= false;
    $variable2= false;
    $variable3= true;
    $resultado= $variable1 || $variable2 || $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>
    
    </tr>


    <tr>
    <?php
    $variable1= false;
    $variable2= false;
    $variable3= false;
    $resultado= $variable1 || $variable2 || $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>
    
    </tr>

    <tr>
    <?php
    $variable1= false;
    $variable2= true;
    $variable3= false;
    $resultado= $variable1 || $variable2 || $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>
    
    </tr>

    <tr>
    <?php
    $variable1= true;
    $variable2= false;
    $variable3= false;
    $resultado= $variable1 || $variable2 || $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>

    </tr>

    <tr>
    <?php
    $variable1= true;
    $variable2= false;
    $variable3= true;
    $resultado= $variable1 || $variable2 || $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>

    </tr>

    <tr>
    <?php
    $variable1= true;
    $variable2= true;
    $variable3= false;
    $resultado= $variable1 || $variable2 || $variable3;
    ?>
    <td><?php var_export($variable1)?></td>
    <td><?php var_export($variable2)?></td>
    <td><?php var_export($variable3)?></td>
    <td><?php var_export($resultado)?></td>

    </tr>

    </table>

    <br>
    <br>
    <br>

    
</body>
</html>