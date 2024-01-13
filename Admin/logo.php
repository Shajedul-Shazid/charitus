<?php
include 'up.php';
$msgForLogo="";
$msgUpAddress="";
$msgUpPhone="";
$msgUpEmail="";
$upFacebook="";
$msgTwitter="";
$msgUPYoutube="";
$msgUpInstagram="";
if (isset($_GET['msgForLogo'])){
    $msgForLogo=$_GET['msgForLogo'];
}
if (isset($_GET['upAddress'])) {
    $msgUpAddress = $_GET['upAddress'];
}
    if(isset($_GET['upPhone'])){
        $msgUpPhone=$_GET['upPhone'];
    }

    if (isset($_GET['upEmail'])){
        $msgUpEmail=$_GET['upEmail'];
    }
    if(isset($_GET['upFacebook'])){
        $upFacebook=$_GET['upFacebook'];

    }

    if(isset($_GET['msgTwitter'])){
        $msgTwitter=$_GET['msgTwitter'];
    }
    if(isset($_GET['msgYoutube'])) {
        $msgUPYoutube = $_GET['msgYoutube'];
    }
    if(isset($_GET['msgUpInstaram'])) {
        $msgUpInstagram = $_GET['msgUpInstaram'];
    }

if (isset($_POST['updateLogo'])){
    $imgName=$_GET['img'];
    $modelObjForLogoUpdate=new model();
    $resultLogoUpdate=$modelObjForLogoUpdate->logoUpdate($imgName);
    if ($resultLogoUpdate==true){
        header("location:logo.php?msgForLogo=Logo Changed");
    }
    else{
        echo "Failed! Please Try Again";
    }
}
$modelObjForFooter=new model();
$resultFooterInfo=$modelObjForFooter->footerInfoSelect();
$dataFooter=$resultFooterInfo->fetch_assoc();

if (isset($_POST['addressUpdate'])){
    $modelObjForAddress=new model();
    $resultAddressUpdate=$modelObjForAddress->fotterAddressUpdate();
    if ($resultAddressUpdate==true){
        header("location:logo.php?upAddress=Address Changed");
    }
    else{
        echo "Failed ! Please Try Again";
    }
}

if(isset($_POST['phoneUpdate'])){
    $modelObjForphone=new model();
    $resultPhoneNumberUpdate=$modelObjForphone->fotterPhoneNumberUpdate();
    if($resultPhoneNumberUpdate==true){
        header("location:logo.php?upPhone=Phone Number Changed");
    }

    else{
        echo "Failed! Please Try Again";
    }

}
if(isset($_POST['emailUpdate'])){
    $modelObjForPhone=new model();
    $resultEmailUpdate=$modelObjForPhone->footerEmailUpdate();
    if($resultEmailUpdate==true){
        header("location:logo.php?upEmail=Email Changed");
    }

    else{
        echo "Failed ! Please Try Again.";
    }
}

if(isset($_POST['facebookUpdate'])){
    $modelObjForFacebook=new model();
    $resultFacebookUpdate=$modelObjForFacebook->footerFacebookUpdate();
    if($resultFacebookUpdate==true){
        header("location:logo.php?upFacebook=Facebook Changed");
    }
    else{
        echo "Failed ! Please Try Again";
    }
}
if(isset($_POST['twitterUpdate'])){
    $modelObjForTwitter=new model();
    $runTwitterUpdate=$modelObjForTwitter->footerTwitterUpdate();
    if($runTwitterUpdate==true){
        header("location:logo.php?msgTwitter=Twitter Changed");
    }
    else{
        echo "Failed ! Try Again Later.";
    }
}
if(isset($_POST['youtubeUpdate'])){
    $modelObjForYoutube=new model();
    $runYoutubeUpdat=$modelObjForYoutube->footerYoutubeUpdate();
    if($runYoutubeUpdat==true){
        header("location:logo.php?msgYoutube=Youtube Changed");
    }
    else{
        echo "Failed ! Please Try Again.";
    }
}
if(isset($_POST['instagramUpdate'])){
    $modelObjForInstagram=new model();
    $runUpdateInstagram=$modelObjForInstagram->footerInstagramUpdate();
    if($runUpdateInstagram==true){
        header("location:logo.php?msgUpInstaram=Instagram Changed");
    }
    else{
        echo "Failed! Please Try Again.";
    }
}
?>

<div class="container">
    <form method="POST" action="logo.php?img=<?php echo $logo['name'];?>" enctype="multipart/form-data">
        <div class="row">
            <?php echo $msgForLogo;?>
            <div class="col-md-6">
                <img src="../img/<?php echo $logo['name'];?>">
                <div class="form-group">
                    <input name="photo" class="" type="file">
                </div>
            </div>
            <div class="col-md-6 pt-4">
                <div class="form-group">
                    <input name="updateLogo" value="Change" class="form-control btn btn-success" type="submit">
                </div>
            </div>
        </div>
    </form>
</div>

    <div class="container p-4">
        <div class="">
            <h3 align="center">Footer Information:</h3>
            <h4 align="center"><?php echo $msgUpAddress;?></h4>
            <h4 align="center"><?php echo $msgUpPhone;?></h4>
            <h4 align="center"><?php echo $msgUpEmail;?></h4>
            <h4 align="center"><?php echo $upFacebook;?></h4>
            <h4 align="center"><?php echo $msgTwitter;?></h4>
            <h4 align="center"><?php echo $msgUPYoutube;?></h4>
            <h4 align="center"><?php echo $msgUpInstagram;?></h4>

            <form method="POST" action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" value="<?php echo $dataFooter['address'];?>" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class="form-group">
                            <input name="addressUpdate" value="Change" class="form-control btn btn-success" type="submit">
                        </div>
                    </div>
                </div>
            </form>
            <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone No</label>
                            <input name="phone" value="<?php echo $dataFooter['phone_no'];?>" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class="form-group">
                            <input name="phoneUpdate" value="Change" class="form-control btn btn-success" type="submit">
                        </div>
                    </div>
                </div>
            </form>

            <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" value="<?php echo $dataFooter['email'];?>" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class="form-group">
                            <input name="emailUpdate" value="Change" class="form-control btn btn-success" type="submit">
                        </div>
                    </div>
                </div>
            </form>

            <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input name="facebook " value="<?php echo $dataFooter['facebook'];?>" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class="form-group">
                            <input name="facebookUpdate" value="Change" class="form-control btn btn-success" type="submit">
                        </div>
                    </div>
                </div>
            </form>

            <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Twitter</label>
                            <input name="twitter" value="<?php echo $dataFooter['twitter'];?>" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class="form-group">
                            <input name="twitterUpdate" value="Change" class="form-control btn btn-success" type="submit">
                        </div>
                    </div>
                </div>
            </form>

            <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Youtube</label>
                            <input name="youtube" value="<?php echo $dataFooter['youtube'];?>" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class="form-group">
                            <input name="youtubeUpdate" value="Change" class="form-control btn btn-success" type="submit">
                        </div>
                    </div>
                </div>
            </form>

            <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Instragram</label>
                            <input value="<?php echo $dataFooter['instagram'];?>" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        <div class="form-group">
                            <input name="instagramUpdate" value="Change" class="form-control btn btn-success" type="submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


<?php include 'down.php';?>
