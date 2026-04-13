
<!-- footer twitter slider  -->
<div class="x__slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xxl-9 col-xl-7 d-flex align-items-center">
                <div class="x__slider__active overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="x__slider__item">
                                <img src="assets/images/twitt.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="x__slider__navigation">
                    <div class="rts__slider--arrow">
                        <div class="rts__prev slider__btn"><i class="fa-light fa-arrow-left"></i></div>
                        <div class="rts__next slider__btn"><i class="fa-light fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-5 col-xxl-3">
                <div class="subscription__form">
                    <h5 class="subscription__form--title">Subscribe to  newsletter</h5>
                    
                    <form action="#">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit" class="cta__button">Subscribe <span><i class="fa-regular fa-arrow-right"></i></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<footer class="footer <?= htmlspecialchars($class ?? ''); ?>">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <div class="footer__widget--logo">
                        <a href="index.php"><img class="sms-logo-header sms-logo-header--brand" src="<?php echo htmlspecialchars(defined('SMS_LOGO_MAIN') ? SMS_LOGO_MAIN : 'assets/images/logo/group-21.png'); ?>" alt="<?php echo htmlspecialchars(defined('SMS_SITE_NAME') ? SMS_SITE_NAME : (defined('SMS_SITE_SHORT') ? SMS_SITE_SHORT : 'Sant Manjit Singh College')); ?>" width="300" height="72" loading="lazy" decoding="async"></a>
                    </div>
                    <p class="footer__widget--description">
                        We are passionate education dedicated to providing high-quality resources learners
                        all backgrounds.
                    </p>
                    <div class="footer__widget--social">
                        <ul class="social">
                            <li class="social__link"><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="social__link"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="social__link"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                            <li class="social__link"><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6 class="footer__widget--title">Our Campus</h6>
                    <div class="footer__widget--menu">
                        <ul>
                            <li><a href="academic.php">Academic</a></li>
                            <li><a href="athletics.php">Planning & Admission</a></li>
                            <li><a href="campus-life.php">Campus Safety</a></li>
                            <li><a href="reasearch.php">Facility Services</a></li>
                            <li><a href="academic-area.php">Human Resources</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6 class="footer__widget--title">Our Campus</h6>
                    <div class="footer__widget--menu">
                        <ul>
                            <li><a href="about.php">Accessibility  </a></li>
                            <li><a href="tution-fee.php">Financial Aid</a></li>
                            <li><a href="alumni.php">Food Services</a></li>
                            <li><a href="faculty.php">Housing</a></li>
                            <li><a href="event.php">Student Life</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6 class="footer__widget--title">Quick Button</h6>
                    <div class="footer__widget--button">
                        <a href="admission.php" class="cta__button active">Applying</a>
                        <a href="scholarship.php" class="cta__button">scholarship</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- footer copyright -->
<div class="copyright sc">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copyright__wrapper">
                    <p>Copyright &copy; <span id="year"></span> All Rights Reserved by <a href="#"><?php echo defined('SMS_SITE_NAME') ? SMS_SITE_NAME : 'SMS College'; ?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer copyright end -->

  