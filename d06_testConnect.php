<?php
$hostDB = "localhost";
$uidDB = "root";
$pwdDB = "";
$dbName = "db2006M1";

$link = mysqli_connect($hostDB, $uidDB, $pwdDB, $dbName);

if($link) {
    echo "<b> Connect succeeded ! </b><br/>";
}
else{
    echo "<b> Connect failed ! </b><br/>";
}

?>