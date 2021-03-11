<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uniform</title>
</head>
<body>
    <h2>Uniform variable Demo</h2>
    <hr>

    <?php 
    error_reporting(0); //turn off error message

    function f1(){
        echo "- In f1() <br/>";
    }

    function f2(){
        echo "- In f2() <br/>";
        return f1;
    }

    function f3(){
        echo "- In f3() <br/>";
        return f2;
    }

    //test case
    echo "<b> f3() </b><br/>";
    f3();
    echo "*************** <br/><br/>";

    echo "<b> f3()() </b><br/>";
    f3()();
    echo "*************** <br/><br/>";  
    
    echo "<b> f3()()() </b><br/>";
    f3()()();
    echo "*************** <br/><br/>";

    ?>
</body>
</html>