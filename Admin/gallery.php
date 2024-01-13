<?php
include "up.php";
$msgInsert="";
$msg="";
if(isset($_GET['msgInsertForGallery'])){
    $msgInsert=$_GET['msgInsertForGallery'];
}
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}
if(isset($_POST['gallery_submit'])){
    $modelObjForGallery=new model();
    $resultGalleryInsert=$modelObjForGallery->galleryInsert();
    if($resultGalleryInsert==true){
        header("location:gallery.php?msgInsertForGallery=Gallery Inserted Successfully");
    }
   else{
       echo"Failed! Please Try Again !";
   }
}
$msgForDelete="<div class='alert alert-danger' role='alert'>Successfully Deleted !</div>";
if(isset($_POST['delete'])){
    $deleteID=$_GET['id'];
    $modelObjForDelete=new model();
    $resultDelete=$modelObjForDelete->galleryDelete($deleteID);
    if($resultDelete==true){
        header("location:gallery.php?msg=$msgForDelete");
    }
    else{
        echo "Failed ! Please Try Again.";
    }

}
?>

<div class="container">
    <h3><center>Our Gallery</center></h3>
    <?php echo $msgInsert;?>
    <?php echo $msg; ?>
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
                    <input name="title"  class="form-control" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Sub Title</label>
                    <input name="sub_title" class="form-control" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input name="gallery_submit" class="form-control btn btn-success" value="SAVE" type="submit">
                </div>
            </div>

        </div>
    </form>
</div>
<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Sub_Title</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
           <?php
               $modelObjForGallery=new model();
           $resultSelectGallery=$modelObjForGallery->gallerySelect();
           while ($dataGallery=$resultSelectGallery->fetch_assoc()){
           ?>
            <tr>
                <td><img style="height: 50px; width: 50px;" src="../img/<?php echo $dataGallery['img'];?>"></td>
                <td><?php echo $dataGallery['title'];?></td>
                <td><?php echo $dataGallery['sub_title'];?></td>
                <td class="btn btn-success"><a href="gallery_update.php?id=<?php echo $dataGallery['id'];?>">Update</a></td>
                <td>
                    <form action="gallery.php?id=<?php echo $dataGallery['id'];?>" method="post">
                        <input name="delete" type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>

        <?php   } ?>
        </tbody>
    </table>

</div>


<?php include "down.php";?>
