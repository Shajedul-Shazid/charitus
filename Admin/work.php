<?php
include "up.php";
$msg="";
$insertMsg="";
if(isset($_GET['insertMsg'])) {
    $insertMsg = $_GET['insertMsg'];
}
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}

if(isset($_POST['submitwork'])){
    $modelObjForInsertWork=new model();
    $resultWorkInsert=$modelObjForInsertWork->workInsert();
    if($resultWorkInsert==true){
        header("location:work.php?insertMsg=Work Inserted Successfully");
    }
    else{
        echo "Failed ! Please Try Again!";
    }
}
$msgForDelete="<div class='alert alert-danger' role='alert'>Successfully Deleted !</div>";
if(isset($_POST['delete'])){
    $deleteID=$_GET['id'];
    $modelObjForDelete=new model();
    $resultDelete=$modelObjForDelete->workDelete($deleteID);
    if($resultDelete==true){
        header("location:work.php?msg=$msgForDelete");
    }
    else{
        echo "Failed ! Please Try Again.";
    }

}


?>
<div class="container">
    <h3>Add Work</h3>
    <?php echo $insertMsg;?>
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
                    <label for="">Date</label>
                    <input name="date" class="form-control" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Title</label>
                    <input name="title" class="form-control" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Short Desc</label>
                    <textarea name="short_desc" class="form-control" type="file"></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Full Desc</label>
                    <textarea name="full_desc" class="form-control" type="file"></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input name="submitwork" class="form-control btn btn-success" value="SAVE" type="submit">
                </div>
            </div>

        </div>
    </form>
</div>

<div class="container">
    <?php echo $msg;?>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Image</th>
            <th>Date</th>
            <th>Title</th>
            <th>short Description</th>
            <th>Full Description</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $modelObjForSelectWork=new model();
        $resultSelect=$modelObjForSelectWork->WorkSelect();
        while ($dataWork=$resultSelect->fetch_assoc()){

        ?>

            <tr>
                <td><img style="height: 50px; width: 50px;" src="../img/<?php echo $dataWork['img'];?>"></td>
                <td><?php echo $dataWork['date'];?></td>
                <td><?php echo $dataWork['title'];?></td>
                <td><?php echo $dataWork['short_desc'];?></td>
                <td><?php echo $dataWork['full_desc'];?></td>
                <td><a class="btn btn-success" href="workUpdate.php?id=<?php echo $dataWork['id'];?>">Update</a></td>
                <td>
                <form action="work.php?id=<?php echo $dataWork['id'];?>" method="post">
                    <input name="delete" type="submit" class="btn btn-danger" value="Delete">
                </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>







<?php include "down.php"?>
