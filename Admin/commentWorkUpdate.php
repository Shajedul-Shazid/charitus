<?php
include "up.php";
$ID=$_GET['id'];
$modelObjForWorkSelectUpdate=new model();
$resultWorkCommentSelectUpdate=$modelObjForWorkSelectUpdate->commentWorkSelectForUpdate($ID);
$dataForWorkUpdate= $resultWorkCommentSelectUpdate->fetch_assoc();


?>
<div class="ch-comment-form col-xs-12">
    <div class="title">
        <h4>Leave Comment</h4>
</div>
    <div class="ch-comment-details">
        <div class="row">
            <form class="wow fadeIn col-xs-12" style="visibility: visible; animation-name: fadeIn;" method="POST" action="" >
                <div class="row">
                    <div class="h3 text-center hidden"></div>
                    <div class="form-group col-md-7">
                        <input type="text" value="<?php echo $dataForWorkUpdate['name'];?>" name="name" class="form-control"  required="">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="email" value="<?php echo $dataForWorkUpdate['email'];?>" name="email" class="form-control"  required="">
                    </div>
                    <div class="form-group col-xs-12">
                        <textarea name="message" class="form-control input-lg" rows="6">value="<?php echo $dataForWorkUpdate['email'];?>"</textarea>
                    </div>
                    <div class="btn-form col-xs-12">
                        <button name="submitComment" type="submit" class="btn btn-fill">Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "down.php"; ?>