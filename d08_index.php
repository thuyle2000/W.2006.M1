<?php
include_once 'd08_city.php';

//lay ds du lieu tu bang city
$ds = City::get();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>city</title>
</head>

<body>

    <div class="container">
        <h2>City List</h2>


        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>short name</th>
                    <th>long name</th>
                    <th>zipcode</th>
                    <th>area</th>
                </tr>
            </thead>

            <tbody>

                <?php
                //duyet tung dong ket qua (moi dong la 1 doi tuong city ) trong [ds]
                foreach ($ds as $item) {
                    echo "<tr>";
                    echo "<td> $item->id </td>";
                    echo "<td> $item->sname </td>";
                    echo "<td> $item->lname </td>";
                    echo "<td> $item->zipcode </td>";
                    echo "<td> $item->area </td>";
                    echo "<tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>