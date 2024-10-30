<?php include 'init.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> KAERUS  </title>
    <!-- favicons Icons -->
     <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favions/favic" style="width: 200%;"/> 
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon.ico"/>
     <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon.ico"/>
    
    <!-- <link rel="manifest" href="assets/images/favicons/site.webmanifest" /> -->
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
</head>

<body>



    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
  




    <div class="page-wrapper">
    <?php

    include 'header.php';
?>


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/membre5.jpg);height:183%;">
            </div>
            <div class="container">
                <div  class="page-header__inner">
                    <h2>  Membres</h2>

                 
                </div>
            </div>
        </section>
      
        <section class="insurance-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="insurance-details__left">
                            <h3 class="insurance-details__title-1" style="font-size:20px; margin-top: -98px"><?php echo $translations['join_our_global_network']?></h3>
                              
                            <p class="insurance-details__text-1" style="text-align: justify;"  >   <?php echo $translations['text_1']?>
</p>
 <p class="insurance-details__text-1" style="text-align: justify;"  ><?php echo $translations['text_2']?>
                            </p>
                            <div class="insurance-details__img-1">
                                <img src="assets/images/services/member2.jpg" alt="">
                            </div>
                            <h3 class="insurance-details__title-2"style="font-size:20px; text-align: justify;"><?php echo $translations['together_for_global_accounting']?></h3>
                            <p class="insurance-details__text-2" style="text-align: justify;"><?php echo $translations['text_3']?></p>
                            <div class="insurance-details__points-and-text-box">

                                <div class="insurance-details__points-box">
                                    <h3 class="insurance-details__points-title" style="font-size:20px; text-align: justify;"><?php echo $translations['reach_excellence']?></h3>
                                    <p class="insurance-details__text-2" style="text-align: justify;"><?php echo $translations['text_4']?></p>
                                </div>

                               
                              
                            </div>
                            <div class="insurance-details__faq">
                
                               
                            </div>
                            </div>
                            </div>
                                <div class="col-xl-4 col-lg-5">
                                    <div class="insurance-details__right">
                                    <img class="imagemembre" src="assets/images/services/member1.jpg" alt="" width="100%" style="margin-top: -65px;margin-bottom: 109px;width: 104%;" >
                            <div class="insurance-details__need-help" >
                                <div class="insurance-details__need-help-bg"
                                    style="background-image: url(assets/images/backgrounds/insurance-details-need-help-bg.jpg);">
                                </div>

                                        


                                <h3 class="insurance-details__need-help-title"><?php echo $translations['regoindre']?>
                                  
                                <div class="insurance-details__need-help-btn-box">
                                    <a href="contact.php" class="insurance-details__need-help-btn thm-btn"><?php echo $translations['contact_us']?>
                                   </a>
                                </div>
                            </div>
                            <div class="insurance-details__contact" style="margin-top:90px;">
                               <div class="insurance-details__contact-icon">
                                        <span class="fa fa-envelope"></span> <!-- Utilisation de l'icône d'email de FontAwesome -->
                                                </div>
                                <div class="insurance-details__contact-content">
                                   <p><a href="mailto:contact@kaerus.fr"><i class="fac fac-envelope"></i>contact@kaerus.global</a></p>
                                </div>
                            </div>

                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <?php
   
    include 'footer.php';
?>
      


    </div>
   
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