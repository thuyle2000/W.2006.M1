<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
</head>
<body>
    <h2>
    PHP Language - Wamp Server
    </h2>
    <hr>
    <?php
    $today = gmdate("M d y, H:m:s");
    echo "Hom nay la $today <br/>";

    $h = intval(gmdate("H"))+7;


    echo "Bay gio la $h gio";

    if($h<11){
        echo '<p>Hoc bai di ! </p>';
    }
    else{
        echo '<p>Doc bao thoi !</p>';
        header("location:https://vnexpress.net/");
    }

    ?>

</body>
</html>