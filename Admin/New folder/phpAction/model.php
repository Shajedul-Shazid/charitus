<?php
class model{

    public function logoSelect(){
        $selectLogoSQL="SELECT * FROM `logo`";
        $controllerObj=new controller();
        $runSelect=$controllerObj->dataSelect($selectLogoSQL);
        if ($runSelect==true){
            return $runSelect;
        }
        else{
            return false;
        }
    }

    public function logoUpdate($img){
        $unique=date("Y-M-D-H-i-s");
        $photoName=$unique.$_FILES['photo']['name'];
        $tmpName=$_FILES['photo']['tmp_name'];
        unlink("../img".$img);
        move_uploaded_file($tmpName, "../img/$photoName");
        $logoUpdateSQL="UPDATE `logo` SET `name`='$photoName'";
        $controllerObj=new controller();
        $runLogoUpdate=$controllerObj->dataUpdate($logoUpdateSQL);
        if ($runLogoUpdate==true){
            return true;
        }
        else{
            return false;
        }
    }
}

?>