<?php
include 'init.php';  // Inclure le fichier qui contient la gestion des langues
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



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
         
       
    </style>
</head>

<body>



    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    




    <div class="page-wrapper">
<?php

include 'header.php'; 
?>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div>
        </div>
      <section class="main-slider-two ">
    <div class="main-slider-two__carousel owl-carousel owl-theme thm-owl__carousel"
        data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
            "margin": 0,  "nav": false,  "animateOut": "fadeOut","active": true, "smartSpeed": 950, "autoplay": true, "autoplayTimeout": 7000,
            "autoplayHoverPause": false}'>
        
        <div class="item main-slider-two__slide-2">
            <div class="main-slider-two__shape-1 float-bob-y">
                <img src="assets/images/shapes/image16.png" alt="">
            </div>
            <div class="main-slider-two__shape-2 float-bob-y">
                <img src="assets/images/shapes/image15.png" alt="">
            </div>
            <div class="main-slider-two__bg" style="background-image: url(assets/images/backgrounds/background70.jpg);">
            </div>
            <div class="container">
                <div class="main-slider-two__content">
                    <div class="main-slider-two__content-top">
                        <div class="section-title text-left">
                            <h2 class="section-title__title__a">
                                <?php echo $translations['slider1_title']; ?>
                            </h2>
                        </div>
                        <a href="qsn.php" class="main-slider-two__btn thm-btn" style="background-color: #e73f23; margin-top:100px;">
                            <?php echo $translations['discover_more']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="item main-slider-two__slide-2">
            <div class="main-slider-two__shape-1 float-bob-y">
                <img src="assets/images/shapes/image16.png" alt="">
            </div>
            <div class="main-slider-two__shape-2 float-bob-y">
                <img src="assets/images/shapes/image15.png" alt="">
            </div>
            <div class="main-slider-two__bg" style="background-image: url(assets/images/backgrounds/background1t.png);">
            </div>
            <div class="container">
                <div class="main-slider-two__content">
                    <div class="main-slider-two__content-top">
                        <div class="section-title text-left">
                            <h2 class="section-title__title__a">
                                <?php echo $translations['slider2_title']; ?>
                            </h2>
                        </div>
                        <a href="qsn.php" class="main-slider-two__btn thm-btn" style="background-color: #e73f23; margin-top:100px;">
                            <?php echo $translations['discover_more']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item main-slider-two__slide-2">
    <div class="main-slider-two__shape-1 float-bob-y">
        <img src="assets/images/shapes/image16.png" alt="">
    </div>
    <div class="main-slider-two__shape-2 float-bob-y">
        <img src="assets/images/shapes/image15.png" alt="">
    </div>
    <div class="main-slider-two__bg" style="background-image: url(assets/images/backgrounds/bg3.png);">
    </div>
    <div class="container">
        <div class="main-slider-two__content">
            <div class="main-slider-two__content-top">
                <div class="section-title text-left">
                    <h2 class="section-title__title__a">
                        <?php echo $translations['slider3_title']; ?>
                    </h2>
                </div>
                <a href="qsn.php" class=" buton main-slider-two__btn thm-btn" style="background-color: #e73f23;">
                    <?php echo $translations['discover_more']; ?>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="item main-slider-two__slide-2">
    <div class="main-slider-two__shape-1 float-bob-y">
        <img src="assets/images/shapes/image16.png" alt="">
    </div>
    <div class="main-slider-two__shape-2 float-bob-y">
        <img src="assets/images/shapes/image15.png" alt="">
    </div>
    <div class="main-slider-two__bg" style="background-image: url(assets/images/backgrounds/bg2.png);">
    </div>
    <div class="container">
        <div class="main-slider-two__content">
            <div class="main-slider-two__content-top">
                <div class="section-title text-left">
                    <h2 class="section-title__title__a">
                        <?php echo $translations['slider4_title']; ?>
                    </h2>
                </div>
                <a href="qsn.php" class="main-slider-two__btn thm-btn" style="background-color: #e73f23; margin-top:100px;">
                    <?php echo $translations['discover_more']; ?>
                </a>
            </div>
        </div>
    </div>
