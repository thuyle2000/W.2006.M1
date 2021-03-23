<?php

include_once 'myLib.php';

$link = cn();

$r = mysqli_query($link, "show databases");
$dbs = mysqli_fetch_all($r);


// print_r($dbs);

foreach ($dbs as $key => $value) {
    print_r($value);
    print_r("<br/>");
}
echo "<hr/>";

$r = mysqli_query($link, "show databases");
while($row = mysqli_fetch_row($r)){
    print_r($row[0]);
    print_r("<br/>");
}

echo "<hr/>";
mysqli_select_db($link, "db2006");
$r = mysqli_query($link, "show tables");
while($row = mysqli_fetch_row($r)){
    print_r($row[0]);
    print_r("<br/>");
}




?>