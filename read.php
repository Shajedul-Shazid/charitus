<?php
include 'up.php';
$cMSG="";
$getID=$_GET['id'];
$modelObjForWorkDetails=new model();
$resultSeletcWork=$modelObjForWorkDetails->workDetailsSelect($getID);
$dataWork=$resultSeletcWork->fetch_assoc();

$commentInsertMsg="Your comment has been posted! Please wait for review";

if (isset($_GET['commentMsg'])){
    $cMSG=$_GET['commentMsg'];
}

if (isset($_POST['submitComment'])){
    $modelObjForInsertComment=new model();
    $resultCommentInsert=$modelObjForInsertComment->workCommentInsert($getID);
    if ($resultCommentInsert==true){
        header("location:read.php?id=$getID&commentMsg=$commentInsertMsg");
    }
    else{
        echo "Failed ! Please Try Again";
    }
}
$modelObjForSelectComment=new model();
$getID=$_GET['id'];
$resultSelectComment=$modelObjForSelectComment->workCommentSelectForUser($getID);
$count=$resultSelectComment->num_rows;

?>
<section class="section ch-blog">
    <div class="container">
        <div class="row section-separator">
            <div class="each-blog col-md-8 col-md-offset-2">
                <div class="blog-details-content shadow-1 overflow">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="blog-inner item margin-top-o">
                                <div class="blog-banner">
                                    <img src="img/<?php echo $dataWork['img'];?>" alt="" class="img-responsive">
                                    <span class="date"><?php echo $dataWork['date'];?></span>
                                </div>
                                <div class="blog-content">
                                    <h4><?php echo $dataWork['title'];?></h4>
                                    <p><?php echo $dataWork['full_desc'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr width="80%">
                    <div class="ch-comment col-xs-12">
                        <div class="title">
                            <h4><?php echo $count;?> Comments</h4>
                        </div>
                        <div class="ch-comment-details">
                            <div class="row">
                                <?php
                                if($count > 0){
                                    while($dataComment=$resultSelectComment->fetch_assoc()){
                                        ?>


                                        <div class="comment">
                                            <div class="col-sm-3 col-xs-3">
                                                <img src="img/human.jpg" alt="" class="img-responsive">
                                            </div>
                                            <div class="col-sm-9 col-xs-9">
                                                <h5><?php echo $dataComment['name'];?><span><?php echo $dataComment['date'];?></span></h5>
                                                <p><?php echo $dataComment['comment'];?></p>

                                            </div>
                                        </div>


                              <?php }  }

                                else{
                                    echo "No Comments";
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="ch-comment-form col-xs-12">
                        <div class="title">
                            <h4>Leave Comment</h4>
                            <p style="color: green;"><?php echo $cMSG;?></p>
                        </div>
                        <div class="ch-comment-details">
                            <div class="row">
                                <form class="wow fadeIn col-xs-12" style="visibility: visible; animation-name: fadeIn;" method="POST" action="" >
                                    <div class="row">
                                        <div class="h3 text-center hidden"></div>
                                        <div class="form-group col-md-7">
                                            <input type="text" name="name" class="form-control" placeholder="Name*" required="">
                                        </div>
                                        <div class="form-group col-md-5">
                                            <input type="email" name="email" class="form-control" placeholder="Email*" required="">
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <textarea name="message" class="form-control input-lg" rows="6" placeholder="Message*"></textarea>
                                        </div>
                                        <div class="btn-form col-xs-12">
                                            <button name="submitComment" type="submit" class="btn btn-fill">Post</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'down.php';?>

