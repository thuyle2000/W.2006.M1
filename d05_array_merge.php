<h2>Array Merge</h2>
<hr/>
<?php 
$a1 = ["p1"=>"coca cola", "p3"=>"ga ran","p4"=>"pizza hut", "p5"=>"banh mi", "p2"=>"mi tom", "p10"=>"banh trang tron"];

$a2 = ["p10"=>"pepsi cola", "p30"=>"chao ga","p40"=>"chao vit", "p15"=>"7 up", "p1"=>"hot vit lon"];

echo "<b> Danh sach san pham 1: </b> <br/>";
foreach ($a1 as $k => $v) {
    echo "ms: $k, ten sp: $v <br/>";
}

echo "<hr><b> Danh sach san pham 2: </b> <br/>";
foreach ($a2 as $k => $v) {
    echo "ms: $k, ten sp: $v <br/>";
}


$a = array_merge($a1, $a2);
echo "<hr><b> Danh sach san pham tong hop: </b> <br/>";
foreach ($a as $k => $v) {
    echo "ms: $k, ten sp: $v <br/>";
}

echo "Tong so san pham : ". count($a) . "<br>";

?>