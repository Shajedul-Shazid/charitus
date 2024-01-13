<?php include 'up.php'?>

<?php
$modelObjForMemberDataInsert=new model();
$resultSelectMemberData=$modelObjForMemberDataInsert->memberSelectForViewMore();
while ($dataMember=$resultSelectMemberData->fetch_assoc()){
    ?>
    <div class="padding-b-50" class="each-volanteer">
        <div class="col-md-3 col-sm-6">
            <div style="padding-top: 20px" class="vl-thumb wow fadeInRight" data-wow-delay="0.3s">
                <img style="  border-radius:50%; height: 200px; width: 200px;" src="img/<?php echo $dataMember['img'];?>">
                <div class="vl-content center">
                    <h4><?php echo $dataMember['h4-title'];?></h4>
                    <h5><?php echo $dataMember['h5-title'];?></h5>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php  }?>
