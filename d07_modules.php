<?php

class Modules{
    public $id, $name, $fee;

    public function __construct($id='', $name='', $fee=''){
        $this->id = $id;
        $this->name = $name;
        $this->fee = $fee;
    }

    public function getList(){
        include "lib/myLib.php";
        $cn = getCN();
        $modules = [];
        $sql = "SELECT * FROM tbmodule";
        $result = $cn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $module= new Modules($row['id'], $row['name'],$row['fee']);
                $modules[] = $module;
            }
        }
        return $modules;
        closeConnect();
    }

    public function getListbyID($id){
        include "lib/myLib.php";
        $cn = getCN();
        $module = null;
        $sql = "SELECT * FROM tbmodule where id = '$id'";
        $result = $cn->query($sql);
        if($result->num_rows == 1){
            while($row = $result->fetch_assoc()){
                $module= new Modules($row['id'], $row['name'],$row['fee']);
                
            }
        }
        return $module;
        closeConnect();
    }
    public function insert($module)
    {
        include "lib/myLib.php";
        $cn = getCN();
        

        $sql = "INSERT INTO `tbmodule`(`id`, `name`, `fee`) VALUES ('$module->id', '$module->name', $module->fee)";

        $result = $cn->query($sql);
        closeConnect();
        if($result != 0){
            return true;
        }else{
            return false;
        }
       
    }

    public function delete($id){
        include "lib/myLib.php";
        $cn = getCN();

        $sql = "DELETE FROM `tbmodule` WHERE id = '$id'";

        $result = $cn->query($sql);
        closeConnect();
        if($result != 0){
            return true;
        }else{
            return false;
        }
       
    }

    public function edit($module)
    {
        include "lib/myLib.php";
        $cn = getCN();
        $sql = "UPDATE `tbmodule` SET `name`= '$module->name',`fee`= $module->fee WHERE `id`='$module->id'";

        $result = $cn->query($sql);
        closeConnect();
        if($result != 0){
            return true;
        }else{
            return false;
        }
        
    }

}

?>