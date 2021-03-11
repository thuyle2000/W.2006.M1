<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scalar type</title>
</head>

<body>
    <h2>Scalar Type Demo</h2>
    <hr>
    <?php
    //test case 1
    $a = 10;
    $b = 20;
    echo "<b> case 1: </b> <br/> ";
    echo "a= $a, b=$b <br/ >";
    add($a, $b);

    //test case 2
    $a = 10.96;
    $b = 20;
    echo "<b> case 2: </b> <br/> ";
    echo "a= $a, b=$b <br/ >";
    add($a, $b);

    //test case 3
    $a = "10.96";
    $b = 20;
    echo "<b> case 3: </b> <br/> ";
    echo "a= $a, b=$b <br/ >";
    add($a, $b);


    //test case 4
    $a = "123";
    $b = "20";
    echo "<b> case 4: </b> <br/> ";
    echo "a= $a, b=$b <br/ >";
    add($a, $b);

    //**********************
    //ham cong 2 doi so x, y
    //**********************
    function add($x, $y)
    {
        echo "$x + $y = " . ($x + $y) . "<br/><br/>";
    }
    ?>
</body>

</html>