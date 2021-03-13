<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime-number</title>
</head>
<body>
    <h2>FOR DEMO</h2>
    <hr>
    <form action="">
        input number : 
        <input type="number" name="n" id="n" value="" required min="2" /> 
        <input type="submit" value="Check" name="btOK">
    </form>
</body>

<?php
if(isset($_GET["n"])){

    $n = $_GET["n"];
    echo "<br/><br/> n = $n <br/>";
    if(isPrime($n)){
        echo "$n la so nguyen to";
    }else{
        echo "$n la hop so";
    }

}
function isPrime($n){
    $i = 2;

    for(;$i <= sqrt($n); $i++){
        if($n % $i == 0){
            return false;
        }
    }
    
    echo "So lan lap: ". $i. "<br>";
    return true;
}
?>
</html>