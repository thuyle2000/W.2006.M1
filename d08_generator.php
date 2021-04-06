<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h2>Generator Demo</h2>
        <hr>
        <?php

        function f0($min, $max)
        {
            $a =[];
            // for ($i=0, $n = $min; $n<= $max; $n += 2, $i++) {
            //     $a[$i] = $n;
            // }
            $n = $min;
            for ($i=0; $n<= $max; $i++) {
                $a[$i] = $n;
                $n += 2;
            }
            return $a;
            echo "<h4>Ket thuc ham F0()</h4>"; //lenh nay ko bao gio chay !
        }



        function f1($min, $max)
        {
            for ($i = $min; $i <= $max; $i += 2) {
                yield $i;
            }
            echo "<h4>Ket thuc ham F1()</h4>";
        }


        //Test  ham f0()
        $n1 = 2; $n2 = 11;
        $x = f0($n1, $n2);
        echo "<b>f0(): Day so tu [$n1 -> $n2] </b><br/>";
        foreach ($x as $item) {
            echo "$item ";
        }
        echo "<br/>";

        //Test  ham f1()
        $n1 = 2; $n2 = 11;
        
        echo "<b>f1(): Day so tu [$n1 -> $n2] </b><br/>";
        foreach (f1($n1, $n2) as $item ) {
            echo "$item ";
        }
        echo "<br/>";

        ?>
    </div>

</body>

</html>