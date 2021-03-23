<?php
$ds = [
    "S001"=>"Duy Nguyen Hoang",
    "S129"=>"Sang Vo Thanh",
    "S100"=>"Nhan Le Thanh",
    "S007"=>"Hien Tran",
    "S200"=>"Vuong Hung",
    "S300"=>"Thinh Le Duc",
    "S310"=>"Thinh Tran Duc",
    "S220"=>"Trieu Vo",
    "S224"=>"Minh Le",
    "S240"=>"Phat Luong Xuan",
    "S330"=>"Dung Le",
    "S247"=>"Tan Le",
    "S242"=>"Tan Le"
];

$ds2 = [
    "S009"=>"Chien Minh Tran",
    "S240"=>"Phat Luong Xuan",
    "S330"=>"Dung Le",
    "S247"=>"Tan Le",
    "S290"=>"Tan Le",
    "S224"=>"Minh Le",
    "S500"=>"Nam Giao",
    "S502"=>"Nhut Nguyen",
];


inDanhsach($ds,"Danh sach Sinh vien");

// //sort ds theo thu tu ten sinh vien
// sort($ds);
// inDanhsach($ds, "Danh sach Sinh vien - theo thu tu ten -(sort) ");

//sort ds theo thu tu ten sinh vien
asort($ds);
inDanhsach($ds, "Danh sach Sinh vien - theo thu tu ten -(asort) ");

//sort ds theo thu tu ma so sinh vien
ksort($ds);
inDanhsach($ds, "Danh sach Sinh vien - theo thu tu ma so -(ksort) ");

//sort ds theo thu tu ten sinh vien
arsort($ds);
inDanhsach($ds, "Danh sach Sinh vien - theo thu tu ten tu Z->A -(arsort) ");

//hoan doi cot ms va tensv trong ds sinh vien
$newA = array_flip($ds);
inDanhsach($newA, "Danh sach Sinh vien -(array_flip) ");


//danh sach sv co trong ca 2 tap ds & ds2
$ds3 = array_intersect($ds,$ds2);
inDanhsach($ds3, "Danh sach Sinh vien co trong ds va ds2 ");




function inDanhsach($ds, $tieude){
    echo "<h3> $tieude </h3>";
    foreach ($ds as $ms => $ten) {
        printf("%s, %s <br>", $ms, $ten);
    }
    echo "Tong so sinh vien: " . sizeof($ds) . "<br>"; 
}

?>