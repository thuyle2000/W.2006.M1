<?php 
include_once "lib/myLib.php";

//thiet lap ket noi den mySQL
$cn = getCN();

if($cn==null){
    die ("<h2>Game Over !</h2>");
}

//lay danh sach cac csdl 
$result = mysqli_query($cn,"show databases");
$ds = mysqli_fetch_all($result);
if($ds){
    echo "<h2>Databases : </h2>";
    //echo "<pre>";
    //print_r($ds);

    foreach ($ds as $key => $value) {
        echo $value[0] . "<br>";
    }
}


//lay danh sach cac bang trong csdl db2006M1 
$result = mysqli_query($cn,"show tables");
$ds = mysqli_fetch_all($result);
if($ds){
    echo "<h2>Tables : </h2>";
    //echo "<pre>";
    //print_r($ds);
    
    foreach ($ds as $key => $value) {
        echo $value[0] . "<br>";
    }
}


?>