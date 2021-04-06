<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>generator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Generator Demo</h2>
        <hr>


        <form method="GET">
            <legend>Generate Odd-number Serials</legend>

            <div class="form-group">
                <label for="">input n1</label>
                <input type="number" class="form-control" id="n1" name="min" min="1" max="20" value="" required />
            </div>

            <div class="form-group">
                <label for="">input n2</label>
                <input type="number" class="form-control" id="n2" name="max" min="1" max="20" value="" required />
            </div>

            <button type="submit" class="btn btn-danger" name="submit">Submit</button>
        </form>

    </div>

    <div class="container">
        <p class="text-center text-success">Ket Qua :
            <?php
            if (!empty($_GET)) {
                $n1 = $_GET['min'];
                $n2 = $_GET['max'];
                echo "<b> Day so tu [$n1 -> $n2] </b><br/>";
                foreach (f2($n1, $n2) as $item) {
                    echo "$item ";
                }
                echo "<br/>";
            }
            ?>
        </p>
    </div>
</body>

</html>

<?php
//ham h2(min, max): ham sinh ra day so le tu min->max
function f2($min, $max)
{
    //xac dinh gia tri dung thu tu tang cua min va max
    if ($min > $max) {
        $temp = $min;
        $min = $max;
        $max = $temp;
    }

    //tim so le dau tien trong day so [start]
    $start = $min % 2 != 0 ? $min : $min + 1;

    //vong lap sinh ra day so le, bat dau tu start
    for ($i = $start; $i <= $max; $i += 2) {
        yield $i;
    }
}
?>