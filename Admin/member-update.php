<?php include
"up.php";
$ID=$_GET['id'];
$modelObjForMemberUpdate=new model();
$resultMemberUpdate=$modelObjForMemberUpdate->memberSelectForUpdate($ID);
$dataForMemberUpdate=$resultMemberUpdate->fetch_assoc();

if(isset($_GET['msgForUpdate'])){
    $msgForUpdate=$_GET['msgForUpdate'];
}

if(isset($_POST['update_submit'])){
    $modelObjForMember=new model();
    $resultMemberData=$modelObjForMember->memberUpdate($ID);
    if($resultMemberData==true){
        header("location:team_member.php?msgForUpdate=Data is Successfully Updated");
    }
    else{
        echo "Failed! Please Try Again Later";
    }

}



?>

<div class="container">
    <h3><center>Team-Member  Update Form</center></h3>
    <div class="text-center">

        <img  style="height: 100px; width: 100px;" src="../img/<?php echo $dataForMemberUpdate['img'] ;?>" alt="Current Img">
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
                    <label for="">h4-Title</label>
                    <input name="h4_title" value="<?php echo $dataForMemberUpdate['h4-title'];?>"  class="form-control" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">h5-Title</label>
                    <input name="h5_title" value="<?php echo $dataForMemberUpdate['h5-title'];?>" class="form-control" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input name="update_submit" class="form-control btn btn-success" value="UPDATE" type="submit">
                </div>
            </div>

        </div>
    </form>
</div>



<?php include "down.php";?>
