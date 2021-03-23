<?php 
session_start();
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
    <a href="d07_createM.php">Insert New Module</a>
    <span>
    <?php echo isset($_SESSION['message']) ? $_SESSION['message'] : "" ;
    unset($_SESSION['message']); 
    ?>
    </span>
    
    <?php 
        include "d07_modules.php";
        $module = new Modules();    
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $result = $module->delete($id);
            if($result == true){
                $_SESSION['message'] =  "Delete Successfully";
                
            }else{
                $_SESSION['message'] = "Delete Failed";
            }
            header("Location: d07_index.php");  
        }
    

        $list = $module->getList();
        
        
    ?>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Fee</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($list as $key => $value) {
                ?>
                  <tr>
                  <td><?= $value->id ?></td>
                  <td><?= $value->name ?></td>
                  <td><?= $value->fee ?></td> 
                  <td><a href="d07_edit.php?id=<?= $value->id ?>&">Edit</a></td>
                  <td><a onclick="return confirm('Are you sure? ')" href="d07_index.php?id=<?=$value->id ?>">Delete</a></td>
                  </tr>
                <?php
                }
            ?>
        </tbody>
    </table>

</body>
</html>