<?php   
function cn(){

    $link = mysqli_connect("localhost","root","");
    return $link;
    
    echo "Link: <br>";
    print_r($link);
}

cn();