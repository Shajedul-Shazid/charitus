<?php
$modelObjForFooter=new model();
$resultFooterInfo=$modelObjForFooter->footerInfoSelect();
$dataFooter=$resultFooterInfo->fetch_assoc();
?>
<footer style="margin-top: 25px" class="section footer-bg" id="ch-footer">
    <div class="container">
        <div class="row section-separator">
            <div class="footer-content wow fadeIn">
                <div class="col-md-4">
                    <div class="ch-widget ch-footer-info">
                        <img src="img/f-logo.png" alt="" class="img-responsive">
                        <div style="padding: 24px">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ch-widget ch-footer-contact">
                        <div class="widget-title">
                            <h4>Contact Us</h4>
                        </div>
                        <ul>
                            <li>
                                <i class="fa fa-home main-color"></i><span> <?php echo $dataFooter['address'];?></span>

                            </li>
                            <li>
                                <i class="fa fa-phone main-color"></i><span> <?php echo $dataFooter['phone_no'];?></span>
                            </li>
                            <li>
                                <i class="fa fa-envelope main-color"></i><span> <?php echo $dataFooter['email'];?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ch-widget">
                        <div class="widget-title">
                            <h4>Follow Us</h4>
                        </div>
                        <div>
                            <a target="_blank" style="color: #fff; font-size:25px" href="<?php echo $dataFooter['facebook'];?>"><i class="fab fa-facebook"></i></a>
                            <a target="_blank" style="color: #fff; margin: 20px; font-size:25px" href="<?php echo $dataFooter['twitter'];?>"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" style="color: #fff; margin-right: 20px; font-size:25px" href="<?php echo $dataFooter['youtube'];?>"><i class="fab fa-youtube"></i></a>
                            <a target="_blank" style="color: #fff; margin-right: 20px; font-size:25px" href="<?php echo $dataFooter['instragram'];?>"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/meanmenu.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="//npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script src="js/validator.min.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/init.js"></script>
<script src="js/style-switch.js"></script>
</body>
</html>