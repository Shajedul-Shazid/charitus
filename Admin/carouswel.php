<?php
include 'up.php';
$msg="";
$msgInsertCar="";
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}

if (isset($_GET['msgInsertCar'])){
    $msgInsertCar=$_GET['msgInsertCar'];
}

if (isset($_POST['submitCarousel'])){
    $modelObjForCarouselInsert=new model();
    $resultCarouselInsert=$modelObjForCarouselInsert->carouselInsert();
    if ($resultCarouselInsert==true){
        header("location:carouswel.php?msgInsertCar=Successfully Inserted");
    }
    else{
        echo "Failed ! Please Try Again";
    }
}
$msgDelete="<div class='alert alert-danger' role='alert'>Successfully Deleted !</div>";
if(isset($_POST['delete'])){
    $deleteID=$_GET['id'];
    $modelObjForDelete=new model();
    $resultDelete=$modelObjForDelete->carouselDelete($deleteID);
    if($resultDelete==true){
        header("location:carouswel.php?msg=$msgDelete");
    }
    else{
        echo "Failed";
    }


}
?>

<div class="container">
    <h3 align="center">Add Carousel</h3>
    <?php echo $msgInsertCar;?>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <label>Choose Image</label>
                <div class="custom-file">
                    <input name="photo" type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Headline</label>
                    <input name="headline" class="form-control" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Details</label>
                    <textarea name="detailes" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input name="submitCarousel" value="SAVE" class="form-control btn btn-success" type="submit">
                </div>
            </div>
        </div>
    </form>

    <h3 align="center">All Carousel Information</h3>
    <h3 align="center"><?php echo $msg;?></h3>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Image</th>
            <th>Headline</th>
            <th>Details</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $modelObjForCarouselSelect=new model();
        $reseltSelect=$modelObjForCarouselSelect->carouselSelect();
        while ($dataCarosel=$reseltSelect->fetch_assoc()){
            ?>
            <tr>
                <td><img style="height: 100px; width: 100px;" src="../img/<?php echo $dataCarosel['img'];?>"></td>
                <td><?php echo $dataCarosel['headline'];?></td>
                <td><?php echo $dataCarosel['detailes'];?></td>
                <td><a class="btn btn-success" href="carouselUpdate.php?id=<?php echo $dataCarosel['id'];?>">Update</a></td>
                <td>
                    <form action="carouswel.php?id=<?php echo $dataCarosel['id'];?>" method="post">
                        <input  name="delete" class="btn btn-danger" value="Delete" type="submit">
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php include 'down.php';?>
