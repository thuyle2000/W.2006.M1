<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math php</title>
</head>

<body>
    <h2>Math Lib PHP</h2>
    <hr>

    <?php
    $x = 13.758;
    $y = 3.3456;
    $z = 6.35679;

    $max = max($x, $y, $z);
    $min = min($x, $y, $z);

    $roundX = round($x);
    $ceilX = ceil($x);
    $floorX = floor($x);

    echo "<b> x = $x; y=$y, z=$z </b> <br/><br/>";
    echo "max(x,y,z) = $max <br/>";
    echo "min(x,y,z) = $min <br/>";
    echo "round(x) = $roundX <br/>";
    echo "ceil(x) = $ceilX <br/>";
    echo "floor(x) = $floorX <br/>";


    ?>
</body>

</html>