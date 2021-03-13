<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime1000</title>
</head>
<body>
    <h2>Series of Prime Numbers &lt; 100 </h2>
    <hr>

    <?php
    for ($i=2 ; $i<=100 ; $i++){
        if(isPrime($i)){
            echo " $i ";
        }       
    }
    
    function isPrime($n){
        $i = 2;
    
        for(;$i <= sqrt($n); $i++){
            if($n % $i == 0) {
                return false;
            }
        } 
        return true;
    }
    
    
    ?>
</body>
</html>

