<h2>Associate Array</h2>
<hr/>
<?php 
$a = ["p1"=>"coca cola", "p3"=>"ga ran","p4"=>"pizza hut", "p5"=>"banh mi", "p2"=>"mi tom", "p10"=>"banh trang tron"];

echo "<b> Danh sach san pham </b> <br/>";
foreach ($a as $k => $v) {
    echo "ms: $k, ten sp: $v <br/>";
}

echo "<br/> San pham thu 3: ".  $a["p4"]. "<br/>";


?>