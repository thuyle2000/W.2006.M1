<?php 
session_start();
include "d07_modules.php";
    if(isset($_POST['submit'])){
        $module = new Modules($_POST['id'],$_POST['name'], $_POST['fee']);
        
        $result  = $module->edit($module);
        if($result == true){
            header("Location: d07_index.php");
            exit;
        }     
        $_SESSION['error'] = "edit Failed";
        
    }else{
        $module = new Modules();
        $id = $_GET['id'];
        $list = $module->getListbyID($id);
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="" method="POST">       
        <table>
            <tr>
                <td>ID: </td>
                <td><input readonly type="text" name="id" value="<?= $list->id ?>"></td>
            </tr>
            <tr>
                <td>name :</td>
                <td><input type="text" name="name" value="<?= $list->name ?>"></td>
            </tr>
            <tr>
                <td>fee: </td>
                <td><input type="text" name="fee" value="<?= $list->fee ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" ></td>
            </tr>
        </table>
    </form>
    
</body>
</html>