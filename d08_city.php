<?php 
include_once 'lib/myLib.php';

//mo ta cau truc bang tbCity
class City{
    //thuoc tinh
    public $id, $sname, $lname, $zipcode, $area;

    //ham dung
    public function __construct($id=null, $sname='MA', $lname='Ma City', $zipcode=0, $area=100)
    {
        $this->id = $id;
        $this->sname = $sname;
        $this->lname = $lname;
        $this->zipcode = $zipcode;
        $this->area = $area;
    }

    public static function get(){

        $cn = getCN(); //mo ket noi

        $sql = "select * from tbCity";

        $result = $cn->query($sql);  //tra ve doi tuong resultset (tap cac dong du lieu trong bang tbcity)

        $a=[]; // mang chua cac doi tuong city, lay tu ket qua [result]

        while($row = $result->fetch_assoc()){
            $item= new City($row['id'], $row['sname'],$row['lname'], $row['zipcode'], $row['area']);
            $a[] = $item;
        }

        closeConnect();  //dong ket noi

        return $a;
    }

}






?>