</div>


        <!-- Repeat similar blocks for slider3 and slider4 -->
    </div>
</section>

     



        
        <section class="about-two" style="
    margin-top: -3%;
    margin-bottom: -10%;
">
          
            <div class="container">
                <div class="row">

                    <div class="col-xl-5">
                        <div class="about-two__left">
                            <div class="about-two__img-box  wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-two__img">
                                    <img src="assets/images/backgrounds/image3.jpg" style="width: px;" alt="">
                                </div>
                                <div class="about-two__img-2">
                                    <img  src="assets/images/backgrounds/65819.png" style="width: 300px; height: 200px; margin-bottom:80px" alt="">
                                </div>
                              
                                <div class="about-two__shape-1"></div>
                                 <div class="about-two__shape-2 float-bob-x">
                                    <img src="assets/images/shapes/about-two-shape-2.png" alt="">
                                </div> 
                            </div>
                        </div>
                    </div>


                     <div class="col-xl-7">
                        <div class="about-two__right" >
                             <div class="section-title__tagline-box" >
                             
                                <p class="section-title__tagline"   ><?php echo $translations['SUPPORT_TITLE']; ?></p>

                            </div>

                            <p class="about-two_text"> <?php echo $translations['SUPPORT_TEXT']; ?></p>

                            <div class="section-title__tagline-box" >
                              
                                <p class="section-title__tagline"style="margin-top:50px;"   ><?php echo $translations['SUPPORT_TITLEa']; ?> </p>

                            </div>



                            <p class="about-two_text"> <strong><?php echo $translations['SUPPORT_TITLEb']; ?> </strong><?php echo $translations['SUPPORT_TITLEc']; ?> </p>
                            <p class="about-two_text"> <strong><?php echo $translations['SUPPORT_TITLEd']; ?> </strong><?php echo $translations['SUPPORT_TITLEe']; ?> </p>
                            <p class="about-two_text"> <strong><?php echo $translations['SUPPORT_TITLEf']; ?> </strong><?php echo $translations['SUPPORT_TITLEg']; ?> </p>
                            <br><br>
                          

                          
                        </div>
                    </div> 


                   
                </div>
            </div>
        </section>
       
        </section>

      
                    











                  



                   
                    



               



                    
           








































    <section class="portfolio-three">
            <div class="portfolio-three__bg-box">
                <div class="portfolio-three__bg"
                  ></div>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                    <p class="section-title__tagline"   style="  font-size:20px; "><?php echo $translations['TITLE1']; ?> </p>
                    </div>
                   
                </div>
                <div class="row">
                       <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="900ms">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="assets/images/project/portfolio-3-4.jpg" alt="">
                                </div>
                                <div class="portfolio-three__content">
<!--                                    <p class="portfolio-three__sub-title">Service</p>-->
                                    <h3 class="portfolio-three__title"><a href="service-Collaborations.php"> <?php echo $translations['TITLE2']; ?> </a></h3>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="service-Collaborations.php" ><span
                                            class="icon-next"></span></a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="600ms">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="assets/images/project/portfolio-3-3.jpg" alt="">
                                </div>
                                <div class="portfolio-three__content">
<!--                                    <p class="portfolio-three__sub-title">Service</p>-->
                                    <h3 class="portfolio-three__title"><a href="service-impot-taxes.php"><?php echo $translations['TITLE3']; ?> </a></h3>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="service-impot-taxes.php"><span
                                            class="icon-next"></span></a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="assets/images/project/portfolio-3-2.jpg" alt="">
                                </div>
                                <div class="portfolio-three__content">
