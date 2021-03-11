<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>closure</title>
</head>
<body>
    <h2>Closure call demo</h2>
    <hr>
    <?php

    class Greetings {
        private $word = "Hello";
    }

    class Farewell {
        private $word = "Goodbye";
    }
    
    //define anonymous method (closure)
    $closure = function($s){
        echo "$this->word, $s ! <br>";
    };

    //declare 2 objects from Greetings, Farewell
    $o1 = new Greetings;
    $o2 = new Farewell;

    //call ham an danh ket hop voi 2 bien o1 va o2
    $closure->call($o1, "Phat");
    $closure->call($o2, "Nghia");
    

    ?>
</body>
</html>