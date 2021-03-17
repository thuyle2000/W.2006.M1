<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date-php</title>
</head>
<body>
    <h2>Date function demo</h2>
    <hr>
    <?php
    //set timezon to local time 'Saigon'
    date_default_timezone_set("Asia/Saigon");

    $today = getdate();

    echo "today is <br>" ;

    echo "<b>var_dump</b><br>";
    var_dump($today);

    echo "<b>print_r</b><br>";
    print_r($today);

    echo "<br/><br/><b>foreach</b><br>";
    foreach ($today as $k => $v) {
        echo " $k => $v <br/>";
    }
    echo "<br/><hr>";
    echo "Today is " . $today["weekday"]. ", " . $today["mday"] . ", ". $today["month"];

    echo "<br/>";
    echo date("l, F Y - h:i:s a") . "<br/>";
    echo date("l, M y - h:i:s A") . "<br/>";
    echo date("l, m y - h:i:s a") . "<br/>";

    ?>
</body>
</html>