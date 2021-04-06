<?php
require_once 'lib/myLib.php';

class Contact
{
    public $id, $name, $email, $zipcode;

    public function __construct($id = '', $name = '', $email = '', $zipcode = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->zipcode = $zipcode;
    }


    public static function get()
    {
        $cn = getCN();
        $contacts = [];

        $sql = 'select * from tbContact';
        $result = $cn->query($sql);
        

        while ($row = $result->fetch_assoc()) {
            $contacts[] = new Contact($row['id'], $row['name'], $row['email'], $row['zipcode']);
        }

        closeConnect();
        return $contacts;
    }

    public static function getByID($id)
    {
        $cn = getCN();
        $contacts = null;

        $sql = "select * from tbContact where id='$id'";
        $result = $cn->query($sql);
    
        if ($row = $result->fetch_assoc()) {
            $contacts = new Contact($row['id'], $row['name'], $row['email'], $row['zipcode']);
        }

        closeConnect();
        return $contacts;
    }


    public static function getByName($name)
    {
        $cn = getCN();
        $contacts = [];

        $sql = "select * from tbContact where name like'%$name%'";
        $result = $cn->query($sql);
    
        while ($row = $result->fetch_assoc()) {
            $contacts[] = new Contact($row['id'], $row['name'], $row['email'], $row['zipcode']);
        }

        closeConnect();
        return $contacts;
    }


    public static function insert($item)
    {
        $cn = getCN();

        $sql = "INSERT INTO `tbcontact` (`id`, `email`, `zipcode`, `name`) VALUES (NULL, '$item->email', '$item->zipcode', '$item->name')";

        $result = $cn->query($sql);
        closeConnect();

        return $result;
    }


    public static function delete($id)
    {
        $cn = getCN();

        $sql = "DELETE FROM `tbcontact` WHERE `tbcontact`.`id` = '$id'";

        $result = $cn->query($sql);

        closeConnect();
        return $result;
    }

    public static function update($item)
    {
        $cn = getCN();

        $sql = "UPDATE `tbcontact` SET `email` = '$item->email', `zipcode`= '$item->zipcode',`name`= '$item->name' WHERE `tbcontact`.`id` = '$item->id'";

        $result = $cn->query($sql);
        closeConnect();

        return $result;
    }



}
