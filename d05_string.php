<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string-php</title>
</head>
<body>
    <h2>String function demo</h2>
    <hr>

    <?php
    $fullname = "Mr. Nguyen Tien Hoang Tien Duy"; 
    $name = "Tien";
    echo "Ho ten : $fullname <br/>";
    echo "Ten : $name <br/><br/>";
    echo "- strtolower(): ". strtolower($fullname). "<br/>";
    echo "- strtoupper(): ". strtoupper($fullname). "<br/>";
    echo "- stristr($fullname, $name): ". stristr($fullname, $name). "<br/>";
    echo "- strpos($fullname, $name): ". strpos($fullname, $name). "<br/>";
    echo "- strlen($fullname): ". strlen($fullname). "<br/>";
    echo "- strrev($fullname): ". strrev($fullname). "<br/>";
    echo "- bin2hex($name): ". bin2hex($name). "<br/>";
    ?>

</body>
</html>