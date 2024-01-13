<?php include 'up.php';?>

        <section class="header-slider header-slider-preloader" id="header-slider">
            <!-- Carousel -->
            <div class="animation-slides owl-carousel owl-theme" id="animation-slide">
                <?php
                $modelObjForSelectCarousel=new model();
                $reseltSelect=$modelObjForSelectCarousel->carouselSelect();
                while ($dataCarosel=$reseltSelect->fetch_assoc()){
                ?>
                <div style="background-image:url(img/<?php echo $dataCarosel['img'];?>)" class="item">
                    <div class="slide-table">
                        <div class="slide-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="slide-text">
                                           <h1><?php echo $dataCarosel['headline'];?></h1>
                                               <p><?php echo $dataCarosel['detailes'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
            <!-- Carousel End -->
            <div class="slider_preloader">
                <div class="slider_preloader_status">&nbsp;</div>
            </div>
        </section>
        <section class="section ch-mission" id="ch-mission">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title wow fadeIn" data-wow-delay="0.2s">
                        <h2>Our <span>Mission</span></h2>
                        <p>Sed cursus elementum arcu vitae mollis. Curabitur vehicula egestas libero.</p>
                    </div>
                    <div class="ch-mission-content">
                        <div class="col-md-4 col-sm-6 wow fadeInRight mission-item" data-wow-delay="0.2s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon ">
                                    <i class="fa fa-book main-color"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Charity for education</h4>
                                    <p>Phasellus et diam nec massa lobortis 
                                    venenatis nullam varius.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight mission-item" data-wow-delay="0.4s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon">
                                    <i class="fas fa-apple-alt fa-3x main-color"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Feed for hungry child</h4>
                                    <p>Phasellus et diam nec massa lobortis 
                                    venenatis nullam varius.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight mission-item" data-wow-delay="0.6s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon">
                                    <i class="fas fa-home fa-3x main-color"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Home for the homeless</h4>
                                    <p>Phasellus et diam nec massa lobortis 
                                    venenatis nullam varius.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight mission-item" data-wow-delay="0.3s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon">
                                    <i class="fas fa-tint fa-3x main-color"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Clean water for people</h4>
                                    <p>Phasellus et diam nec massa lobortis 
                                    venenatis nullam varius.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight mission-item" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon">
                                    <i class="fas fa-sun fa-3x main-color"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Charity for entertain</h4>
                                    <p>Phasellus et diam nec massa lobortis 
                                    venenatis nullam varius.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight mission-item" data-wow-delay="0.8s">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 icon">
                                    <i class="fas fa-heart fa-3x main-color"></i>
                                </div>
                                <div class="col-md-9 col-sm-9 padding-left-o">
                                    <h4 class="margin-top-o">Heart to heart event</h4>
                                    <p>Phasellus et diam nec massa lobortis 
                                    venenatis nullam varius.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section ch-gallery" id="ch-gallery">
            <div class="container-fluid">
                <div class="row section-separator">
                    <div class="section-title wow fadeIn" data-wow-delay="0.2s">
                        <h2>Our <span>Gallery</span></h2>
                        <p>Sed diam metus, facilisis eu diam sit amet pulvinar dictum quam odio lorem</p>
                    </div>
                    <div class="part-1">
                        <div class="project-loader-backButton">
                            <div class="col-xs-12 grid-paddng">
                                <div class="row">
                                <div class="ch-grid project-gallery wow fadeIn" id="project-gallery" data-wow-delay="0.2s">
                                    <?php
                                    $modelObjForGallery=new model();
                                    $resultSelectGallery=$modelObjForGallery->gallerySelect();
                                    while ($dataGallery=$resultSelectGallery->fetch_assoc()){
                                    ?>
                                    <div class="ch-grid-item col-md-3 col-sm-6">

                                        <figure>
                                            <img style="height: 400px; width: 400px"  src="img/<?php echo $dataGallery['img'];?>">
                                            <figcaption>
                                                <h4 class="title"><?php echo $dataGallery['title'];?></h4>
                                                <p class="sub-title"><?php echo $dataGallery['sub_title'];?></p>
                                                <a href="img/<?php echo $dataGallery['img'];?>" class="view-project-detail single_image"></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <?php   } ?>
                                </div> 
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
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
        <section class="section ch-testimonial" id="ch-testimonial">
            <div class="container-half container-half-left cover-bg" style="background-image: url(img/ch-testimonial.jpg);"></div>
            <div class="container-half container-half-right main-color-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4 client-quates">
                        <div class="section-title">
                            <h2>About Founder</h2>
                            <span> Get a head-start with one of the included page 
                            demos or start experimenting.</span>
                        </div>
                        <div class="ch-client-testimonial">
                            <div class="slider-content  wow ">
                                <div class="carousel xt-carousel-fade slide" data-ride="carousel" id="quote-carousel">
                                    <div class="carousel-inner text-center" style="margin-top: -20px">
                                        
                                        <div class="item active">
                                            <blockquote>
                                                <div class="row">
                                                    <div class="">
                                                        <p>If you find something that isn’t working right feel free to leave a comment or post on 
                                                        the issues tracker. If you have any interesting </p>
                                                        
                                                        <h3>Sam Andro<span>Manager</span></h3>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section class="section ch-volanteer pb-3" id="ch-volanteer">
    <div class="container">
        <div class="row section-separator">
            <div class="section-title wow fadeIn" data-wow-delay="0.1s">
                <h2>Team <span>Member</span></h2>
                <p>Sed diam metus, facilisis eu diam sit amet pulvinar dictum quam odio lorem</p>
            </div>
            <?php
            $modelObjForMemberDataInsert=new model();
            $resultSelectMemberData=$modelObjForMemberDataInsert->memberSelect();
            while ($dataMember=$resultSelectMemberData->fetch_assoc()){
            ?>
            <div class="each-volanteer">
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
            </div>
        <div class="row">
            <div class="text-center col">
                <a href="viewMore.php" class="btn btn-success">View More</a>
            </div>
        </div>


        </div>
</section>




<?php include 'down.php';?>

