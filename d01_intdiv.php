<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intdiv</title>
</head>
<body>
    <h2>intdiv() demo</h2>
    <hr>
    <?php 

    $a =10; $b=3;
    echo "$a / $b = " . ($a/$b) . "<br/>";
    echo "(int)($a / $b) = " . (int)($a / $b) ."<br/>" ;
    echo "intdiv($a, $b) = ". intdiv($a, $b) . "<br/>";

    ?>
</body>
</html>