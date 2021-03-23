<?php 

error_reporting(0);
$link = null;
function getCN(){
    $hostDB = "localhost";
    $uidDB = "root";
    $pwdDB = "";
    $dbName = "db2006M1";
    
    global $link;
    $link = mysqli_connect($hostDB, $uidDB, $pwdDB, $dbName) or 
    die ('<h2>Can\'t not connect to database ! </h2>');;

    return $link;
    
}

function closeConnect(){
    global $link;
    if($link != null){
        $link->close();
    }
}


?>