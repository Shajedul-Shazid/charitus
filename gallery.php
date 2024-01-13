<?php include 'up.php';?>
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

<?php include 'down.php';?>