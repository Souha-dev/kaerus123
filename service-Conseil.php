<?php
include 'init.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> KAERUS  </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favions/favicon.ico" style="width: 200%;"/> 
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon.ico"/>
     <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon.ico"/>
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Sonchoy HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/sonchoy-icon/style.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/nice-select/nice-select.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-yhlqRwlK3Xjkld6XEt1ZIoVkZfV6OwBQ5SLf33NtAqGP27b7qT/6dVdC07frA8IRFRjmofA9azP6HZb41IXb5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/sonchoy.css" />
    <link rel="stylesheet" href="assets/css/color-2.css" />
    <link rel="stylesheet" href="assets/css/sonchoy-responsive.css" />
    <style>
    .carousel-cell .current_True:hover {
        background-color: #e73f23;
         transition: background-color 1s ease; 
         transform: scale(1.2);/* Change background color on hover */
         
    }
    .blog-two__title a:hover {
             color:#e73f23;
    }
    .carousel-cell a:hover{
        color:white;
    }
    

    .carousel-cell:hover {
        background-color: #e73f23; /* Change background color on hover */
    }
   
</style>
</head>

<body>



<div class="preloader">
    <div class="preloader__image"></div>
</div>

<div class="page-wrapper">
    <?php
    // Include the header
    include 'header.php';
    ?>

    <section class="insurance2">
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/conseil11.jpg);height:160%;">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2><?php echo $translations['SERVICE_CONSEIL']; ?></h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
   <div class="row1">
            <div class="col-12-1">
                <div class="sub-section-nav--items-wrapper">
                    <div class="sub-section-nav--items" >
                        <div class="carousel-cell">
                            <a class="current_True" href="service-Conseil.php" title="conseil"><?php echo $translations['SERVICE_CONSEIL']; ?></a>
                        </div>
                        <div class="carousel-cell" style="background-color:#e73f23;">
                            <a class="current_True" href="service-audit.php" title="professionnels"><?php echo $translations['SERVICE_AUDIT']; ?></a>
                        </div>
                        <div class="carousel-cell">
                            <a class="current_True" href="service-impot-taxes.php" title="Audit"><?php echo $translations['SERVICE_IMPOT_TAXES']; ?></a>
                        </div>
                        <div class="carousel-cell">
                            <a class="current_True" href="service-Collaborations.php" title="Collaborations"><?php echo $translations['SERVICE_COLLABORATIONS']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="insurance-details">
            <div class="container">
                <div class="row" style="margin-bottom: 9%;">
                    <div class="col-xl-12 col-lg-12">
                        <div class="contact-page__left">
                            <img class="imagecolab" src="assets/images/gallery/conseil3.jpg" style="width: 427px; float: right; margin-left: 52px;" alt="">
                            <h3 style="margin-top: -108px; font-weight: 700;font-size: 20pt; text-align:justify; color: #e73f23;">
                                <?php echo $translations['SERVICE_CONSEIL']; ?>
                            </h3>

                            <p style="text-align:justify">
                                <?php echo $translations['CONSEIL_TEXT1']; ?>
                            </p>

                            <p style="text-align:justify" class="insurance-details__text-2">
                                <?php echo $translations['CONSEIL_TEXT2']; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="insurance-details__need-help" style="margin-left: 60px;margin-right: 60px;margin-top: -94px;">
                    <div class="insurance-details__need-help-bg"
                        style="background-image: url(assets/images/backgrounds/bgcomp4.jpg);">
                    </div>
                    <h3 class="insurance-details__need-help-title">
                        <?php echo $translations['REQUEST_SERVICE_TITLE']; ?>
                    </h3>
                    <div class="insurance-details__need-help-btn-box">
                        <a href="contact.php" class="insurance-details__need-help-btn thm-btn">
                            <?php echo $translations['CONTACT_US']; ?>
                        </a>
                    </div>
                </div>

                <div class="insurance-details__contact" style="margin-top: 15px; margin: 58px;">
                    <div class="insurance-details__contact-icon">
                        <span class="fa fa-envelope"></span>
                    </div>
                    <div class="insurance-details__contact-content">
                        <p><a class="contact" href="mailto:contact@kaerus.fr">
                            <i class="fac fac-envelope"></i>contact@kaerus.global</a></p>
                    </div>
                </div>
            </div>
        </section>

        <?php
        // Include the footer
        include 'footer.php';
        ?>
    </section>
</div>


    </div><!-- /.page-wrapper -->


  
      <?php 
   include 'SideBar.php';
   ?>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fas fa-arrow-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery.circle-type/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery.circle-type/jquery.lettering.min.js"></script>
    <script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="assets/vendors/marquee/marquee.min.js"></script>




    <!-- template js -->
    <script src="assets/js/sonchoy.js"></script>
</body>

</html>