<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spaceship</title>
</head>
<body>
    <h2>spaceship <=> demo</h2>
    <hr>
    <?php
    $n1 = 10; $n2=8;
    echo "<p>Number </p>";
    echo "$n1 <=> $n2 = " . ($n1 <=> $n2) ."<br/>";
    echo "$n2 <=> $n1 = " . ($n2 <=> $n1) ."<br/>";
    echo "$n1 <=> $n1 = " . ($n1 <=> $n1) ."<br/>";
    
    $s1 = "Nhan"; $s2="Nghia";
    echo "<p>String </p>";
    echo "$s1 <=> $s2 = " . ($s1 <=> $s2) ."<br/>";
    echo "$s2 <=> $s1 = " . ($s2 <=> $s1) ."<br/>";
    echo "$s1 <=> $s1 = " . ($s1 <=> $s1) ."<br/>";

    
    ?>
</body>
</html>