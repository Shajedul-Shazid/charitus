<?php include
"up.php";
$insertMsg="";
$msgForUpdate="";
$msgForDelete="";

if(isset($_GET['msgInsert'])){
    $insertMsg=$_GET['msgInsert'];
}
if(isset($_GET['msgForDelete'])){
    $msgForDelete=$_GET['msgForDelete'];
}

if(isset($_POST['member_submit'])){
    $modelObjForMemberInsert=new model();
    $resultMemberData=$modelObjForMemberInsert->memberInsert();
    if($resultMemberData==true){
        header("location:team_member.php?msgInsert=Member Data is Successfully Inserted");
    }
    else{
        echo "Failed! Please Try Again Later.";
    }
}
$Delete="<div class='alert alert-danger' role='alert'>Successfully Deleted !</div>";
if(isset($_POST['delete'])){
    $deleteID=$_GET['id'];
    $modelObjForDelete=new model();
    $resultDelete=$modelObjForDelete->memberDelete($deleteID);
    if($resultDelete==true){
        header("location:team_member.php?msgForDelete=$Delete");
    }
    else{

        echo "Failed! Please Try Again Later.";
    }


}



?>
<div class="container">
    <h3><center>Team-Member</center></h3>
    <?php echo $insertMsg;?>
    <?php echo $msgForUpdate;?>
    <?php echo $msgForDelete;?>
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
                    <input name="h4_title"  class="form-control" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">h5-Title</label>
                    <input name="h5_title" class="form-control" type="text">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input name="member_submit" class="form-control btn btn-success" value="SAVE" type="submit">
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
            <th>h4-Title</th>
            <th>h5_Title</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $modelObjForMemberDataInsert=new model();
        $resultSelectMemberData=$modelObjForMemberDataInsert->memberSelectForViewMore();
        while ($dataMember=$resultSelectMemberData->fetch_assoc()){
            ?>
            <tr>
                <td><img style="height: 50px; width: 50px;" src="../img/<?php echo $dataMember['img'];?>"></td>
                <td><?php echo $dataMember['h4-title'];?></td>
                <td><?php echo $dataMember['h5-title'];?></td>
                <td class="btn btn-success"><a href="member-update.php?id=<?php echo $dataMember['id'];?>">Update</a></td>
               <td>
                   <form action="team_member.php?id=<?php echo $dataMember['id'];?>" method="post">
                       <input name="delete" type="submit" class="btn btn-danger" value="Delete">
                   </form>

               </td>
            </tr>
        <?php  }?>
        </tbody>
    </table>

</div>




<?php  include "down.php" ?>
