<?php
include "up.php";
$ID="";
$ID=$_GET['id'];
$modelObjForGallerySelectUpdate=new model();
$resultGallerySelectUpdate=$modelObjForGallerySelectUpdate->gallerySelectForUpdate($ID);
$dataForGalleryUpdate=$resultGallerySelectUpdate->fetch_assoc();

if(isset($_POST['gallery_update'])){
    $modelObjForGalleryUpdate=new model();
    $resultGalleryUpdate=$modelObjForGalleryUpdate->galleryUpdate($ID);
    if($resultGalleryUpdate==true){
        header("location:gallery.php?msg=Update success");
    }
    else{
        echo" Failed! Please Try Again !";
    }
}

?>
<div class="container">
    <h3><center>Gallery Update Form</center></h3>
    <div class="text-center">

        <img  style="height: 100px; width: 100px;" src="../img/<?php echo $dataForGalleryUpdate['img'] ;?>" alt="Current Img">
    </div>
    <form method="post" action=""  enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Image</label>
                    <input name="photo" class="form-control" type="file">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Title</label>
                    <input value="<?php echo $dataForGalleryUpdate['title'];?>" name="title"  class="form-control" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Sub Title</label>
                    <input value="<?php echo $dataForGalleryUpdate['sub_title'];?>"  name="sub_title" class="form-control" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input name="gallery_update" class="form-control btn btn-success" value="Update" type="submit">
                </div>
            </div>

        </div>
    </form>
</div>


<?php include "down.php";?>
