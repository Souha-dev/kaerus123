<?php echo include('init.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head remains unchanged -->
</head>

<body>
    <footer class="site-footer site-footer-two">

        <div class="site-footer__shape-1 float-bob-x">
            <img src="assets/images/shapes/site-footer-two-shape-1.png" alt="">
        </div>

        <div class="site-footer-two__shape-2 img-bounce">
            <img src="assets/images/shapes/site-footer-two-shape-2.png" alt="">
        </div>

        <div class="site-footer__top">
            <div class="container">
                <div class="site-footer__top-inner">
                    <div class="row">
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="logo footer-widget__logo" >
                                    <a href="index.php">
                                        <img class="logosize" src="assets/images/icon/logo .png" alt="" style="height: 150px; margin-left: -66px;">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__navigation">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title"><?php echo $translations['useful_links']; ?></h3>
                                </div>
                                <ul class="footer-widget__navigation-list list-unstyled">
                                    <li><a href="index.php"><?php echo $translations['home']; ?></a></li>
                                    <li><a href="qsn.php"><?php echo $translations['about_us']; ?></a></li>
                                    <li><a href="reseau.php"><?php echo $translations['network']; ?></a></li>
                                    <li><a href="service-Conseil.php"><?php echo $translations['consulting']; ?></a></li>
                                    <li><a href="service-audit.php"><?php echo $translations['audit']; ?></a></li>
                                    <li><a href="service-impot-taxes.php"><?php echo $translations['taxes']; ?></a></li>
                                    <li><a href="service-Collaborations.php"><?php echo $translations['collaboration']; ?></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__quick-link">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title"><?php echo $translations['contact']; ?></h3>
                                </div>
                                <p class="footer-widget__about-text">59 rue de Ponthieu 75008 Paris - France</p>
                                <div class="footer-widget__emergency-call">
                                    <a href="tel:+33 (1) 86 90 94 80">+33 (1) 86 90 94 80</a>
                                    <p><a href="mailto:contact@kaerus.fr"><i class="fac fac-envelope"></i> contact@kaerus.global</a></p>
                                </div>
                                <div class="footer-widget__social">
                                    <a href="https://www.facebook.com/Kaerus-104565648236065"><span class="icon-facebook"></span></a>
                                    <a href="https://www.instagram.com/kaerus_fr?igsh=YmZ0aWhtOHdtanlj"><span class="icon-instagram-1"></span></a>
                                    <a href="https://www.linkedin.com/company/kaerus-com?trk=blended-typeahead"><span class="fab fa-linkedin"></span></a>
                                    <a href="https://www.youtube.com/watch?v=7Sgr60KmpA0"><span class="icon-youtube"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title"><?php echo $translations['newsletter']; ?></h3>
                                </div>
                                <p class="footer-widget__newsletter-text"><?php echo $translations['subscribe_placeholder']; ?></p>
                                <input type="email" placeholder="email@example.com" name="email">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

       <div class="site-footer__bottom">
            <div class="container">
                <div class="site-footer__bottom-inner">
                    <p class="site-footer__bottom-text">
                        <?php echo $translations['copyright']; ?> © 2024 KAERUS 
                        <?php echo $translations['by']; ?> 
                        <a href="https://www.fcpo.ma/">FCPO.</a> 
                        <?php echo $translations['all_rights_reserved']; ?>
                    </p>
                </div>
            </div>
        </div>

    </footer>
</body>
</html>
