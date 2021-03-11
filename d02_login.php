<?php
if (!isset($_POST["email"])){
    //quay ve trang login.html
    header("location:d02_login.html");
}


//lay thong tin dang nhap
$email = $_POST["email"];
$pwd = $_POST["pwd"];

if(isset($_POST["remember"])){
    $remember = $_POST["remember"];
    if($remember){
        $duration = 60*5 + time();
        setcookie("uid",$email, $duration);
        setcookie("pwd", $pwd,$duration);
    }
}



if($email =="admin" && $pwd=="123"){
    echo "<h2>Hi, Admin !</h2>";
}
else{
    echo "<h2>Hi, $email ! </h2>";
}
?>