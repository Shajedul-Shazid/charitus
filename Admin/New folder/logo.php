<?php
include 'up.php';
$msgForLogo="";
if (isset($_GET['msgForLogo'])){
    $msgForLogo=$_GET['msgForLogo'];
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

<?php include 'down.php';?>