<!--                                    <p class="portfolio-three__sub-title">Service</p>-->
                                    <h3 class="portfolio-three__title"><a href="service-audit.php">Audit</a></h3>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="service-audit.php"><span
                                            class="icon-next"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="portfolio-three__single">
                            <div class="portfolio-three__img-box">
                                <div class="portfolio-three__img">
                                    <img src="assets/images/project/portfolio-3-1.jpg" alt="">
                                </div>
                                <div class="portfolio-three__content">
<!--                                    <p class="portfolio-three__sub-title">Service</p>-->
                                    <h3 class="portfolio-three__title"><a href="service-Conseil.php"><?php echo $translations['TITLE4']; ?> </a></h3>
                                </div>
                                <div class="portfolio-three__arrow">
                                    <a href="service-Conseil.php" ></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                   
                    <!--Portfolio Three Single End-->
                    <!--Portfolio Three Single Start-->
                   
                    <!--Portfolio Three Single End-->
                    <!--Portfolio Three Single Start-->
                 
                    <!--Portfolio Three Single End-->
                </div>
            </div>
        </section>



























































        <section class="counter-one">
            <div class="container">
                <div class="counter-one__inner">
                    <ul class="counter-one__count-list list-unstyled" >
                        <li class="wow fadeInLeft" data-wow-delay="100ms">
                        <div class="counter-one__icon" >
                                <span class="icon-team"></span>
                            </div>

                            <div class="counter-one__count count-box">
                                <h3 class="count-text" data-stop="35" data-speed="1500">35</h3>

                            </div>
                            <p class="counter-one__text">Clients</p>
                        </li>
                        <li class="wow fadeInLeft" data-wow-delay="300ms">

                        <div class="counter-one__icon" style="margin-top: 5px;">
                                <span class="icon-insurance"></span>
                            </div>



                            <div class="counter-one__count count-box">
                                <h3 class="count-text" data-stop="5" data-speed="1500">5M</h3>
                                <span>M</span>
                                <span style="font-size: 20pt;padding-left: 10px;">USD</span>
                            </div>
                            <p class="counter-one__text" ><?php echo $translations['TITLE5']; ?> </p>
                        </li>
                        <li class="wow fadeInRight" data-wow-delay="600ms">
                            <div class="counter-one__icon">
                                <span class="icon-rating"></span>
                            </div>
                            <div class="counter-one__count count-box">
                                <h3 class="count-text" data-stop="32" data-speed="1500">32</h3>

                            </div>
                            <p class="counter-one__text"> <?php echo $translations['TITLE6']; ?> </p>
                        </li>
                        <li class="wow fadeInRight" data-wow-delay="900ms">
                            <div class="counter-one__icon">
                                <!-- <img  src="assets/images/icon/chiffre d'affaire.png" width="50%"> -->
                                <span class="fas fa-chart-line"></span>
                            </div>
                            <div class="counter-one__count count-box">
                                <h3 class="count-text" data-stop="8" data-speed="1500">8</h3>

                            </div>
                            <p class="counter-one__text"><?php echo $translations['TITLE7']; ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        </div>
            </div>
        </section>
       










        <!--Blog Two Start -->
        <section class="blog-two">
            <div class="container">
                <div class="section-title text-center">

                    <h2 class="section-title__title" style="
    margin-top: 67px;
