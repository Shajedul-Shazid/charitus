<?php
include 'up.php';
$ID=$_GET['id'];
$msg="<div class ='alert alert-primary' role ='alert'>Successfully Update !</div>";
$modelObjForCarouselSelectUpdate=new model();
$resultCarouselSelectUpdate=$modelObjForCarouselSelectUpdate->carouselSelectForUpdate($ID);
$dataForCarouselUpdate= $resultCarouselSelectUpdate->fetch_assoc();

if(isset($_POST['CarouselUpdate'])){
    $modelObjForCarouselUpdate=new model();
    $resultCarouselUpdate=$modelObjForCarouselUpdate->carouselUpdate($ID);
    if ($resultCarouselUpdate==true){
        header("location:carouswel.php?msg=$msg");
    }
    else{
        echo "Failed ! Please Try Again";
    }

}

?>
    <div class="container">
        <h3 align="center">Update Carousel</h3>
        <div class="text-center">

            <img  style="height: 100px; width: 100px;" src="../img/<?php echo $dataForCarouselUpdate['img'] ;?>" alt="Current Img">
        </div>

        <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <label>Choose Image</label>
                    <div class="custom-file">
                        <input name="photo" value="" type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Headline</label>
                        <input value="<?php echo  $dataForCarouselUpdate['headline'] ;?>" name="headline" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Details</label>
                        <textarea name="detailes" class="form-control"><?php echo  $dataForCarouselUpdate['detailes'] ;?></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input name="CarouselUpdate" value="UPDATE" class="form-control btn btn-success" type="submit">
                    </div>
                </div>
            </div>
        </form>

    </div>

<?php include 'down.php';?>