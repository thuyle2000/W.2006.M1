<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>generator</title>
</head>
<body>
    <h2>Generator Demo</h2>
    <hr>
    <?php
    srand();

    //dinh nghia ham sinh ra n so ngau nhien
    function random_numbers($n){
        for ($i=0; $i<$n ; $i++){
            yield rand(0,100);  //tao va tra ve 1 so nn [0-100]
        }
    }


    //tao bien chua 10 so ngau nhien duoc tao tu ham random_numbers
    $ds = random_numbers(10);

    //in ra cac so ngau nhien trong ds
    echo "<ol>";
    foreach($ds as $item){
        echo "<li> $item </li>";
    }
    echo "</ol>";

    
    ?>
</body>
</html>