">
                     <?php echo $translations['TITLE8']; ?>
                    </h2>
                </div>
                <div class="row">
                    <!--Blog Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms" >
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="assets/images/gallery/blog1.png" alt="">
                                </div>
                                <div class="blog-two__tag">
                                    <span><?php echo $translations['TITLE9']; ?></span>
                                </div>
                                <div class="blog-two__date">
                                    <p><span><?php echo $translations['TITLE10']; ?></span></p>
                                </div>
                            </div>




                          
                            <div class="blog-two__content" 
                         >
                                <h3 class="blog-two__title" style="padding-bottom: 40px;"><a href="blog-details1.php"> <?php echo $translations['TITLE11']; ?></a></h3>
                              
                                <div class="blog-two__btn-box1">
                                    <a href="blog-details1.php" style="margin-top: -40px;" class="blog-two__btn thm-btn"><?php echo $translations['TITLEBUTTON']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="assets/images/gallery/blog2.jpg" alt="">
                                </div>
                                <div class="blog-two__tag">
                                    <span><?php echo $translations['TITLE9']; ?></span>
                                </div>
                                <div class="blog-two__date">
                                    <p><span><?php echo $translations['TITLE13']; ?></span></p>
                                </div>
                            </div>
                            <div class="blog-two__content"  >
                                <h3 class="blog-two__title"><a href="blog-details2.php"><?php echo $translations['TITLE14']; ?></a></h3>
                              
                                <div class="blog-two__btn-box2">
                                    <a href="blog-details2.php"style="    margin-top: 68px; margin-bottom: 0px;" class="blog-two__btn thm-btn"><?php echo $translations['TITLEBUTTON']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="600ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img-box">
                                <div class="blog-two__img">
                                    <img src="assets/images/gallery/man-saving-money-energy-crisis.jpeg" alt="" style=" width: 105%; ">
                                </div>
                                <div class="blog-two__tag">
                                    <span><?php echo $translations['TITLE9']; ?></span>
                                </div>
                                <div class="blog-two__date">
                                    <p><span><?php echo $translations['TITLE15']; ?></span></p>
                                </div>
                            </div>
                            <div class="blog-two__content">
                                <h3 class="blog-two__title"   style="padding-bottom: 49px;"><a href="blog-details3.php"><?php echo $translations['TITLE20']?></a></h3>
                               
                                <div class="blog-two__btn-box3" >
                                    <a href="blog-details3.php" style="margin-top: 0px;  margin-bottom: 17px;"  class="blog-two__btn thm-btn"><?php echo $translations['TITLEBUTTON']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>
      



<div class="services-two__bottom" style="padding: 80px;">
    <div class="container">
        <div class="services-two__bottom-inner">
            <div class="services-two__bottom-img">
                <img src="assets/images/services/services-two-bottom-img.webp" alt="" style="width: 171px;">
            </div>
            <h3 class="services-two__bottom-title"><?php echo $translations['network_title']; ?></h3>
            <div class="services-two__bottom-btn-box">
                <a href="reseau.php" style="background-color:#e73f23" class="services-two__bottom-btn thm-btn"><?php echo $translations['find_us']; ?></a>
            </div>
        </div>
    </div>
</div>






              <div class="content">
    <div class="container comment-form">
        <h3 class="comment-one__title"><?php echo $translations['contact_title']; ?></h3>
        <p><?php echo $translations['email_privacy']; ?></p>
        <form onsubmit="sendEmail(); reset(); return false;" class="comment-one__form contact-form-validated" novalidate="novalidate">
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










        <!--CTA One Start -->
        <section class="brand-one">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100,
                "slidesPerView": 5,
                "loop": true,
                "navigation": {
                    "nextEl": "#brand-one__swiper-button-next",
                    "prevEl": "#brand-one__swiper-button-prev"
                },
                "autoplay": { "delay": 5000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    }
                }}'>
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                            <img class="swiper1" src="assets/images/gallery/img30.png" alt="" style="width: 74%; padding-top: 32px;">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/brand/allianz-logo.svg" style="width: 50%; padding-top: 74px;" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets/images/gallery/img32.png" style="width: 50%; padding-top: 73px;" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper4" src="assets/images/gallery/img5.png"  style="  width: 30%; padding-top: 25%;" >
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
 

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label>
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>


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

    
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail() {
            Email.send({
    SecureToken : "C973D7AD-F097-4B95-91F4-40ABC5567812",
    To : 'them@website.com',
    From : "you@isp.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);

            
        }


    </script>



 
    <script src="assets/js/sonchoy.js"></script>
</body>

</html>