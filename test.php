<?php
function f1(){
    $a = 10; $b=20;
    echo "a = $a <br/>";
    $a = $a + $b;
    
    echo "in function f1, a = $a <br/>";
}

function f2($a){
    $b=20;
    echo "a = $a <br/>";
    $a = $a + $b;
    
    echo "in function f2, a = $a <br/>";
}



function f3(&$a){
    $b=20;
    echo "a = $a <br/>";
    $a = $a + $b;
    
    echo "in function f3, a = $a <br/>";
}

function f4($a=100){
    $b=20;
    echo "a = $a <br/>";
    $a = $a + $b;
    
    echo "in function f4, a = $a <br/>";
}

$a =100;
echo "before f1(), a = $a <br/>";
f1();
echo "a = $a <br/><br/>";

echo "before f2(), a = $a <br/>";
f2($a);
echo "a = $a <br/><br/>";

echo "before f3(), a = $a <br/>";
f3($a);
echo "a = $a <br/><br/>";

echo "before f4(a), a = $a <br/>";
f4($a);
echo "a = $a <br/><br/>";

echo "before f4(), a = $a <br/>";
f4();
echo "a = $a <br/><br/>";

?>