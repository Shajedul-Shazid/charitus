<?php include
'up.php';
$msgAccept="";
if(isset($_GET['msgAcpt'])){
    $msgAccept=$_GET['msgAcpt'];
}
$msg="";
$msgForDeleteComment="<div class='alert alert-danger' role='alert'>Successfully Rejected !</div>";
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}

if(isset($_POST['accept'])){
    $getID=$_GET['id'];
    $modelObjForAccept=new model();
    $resultAccept=$modelObjForAccept->workcommentAccept($getID);
    if($resultAccept==true){
        header("location:commentWork.php?msgAcpt=Accepted");
    }
    else{
        echo "Failed! Please Try Again! ";
    }

}

if(isset($_POST['delete'])){
    $commentDeleteID=$_GET['id'];
    $modelObjForCommentDelete=new model();
    $resultDeleteComment=$modelObjForCommentDelete->commentDelete($commentDeleteID);
    if($resultDeleteComment==true){
        header("location:commentWork.php?msg=$msgForDeleteComment");
    }
    else{
        echo "Failed! Please Try Again !";
    }

}



?>

<div class="container">
    <h3>All Work Comment</h3>
    <?php echo $msgAccept;?>
    <?php echo $msg;?>
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Email</th>
                <th>Comment</th>
                <th>Status</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $modelObjForSelectWork=new model();
            $resultSelect=$modelObjForSelectWork->workCommentSelect();
            while ($dataWorkForComment=$resultSelect->fetch_assoc()){

            ?>
            <tr>
                <td><?php echo $dataWorkForComment['name'];?></td>
                <td><?php echo $dataWorkForComment['date'];?></td>
                <td><?php echo $dataWorkForComment['email'];?></td>
                <td><?php echo $dataWorkForComment['comment'];?></td>
                <td><?php echo $dataWorkForComment['status'];?></td>
                <td>
                    <form action="commentWork.php?id=<?php echo $dataWorkForComment['id'];?>" method="post">
                        <input onclick="return confirm('Do you Want to Accept')" name="accept" type="submit" value="Accept" class="btn btn-success">
                    </form>
                </td>
                <td>
                    <form action="commentWork.php?id=<?php echo $dataWorkForComment['id'];?>" method="post">
                        <input onclick="return confirm('Do you Want to Rejected')" type="submit" name="delete" class="btn btn-danger" value="Reject">
                    </form>
                </td>
            </tr>|

            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'down.php';?>
