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

    public function footerInfoSelect(){
        $selectSQL="SELECT * FROM `footer`";
        $controllerObj=new controller();
        $runFooterSelect=$controllerObj->dataSelect($selectSQL);
        if ($runFooterSelect==true){
            return $runFooterSelect;
        }
        else{
            return false;
        }
    }

    public function fotterAddressUpdate(){
        $address=$_POST['address'];
        $updateAddressSQL="UPDATE `footer` SET `address`='$address'";
        $controllerObj=new controller();
        $runUpdate=$controllerObj->dataUpdate($updateAddressSQL);
        if ($runUpdate==true){
            return true;
        }
        else{
            return false;
        }
    }
    public function fotterPhoneNumberUpdate(){
        $phone=$_POST['phone'];
        $updatePhoneSQL="UPDATE `footer` SET `phone_no`='$phone'";
        $controllerObj=new controller();
        $runUpdate=$controllerObj->dataUpdate($updatePhoneSQL);
        if($runUpdate==true){
            return true;
        }
        else{
            return false;
        }
    }
    public function footerEmailUpdate(){
        $email=$_POST['email'];
        $updateEmailSQL="UPDATE `footer` SET `email`='$email'";
        $controllerObj=new controller();
        $runUpdate=$controllerObj->dataUpdate($updateEmailSQL);
        if($runUpdate==true){
            return true;
        }
        else{
            return false;
        }
    }
    public function footerFacebookUpdate(){
        $facebook=$_POST['facebook'];
        $updateFacebookSQL="UPDATE `footer` SET `facebook`='$facebook'";
        $controllerObj=new controller();
        $runUpdate=$controllerObj->dataUpdate($updateFacebookSQL);
        if($runUpdate==true){
            return true;
        }
        else{
            return false;
        }
    }
    public function footerTwitterUpdate(){
        $twitter=$_POST['twitter'];
        $twitterUpdateSQL="UPDATE `footer` SET `twitter`='$twitter'";
        $controllerObj=new controller();
        $runUpdate=$controllerObj->dataUpdate($twitterUpdateSQL);
        if($runUpdate==true){
            return true;
        }
        else{
            return false;
        }
    }
    public function footerYoutubeUpdate(){
        $youtube=$_POST['youtube'];
        $youtubeUpdateSQL="UPDATE `footer` SET `youtube`='$youtube'";
        $controllerObj=new controller();
        $runUpdate=$controllerObj->dataUpdate($youtubeUpdateSQL);
        if($runUpdate==true){
            return true;
        }
        else{
            return false;
        }
    }
    public function footerInstagramUpdate(){
        $instagram=$_POST['instagramUpdate'];
        $instagramUpdateSQL="UPDATE `footer` SET `instagram`='$instagram'";
        $controllerObjForinstagram=new controller();
        $runUpdate=$controllerObjForinstagram->dataUpdate($instagramUpdateSQL);
        if($runUpdate==true){
            return true;
        }
        else{
            return false;
        }
    }

    public function carouselInsert(){
        $unique=date("Y-M-D-H-i-s");
        $photoName=$unique.$_FILES['photo']['name'];
        $tmpName=$_FILES['photo']['tmp_name'];
        move_uploaded_file($tmpName, "../img/$photoName");
        $headline=trim($_POST['headline']);
        $details=trim($_POST['detailes']);
        $insertCarouselSQL="INSERT INTO `carousel`(`img`, `headline`, `detailes`) VALUES ('$photoName','$headline','$details')";
        $controllerObj=new controller();
        $runInsert=$controllerObj->dataInsert($insertCarouselSQL);
        if ($runInsert==true){
            return true;
        }
        else{
            return false;
        }
    }
    public function carouselSelect(){
        $selectSQL="SELECT * FROM `carousel`";
        $controllerObj=new controller();
        $runSelect=$controllerObj->dataSelect($selectSQL);
        if($runSelect==true){
            return $runSelect;
        }
        else{
            return false;
        }

    }
    public function carouselSelectForUpdate($ID){
        $carouselSelectUpdateSQL="SELECT * FROM `carousel` WHERE `id`='$ID'";
        $controllerObj=new controller();
        $runSelectUpdate=$controllerObj->dataSelect($carouselSelectUpdateSQL);
        if ($runSelectUpdate==true){
            return $runSelectUpdate;
        }
        else {
            return false;
        }

    }
    public function carouselUpdate($ID){
        $unique=date("Y-M-D-H-i-s");
        $photoName=$unique.$_FILES['photo']['name'];
        $tmpName=$_FILES['photo']['tmp_name'];
        unlink("../img".$ID);
        move_uploaded_file($tmpName, "../img/$photoName");
        $headline=trim($_POST['headline']);
        $details=trim($_POST['detailes']);
        $carouselUpdateSQL="UPDATE `carousel` SET `img`='$photoName',`headline`='$headline',`detailes`='$details' WHERE `id`='$ID'";
        $controllerObj=new controller();
        $resultUpdate=$controllerObj->dataUpdate($carouselUpdateSQL);
        if($resultUpdate==true){
            return true;
        }
        else{
            return false;
        }
    }

    public function carouselDelete($ID){
        $userDeleteSQL="DELETE FROM `carousel` WHERE `id`='$ID'";
        $controllerObj=new controller();
        $runDelete=$controllerObj->dataDelete($userDeleteSQL);
        if($runDelete==true){
            return true;
        }
        return false;
            }


      public function workInsert(){
          $unique=date("Y-M-D-H-i-s");
          $photoName=$unique.$_FILES['photo']['name'];
          $tmpName=$_FILES['photo']['tmp_name'];
          move_uploaded_file($tmpName, "../img/$photoName");
          $date=trim($_POST['date']);
          $title=trim($_POST['title']);
          $shortDesc=trim($_POST['short_desc']);
          $fullDesc=trim($_POST['full_desc']);
          $insertWorkSQL="INSERT INTO `work`(`img`, `date`, `title`, `short_desc`, `full_desc`) VALUES ('$photoName','$date','$title','$shortDesc','$fullDesc')";
          $controllerObj=new controller();
          $runInsert=$controllerObj->dataInsert($insertWorkSQL);
          if($runInsert==true){
              return true;
          }
          else{
              return false;
          }

      }
    public function WorkSelect(){
        $selectWorkSQL="SELECT * FROM `work`";
        $controllerObj=new controller();
        $runSelect=$controllerObj->dataSelect($selectWorkSQL);
        if ($runSelect==true){
            return $runSelect;
        }
        else{
            return false;
        }
    }
    public function workSelectForUpdate($ID){
        $workSelectUpdateSQL="SELECT * FROM `work` WHERE  `id`='$ID'";
        $controllerObj=new controller();
        $runWorkSelectUpdate=$controllerObj->dataSelect($workSelectUpdateSQL);
        if ($runWorkSelectUpdate==true){
            return $runWorkSelectUpdate;
        }
        else {
            return false;
        }
    }
    public function workUpdate($ID){
        $unique=date("Y-M-D-H-i-s");
        $photoName=$unique.$_FILES['photo']['name'];
        $tmpName=$_FILES['photo']['tmp_name'];
        move_uploaded_file($tmpName, "../img/$photoName");
        $date =trim($_POST['date']);
        $title=trim($_POST['title']);
        $short_des=trim($_POST['short_desc']);
        $full_des=trim($_POST['full_desc']);
        $workUpdateSQL="UPDATE `work` SET `img`='$photoName',`date`='$date',`title`='$title',`short_desc`='$short_des',`full_desc`='$full_des' WHERE `id`='$ID'";
        $controllerObj=new controller();
        $runUpdate=$controllerObj->dataUpdate($workUpdateSQL);
        if ($runUpdate==true){
            return true;
        }
        else{
            return false;
        }

    }
    public function workDelete($ID){
        $deleteSQL="DELETE FROM `work` WHERE `id`='$ID'";
        $controllerObjForWork=new controller();
        $runDelete=$controllerObjForWork->dataDelete($deleteSQL);
        if($runDelete==true){
            return true;
        }
        else{
            return false;
        }
    }
    public function workDetailsSelect($ID){
        $selectWorkSQL="SELECT * FROM `work` WHERE `id`='$ID'";
        $controllerObj=new controller();
        $runSelect=$controllerObj->dataSelect($selectWorkSQL);
        if ($runSelect==true){
            return $runSelect;
        }
        else{
            return false;
        }
    }
    public function workCommentInsert($workID){
        $name=$_POST['name'];
        $date=date("Y-m-d");
        $email=$_POST['email'];
        $message=$_POST['message'];
        $status="Pending";
        $commentInsertSQL="INSERT INTO `comment`(`work_id`, `name`, `date`, `email`, `comment`, `status`) VALUES ('$workID','$name','$date','$email','$message','$status')";
        $controllerObj=new controller();
        $runCommentInsert=$controllerObj->dataInsert($commentInsertSQL);
        if ($runCommentInsert==true){
            return true;
        }
        else{
            return false;
        }

    }
    public function workCommentSelect(){
        $selectSQL="SELECT * FROM `comment`";
        $controllerObj=new controller();
        $runSelect=$controllerObj->dataSelect($selectSQL);
        if($runSelect==true){
            return $runSelect;
        }
        else{
            return false;
        }
    }
    public function workCommentSelectForUser($workID){
            $accepted="Accepted";
            $selectSQL="SELECT * FROM `comment` WHERE `status`='$accepted' AND  `work_id`='$workID'";
            $controllerObj=new controller();
            $runSelect=$controllerObj->dataSelect($selectSQL);
            if($runSelect==true){
                return $runSelect;
            }
            else{
                return false;
            }
    }
    public function commentWorkSelectForUpdate($ID){
        $workCommentSelectUpdateSQL="SELECT * FROM `comment` WHERE `id`=$ID";
        $controllerObj=new controller();
        $runWorkCommentSelectUpdate=$controllerObj->dataSelect($workCommentSelectUpdateSQL);
        if($runWorkCommentSelectUpdate==true){
            return $runWorkCommentSelectUpdate;
        }
        else{
            return false;
        }
    }
    public function commentWorkUpdate($ID){
        $unique=date("Y-M-D-H-i-s");
        $name=$_POST['name'];
        $date=$_POST['date'];
        $email=$_POST['email'];
        $comment=$_POST['comment '];
        $status=$_POST['status'];
        $workCommentUpdateSQL="UPDATE `comment` SET `name`='$name',`date`='$date',`email`='$email',`comment`='$comment',`status`='$status' WHERE `id`='$ID'";
        $controllerObj=new controller();
        $runUpdateComment=$controllerObj->dataUpdate($workCommentUpdateSQL);
        if($runUpdateComment==true){
            return true;
        }
        else{
            return false;
        }


    }
    public function commentDelete($ID){
        $commentDeleteSQL="DELETE FROM `comment` WHERE `id`='$ID'";
        $controllerObjForComment=new controller();
        $runDeleteComment=$controllerObjForComment->dataDelete($commentDeleteSQL);
        if($runDeleteComment==true){
            return true;
        }
        else{
            return false;
        }

    }
    public function workcommentAccept($ID){
        $accept="Accepted";
        $updateSQL="UPDATE `comment` SET `status`='$accept' WHERE `id`='$ID'";
        $controllerObj=new controller();
        $runUpdate=$controllerObj->dataUpdate($updateSQL);
        if($runUpdate==true){
            return true;
        }
        else{
            return false;
        }

    }
    public function galleryInsert(){
        $unique=date("Y-M-H-i-s");
        $photoName=$unique.$_FILES['photo']['name'];
        $tmpName=$_FILES['photo']['tmp_name'];
        move_uploaded_file($tmpName,"../img/$photoName");
        $title=trim($_POST['title']);
        $sub_title=trim($_POST['sub_title']);
        $insertGallerySQL="INSERT INTO `gallery`(`img`, `title`, `sub_title`) VALUES ('$photoName','$title','$sub_title')";
        $controllerObj=new controller();
        $runInsert=$controllerObj->dataInsert($insertGallerySQL);
        if($runInsert==true){
            return true;
        }
        else{
            return false;
        }
    }

    public function gallerySelect(){
        $selectGallerySQL="SELECT * FROM `gallery`";
        $controllerObj=new controller();
        $runSelectForGallery=$controllerObj->dataSelect($selectGallerySQL);
        if($runSelectForGallery==true){
            return $runSelectForGallery;
        }
        else{
            return false;
        }
    }

    public function gallerySelectForUpdate($ID){
        $gallerySelectUpdateSQL="SELECT * FROM `gallery` WHERE `id`=$ID";
        $controllerObj=new controller();
        $runGallerySelectUpdate=$controllerObj->dataSelect($gallerySelectUpdateSQL);
        if($runGallerySelectUpdate==true){
            return $runGallerySelectUpdate;
        }
        else{
            return false;
        }
    }

    public function galleryUpdate($ID){
        $unique=date("Y-M-H-i-s");
        $photoName=$unique.$_FILES['photo']['name'];
        $tmpName=$_FILES['photo']['tmp_name'];
        move_uploaded_file($tmpName,"../img/$photoName");
        $title=trim($_POST['title']);
        $sub_title=trim($_POST['sub_title']);
        $galleryUpdateSQL="UPDATE `gallery` SET `img`='$photoName',`title`='$title',`sub_title`='$sub_title' WHERE `id`='$ID'";
        $controllerObj=new controller();
        $runUpdate=$controllerObj->dataUpdate($galleryUpdateSQL);
        if($runUpdate==true){
            return true;
        }
        else{
            return false;
        }
    }
    public function galleryDelete($ID){
        $deleteSQL="DELETE FROM `gallery` WHERE `id`='$ID'";
        $controllerObjForGallery=new controller();
        $runDelete=$controllerObjForGallery->dataDelete($deleteSQL);
        if($runDelete==true){
            return true;
        }
        else{
            return false;
        }
    }

    public function memberInsert(){
        $unique=date("Y-M-H-i-s");
        $photoName=$unique.$_FILES['photo']['name'];
        $tmpName=$_FILES['photo']['tmp_name'];
        move_uploaded_file($tmpName,"../img/$photoName");
        $h4_title=$_POST['h4_title'];
        $h5_title=$_POST['h5_title'];
        $insertMemberSQL="INSERT INTO `team-member`(`img`, `h4-title`, `h5-title`) VALUES ('$photoName','$h4_title','$h5_title')";
        $controllerObj=new controller();
        $runInsertMemberSQL=$controllerObj->dataInsert($insertMemberSQL);
        if($runInsertMemberSQL==true){
            return true;
        }
        return false;
    }
    public function memberSelect(){
        $selectMemberSQL="SELECT * FROM `team-member` LIMIT 4";
        $controllerObj=new controller();
        $runSelectForMember=$controllerObj->dataSelect($selectMemberSQL);
        if($runSelectForMember==true){
            return $runSelectForMember;
        }
        else{
            return false;
        }
    }
    public function memberSelectForViewMore(){
        $selectMemberSQL="SELECT * FROM `team-member`";
        $controllerObj=new controller();
        $runSelectForMember=$controllerObj->dataSelect($selectMemberSQL);
        if($runSelectForMember==true){
            return $runSelectForMember;
        }
        else{
            return false;
        }
    }
    public function memberSelectForUpdate($ID){
        $selectForUpdateSQL="SELECT * FROM `team-member` WHERE `id`='$ID'";
        $controllerObj=new controller();
        $runMemberSelectForUpdate=$controllerObj->dataSelect($selectForUpdateSQL);
        if($runMemberSelectForUpdate==true){
            return $runMemberSelectForUpdate;
        }
        else{
            return false;
        }
    }
    public function memberUpdate($ID){
        $unique=date("Y-M-H-i-s");
        $photoName=$unique.$_FILES['photo']['name'];
        $tmpName=$_FILES['photo']['tmp_name'];
        move_uploaded_file($tmpName,"../img/$photoName");
        $h4_title=$_POST['h4_title'];
        $h5_title=$_POST['h5_title'];
        $memberUpdateSQL="UPDATE `team-member` SET `img`='$photoName',`h4-title`='$h4_title',`h5-title`='$h5_title' WHERE `id`='$ID'";
        $controllerObjForMemberUpdate=new controller();
        $runUpdateMember=$controllerObjForMemberUpdate->dataUpdate($memberUpdateSQL);
        if($runUpdateMember==true){
            return true;
        }
        else{
            return false;
        }

    }

    public function memberDelete($ID){
        $deleteSQL="DELETE FROM `team-member` WHERE `id`='$ID'";
        $controllerObj=new controller();
        $runDeleteMember=$controllerObj->dataDelete($deleteSQL);
        if($runDeleteMember==true){
            return true;
        }
        else{
            return false;
        }
    }



}
?>