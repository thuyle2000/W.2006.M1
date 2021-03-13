<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php operators</title>
</head>
<body>
    <h2>PHP operators</h2>
    <hr>
    <?php
    $a = 28; $b=41;

    //phep toan 3 ngoi - phep toan dieu kien - phep toan tam phan
    $c = ($a>$b)?$a:$b;

    echo "<b>Conditional Operator </b> <br/>";
    echo "a = $a, b = $b, => max(a,b) = $c <br/><br/>";

    echo "<b>Bitwise Operator </b> <br/>";
    $c = $a & $b;
    echo "a = $a, b = $b, => (a&b) = $c <br/>";

    $c = $a | $b;
    echo "a = $a, b = $b, => (a|b) = $c <br/>";

    $c = $a ^ $b;
    echo "a = $a, b = $b, => (a^b) = $c <br/><br/>";

    
    $a = "a"; $b="m";
    $c = $a & $b;
    echo "a = '$a', b = '$b', => (a&b) = $c <br/>";

    $c = $a | $b;
    echo "a = '$a', b = '$b', => (a|b) = $c <br/>";

    $c = $a ^ $b;
    echo "a = '$a', b = '$b', => (a^b) = $c <br/><br/>";

    $a = 28; $b=3;
    $c = $a >> $b;
    echo "a = $a, b = $b, => (a>>b) = $c <br/>";

    $c = $a << $b;
    echo "a = $a, b = $b, => (a << b) = $c <br/><br/>";

    echo "<b>Increment Operator </b> <br/>";
    $a = 'x';
    for($i=0; $i<30; $i++ ){
        echo $a++ . "<br/>";
    }

    ?>
</body>
</html>