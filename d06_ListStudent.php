<?php 

include_once "lib/myLib.php";

$cn = getCN();

// // lay danh sach sinh vien
// $result = mysqli_query($cn, "select * from tbStudent");

// //in danh sach sv 
// while ($sv = mysqli_fetch_row($result)){
//     echo "$sv[0], $sv[1] , $sv[2] <br/>";
// }

// echo "<b>Tong so sinh vien :</b> " . mysqli_num_rows($result);



// // lay danh sach sinh vien
// $result = mysqli_query($cn, "select * from tbStudent");

// //in danh sach sv 
// echo "<pre>";
// while ($sv = mysqli_fetch_array($result, MYSQLI_BOTH)){
//     echo $sv["id"] .",". $sv["name"] .", $sv[2] <br/>";
// }
// echo "<b>Tong so sinh vien :</b> " . mysqli_num_rows($result);


// lay danh sach sinh vien
$result = mysqli_query($cn, "select * from tbStudent");

//in danh sach sv 
echo "<pre>";

$ds = mysqli_fetch_all($result);
foreach ($ds as $sv) {
    printf("%s, %s, %s, %s <br>", $sv[0], $sv[1], $sv[2], $sv[3]);
}

echo "<b>Tong so sinh vien :</b> " . mysqli_num_rows($result);