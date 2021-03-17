<?php 
function f1(){
    $a=125;
    echo "<br/>In function f1(), a = $a <br>";
    $a = sqrt($a);
    echo "after sqrt(), a = $a <br>";
}

//pass by value
function f2($a){
    echo "<br/>In function f2(), a = $a <br>";
    $a = sqrt($a);
    echo "after sqrt(), a = $a <br>";
}

//pass by reference
function f3(&$a){
    echo "<br/>In function f3(), a = $a <br>";
    $a = sqrt($a);
    echo "after sqrt(), a = $a <br>";
}

//parameter with default value
function f4($a=256){
    echo "<br/>In function f4(), a = $a <br>";
    $a = sqrt($a);
    echo "after sqrt(), a = $a <br>";
}


$a = 121;
echo "<br/> Before f1(), a= $a <br/>";
f1();
echo "<br/> After f1(), a= $a <br/><hr/>";

$a = 121;
echo "<br/> Before f2(), a= $a <br/>";
f2($a);
echo "<br/> After f2(), a= $a <br/><hr/>";

$a = 121;
echo "<br/> Before f3(), a= $a <br/>";
f3($a);
echo "<br/> After f3(), a= $a <br/><hr/>";

$a = 121;
echo "<br/> Before f4(a), a= $a <br/>";
f4($a);
echo "<br/> After f4(a), a= $a <br/><hr/>";

$a = 121;
echo "<br/> Before f4(), a= $a <br/>";
f4();
echo "<br/> After f4(), a= $a <br/><hr/>";


?>