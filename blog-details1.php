<?php 
include 'init.php';?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> KAERUS  </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icon/logo .png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/logo .png"  class="size" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/logo .png" class="sizenice" />
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
</head>

<body>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->




    <div class="page-wrapper">
       
    <?php
    // Inclusion de l'en-tête
    include 'header.php';
?>


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

     
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img-1">
                                <img src="assets/images/gallery/blog1.png" style="margin-top: 7%;" alt="">
                            </div>
                            <div class="blog-details__content">
                                <h3 class="blog-details__title-1" ><?php echo $translations['AI_IMPACT_TITLE']?></h3>
                             
                              
                                </p>
                                <p  style="font-style: italic; text-align: justify;color:black; "><?php echo $translations['AI_IMPACT_DESC_1']?>
</p>

                                <p  style="font-style: italic; text-align: justify;color:black; ">  <?php echo $translations['AI_IMPACT_DESC_2']?></p>
                                    
                                <p  style="font-style: italic; text-align: justify;color:black; "> <?php echo $translations['AI_IMPACT_DESC_3']?></p>
                                    
                                <p  style="font-style: italic; text-align: justify;color:black; "> <?php echo $translations['AI_IMPACT_DESC_4']?>p>
                                    
                                <p  style="font-style: italic; text-align: justify;color:black; "><?php echo $translations['AI_IMPACT_DESC_5']?></p>
                                    
                                <p  style="font-style: italic; text-align: justify;color:black; "> <?php echo $translations['AI_IMPACT_DESC_6']?></p>
                                    
                             

                            </div>
                          
                                
                       
                         
                        
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                          
                        <div class="sidebar__single sidebar__post" style="margin-top: 49px;">
                                <h3 class="sidebar__title"><?php echo $translations['recent_post']; ?></h3>
                                <ul class="sidebar__post-list list-unstyled">
                                     <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/gallery/blog1.png" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="blog-details1.php"><?php echo $translations['TITLE11']?></</</a>
                                                 <span class="sidebar__post-content-meta"><i class="icon-clock"></i><?php echo $translations['TITLE10']?></span>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/gallery/blog2.jpg" alt="">

                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="blog-details2.php"><?php echo $translations['TITLE14']?></</a>
                                                <span class="sidebar__post-content-meta"><i class="icon-clock"></i><?php echo $translations['TITLE13']?></</span>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/gallery/man-saving-money-energy-crisis.jpeg" alt="">
                                         
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="blog-details3.php"><?php echo $translations['TITLE20']?></a>
                                               <span class="sidebar__post-content-meta"><i class="icon-clock"></i><?php echo $translations['TITLE15']?></</span>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="insurance-details__catagories" style="margin-top: 35%;">
                                <h3 class="insurance-details__catagories-title"><?php echo $translations['services']?></h3>
                                <ul class="insurance-details__catagories-list list-unstyled">
                                    <li>
                                        <a href="service-Conseil.php.php"><?php echo $translations['SERVICE_CONSEIL']?><span class="icon-next"></span></a>
                                    </li>
                                    <li>
                                        <a href="service-audit.php"><?php echo $translations['SERVICE_AUDIT']?><span
                                                class="icon-next"></span></a>
                                    </li>
                                    <li>
                                        <a href="service-Impot-taxes.php"><?php echo $translations['SERVICE_IMPOT_TAXES']?><span class="icon-next"></span></a>
                                    </li>
                                     <li>
                                        <a href="service-Collaboration.php"><?php echo $translations['SERVICE_COLLABORATIONS']?><span class="icon-next"></span></a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <form id="contactForm" ref={form} onSubmit={sendEmail} action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
    <div class="content" style="margin-top: 40px;">
        <div class="container comment-form">
            <h3 class="comment-one__title"><?php echo $translations['contact_title']; ?></h3>
            <p><?php echo $translations['email_privacy']; ?></p>
            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="comment-form__input-box">
                            <input type="text" placeholder="<?php echo $translations['company_placeholder']; ?>" name="societe" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="comment-form__input-box">
                            <input type="text" placeholder="<?php echo $translations['name_placeholder']; ?>" name="nom" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="comment-form__input-box">
                            <input type="email" placeholder="<?php echo $translations['email_placeholder']; ?>" name="gmail" required>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="comment-form__input-box">
                            <input type="text" placeholder="<?php echo $translations['website_placeholder']; ?>" name="siteWeb">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="comment-form__input-box text-message-box">
                            <textarea name="message" placeholder="<?php echo $translations['message_placeholder']; ?>"></textarea>
                        </div>
                        <div class="comment-form__btn-box">
                            <button type="submit" style="margin-bottom: 20px;" class="thm-btn comment-form__btn"><?php echo $translations['send_message']; ?></button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="result"></div>
        </div>
    </div>
</form>

</div>
        <!--Blog Details End-->


        <!--Site Footer Start-->
        <?php
    // Inclusion du pied de page
    include 'footer.php';
?>
        <!--Site Footer End-->


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

                            <!-- <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title"   style="margin-top: 35%;">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">IT Technology</a>
                                    <a href="#">Software</a>
                                    <a href="#">Design</a>
                                    <a href="#">Service</a>
                                    <a href="#">Development</a>
                                    <a href="#">Digital</a>
                                    <a href="#">Cyber</a>
                                </div>
                            </div> -->