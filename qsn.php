<?php
include 'init.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $translations['PAGE_TITLE']; ?></title>
    <!-- favicons Icons -->
      <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favions/favicon.ico" style="width: 200%;"/> 
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon.ico"/>
     <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon.ico"/>
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Sonchoy HTML 5 Template " />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&display=swap" rel="stylesheet">
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
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+CU:wght@100..400&display=swap" rel="stylesheet">
    <style>
     
    </style>
</head>

<body>
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
        <?php include 'header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/quisommenous.jpg); height: 136%; ">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2><?php echo $translations['HEADER_TITLE3']; ?></h2>
                </div>
            </div>
        </section>

        <section class="contact-page">
            <div class="container">
                <div class="row" style="margin-bottom: 9%;">
                    <div class="col-xl-12 col-lg-12">
                        <div class="contact-page__left">
                            <img class="imagekARUS" src="assets/images/backgrounds/image001.png" style="width: 280px; float: right; margin-left: 50px" alt="">
                            <p style="text-align: justify; margin: 38px 0; color: #e73f23; font-weight: 900; font-size: 20pt"><?php echo $translations['INTRO_TEXT']; ?></p>
                            <p style="font-style: italic; text-align: justify;"><?php echo $translations['PRESIDENT_MESSAGE']; ?></p>
                            <p style="font-style: italic; text-align: justify;"><?php echo $translations['DESCRIPTION1']; ?></p>
                            <p style="font-style: italic; text-align: justify;"><?php echo $translations['DESCRIPTION2']; ?></p>
                            <p style="font-style: italic; text-align: justify;"><?php echo $translations['DESCRIPTION3']; ?></p>
                            <p style="font-style: italic; text-align: justify;"><?php echo $translations['DESCRIPTION4']; ?></p>
                            <p style="font-style: italic; text-align: justify;margin-bottom: -7%;"><?php echo $translations['DESCRIPTION5']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-two">
            <div class="signature col-xl-12" >
                <div class="about-two__right">
                    <img src="assets/images/backgrounds/signature3.png" alt="">
                    <p class="pre"><?php echo $translations['FOOTER_SIGNATURE']; ?></p>
                    <p class="pre"><?php echo $translations['FOOTER_POSITION']; ?></p>
                </div>
            </div>
        </section>

   


    </div>
     <?php include 'footer.php'; ?>








     
 
      <?php 
   include 'SideBar.php';
   ?>

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