<?php include 'up.php';?>
    <section class="section ch-event event-grid" id="ch-events">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title wow fadeIn" data-wow-delay="0.2s">
                    <h2>Our <span>Work</span></h2>
                    <p>Sed diam metus facilisis eu. Sit amet pulvinar dictum quam odio lorem</p>
                </div>
                <div class="each-events my-carousel" id="my-carousel">
                    <?php
                    $modelObjForSelectWork=new model();
                    $resultSelect=$modelObjForSelectWork->WorkSelect();
                    while ($dataWork=$resultSelect->fetch_assoc()){

                        ?>

                        <div class="item">
                            <div class="event-inner">
                                <div class="event-banner">
                                    <img style="height: 250px" src="img/<?php echo $dataWork['img'];?>" alt="" class="img-responsive">
                                    <span class="date"><?php echo $dataWork['date'];?></span>
                                </div>
                                <div class="event-content">
                                    <h4><?php echo $dataWork['title'];?></h4>
                                    <p><?php echo $dataWork['short_desc'];?></p>
                                    <a href="read.php?id=<?php echo $dataWork['id'];?>" class="btn btn-border"> Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php include 'down.php';?>