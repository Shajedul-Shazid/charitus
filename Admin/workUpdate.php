<?php
include 'up.php';
$ID=$_GET['id'];
$msg="<div class ='alert alert-primary' role ='alert'>Successfully Update !</div>";
$modelObjForWorkSelectUpdate=new model();
$resultWorkSelectUpdate=$modelObjForWorkSelectUpdate->workSelectForUpdate($ID);
$dataForWorkUpdate= $resultWorkSelectUpdate->fetch_assoc();

if(isset($_POST['updateWork'])){
    $modelObjForWorkUpdate=new model();
    $resultWorkUpdate= $modelObjForWorkUpdate-> workUpdate($ID);
    if ($resultWorkUpdate==true){
        header("location:work.php?msg=$msg");
    }
    else{
        echo "Failed ! Please Try Again";
    }
}

?>

    <div class="container">
        <h3>Update Work</h3>
        <div class="text-center">

            <img  style="height: 100px; width: 100px;" src="../img/<?php echo $dataForWorkUpdate['img'] ;?>" alt="Current Img">
        </div>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Image</label>
                        <input name="photo" class="form-control" type="file">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Date</label>
                        <input value="<?php echo $dataForWorkUpdate['date'] ;?>" name="date" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Title</label>
                        <input value="<?php echo $dataForWorkUpdate['title'] ;?>" name="title" class="form-control" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Short Des</label>
                        <textarea name="short_desc" class="form-control"> <?php echo $dataForWorkUpdate['short_desc'] ;?></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Full Des</label>
                        <textarea name="full_desc" class="form-control"><?php echo $dataForWorkUpdate['full_desc'];?></textarea>
                    </div>
                </div>
                <div class="col-md-4 pt-4">
                    <div class="form-group">
                        <input name="updateWork" value="Update"  class="form-control btn btn-success" type="submit">
                    </div>
                </div>
            </div>
        </form>
    </div>

    </div>
<?php include 'down.php';?>