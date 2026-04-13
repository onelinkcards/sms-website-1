<?php 
$page_title = 'Event Details Page Template';
ob_start();
include_once 'partials/header/transparent-header-v5.php';
?>
    
    <?php
        $class = 'breadcrumb-height breadcumb-bg';
        $image = 'breadcrumb.jpg';
        $title = 'Unipix Alumni';
        $page = 'Alumni';
        include_once 'partials/elements/breadcrumb.php';
    ?>
    
    <!-- alumni banner -->
    <div class="alumni-banner rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="rts__section--wrapper v__9">
                        <h2 class="rts__section--title">Save the date for Unipix Reunion Homecoming!</h2>
                        <p class="rts__section--description">Calling all ’4s and ’9s! It’s time to reunite with your
                            classmates on November 24–27, 2024.</p>
                    </div>
                </div>
            </div>
            <!-- banner image -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="alumni__banner__image">
                        <img src="assets/images/banner/alumni__banner.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- alumni banner end -->
    
    <!-- upcoming event -->
    <section class="rts__section rts-section-padding rts__light">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper">
                    <div class="rts__section--wrapper--left">
                        <h2 class="rts__section--title text-capitalize">Upcoming event</h2>
                    </div>
                    <div class="rts__section--link">
                        <a href="event.php" class="rts-nbg-btn btn-arrow">View All<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </span></a>
                    </div>
                </div>
            </div>
            <!-- event content -->
            <div class="row g-5">
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event v__3">
                        <div class="rts__single--event--thumb">
                            <a href="event-details.php">
                                <img src="assets/images/event/01.jpg" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="assets/images/icon/calendar.svg" alt="">
                                    <span>Nov 11, 2023</span>
                                </span>
                                <span class="location">
                                    <i class="fa-sharp fa-light fa-location-dot"></i>
                                    <span>Yarra Park, UK</span>
                                </span>
                            </div>
                            <h5 class="rts__single--event--meta--title">
                                <a href="event-details.php">
                                    Edu Fest 2023: Igniting Minds Off on
                                    Transforming Lives </a>
                            </h5>
                            <a href="event-details.php" class="rts__round--btn">
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single event item -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event v__3">
                        <div class="rts__single--event--thumb">
                            <a href="event-details.php">
                                <img src="assets/images/event/02.jpg" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="assets/images/icon/calendar.svg" alt="">
                                    <span>Nov 11, 2023</span>
                                </span>
                                <span class="location">
                                    <i class="fa-sharp fa-light fa-location-dot"></i>
                                    <span>Yarra Park, UK</span>
                                </span>
                            </div>
                            <h5 class="rts__single--event--meta--title">
                                <a href="event-details.php">
                                    Sustainability Showcase: Green
                                    Living at Unipix </a>
                            </h5>
                            <a href="event-details.php" class="rts__round--btn">
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single event item -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event v__3">
                        <div class="rts__single--event--thumb">
                            <a href="event-details.php">
                                <img src="assets/images/event/03.jpg" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="assets/images/icon/calendar.svg" alt="">
                                    <span>Nov 11, 2023</span>
                                </span>
                                <span class="location">
                                    <i class="fa-sharp fa-light fa-location-dot"></i>
                                    <span>Yarra Park, UK</span>
                                </span>
                            </div>
                            <h5 class="rts__single--event--meta--title">
                                <a href="event-details.php">
                                    Career Carnival: Explore Your
                                    Professional Journey </a>
                            </h5>
                            <a href="event-details.php" class="rts__round--btn">
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single event item -->
            </div>
        </div>
    </section>
    <!-- upcoming event end -->

    <!-- student stories -->
    <section class="alumni-stories rts-section-padding">
        <div class="container">
            <div class="row g-5 g-md-0 justify-content-sm-center">
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-11">
                    <div class="left__side">
                        <div class="rts__section--wrapper v__7">
                            <h2 class="rts__section--title">Stories of Unipix Student</h2>
                            <p class="rts__section--description">Embark on a journey of knowledge, discovery, and growth at Unipix University. Our admissions process is designed identify bright, motivated individuals who are eager contribute to our dynamic academic community.</p>
                        </div>
                        <div class="left__side__image">
                            <img src="assets/images/alumni/01.jpg" alt="alumni">
                            <h5 class="left__side__title">Voices of Victory: Unipix Student Stories</h5>
                            <p class="left__side__description">Through these narratives, readers gain insight into the diverse backgrounds, aspirations, and achievements of individuals.</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6 col-md-6 offset-xl-1 col-sm-11">
                    <div class="right__side">
                        <div class="right__side__image">
                            <img src="assets/images/alumni/02.jpg" alt="alumni">
                        </div>
                        <h5 class="right__side__title">Unveiling Unipix: Inspiring Student Stories</h5>
                        <p class="right__side__description">Delve into the heartfelt narratives of Unipix students, where each story resonates with triumph, resilience, and personal growth. From academic achievements to life-changing experiences, these stories illuminate.</p>
                        <div class="right__side__link">
                            <a href="program-single.php" class="rts-theme-btn btn-arrow">View all story
                                <span><i class="fa-regular fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- student stories end -->

    <!-- reunion gallery -->
    <div class="rts-gallery rts__light rts-section-padding ">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper v__5">
                    <h2 class="rts__section--title">University Reunion Gallery</h2>
                </div>
            </div>
            <div class="gallery-area">
                <div class="row g-5">
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="assets/images/campus/gallery/2x1.jpg" class="single-gallery__item">
                                <img src="assets/images/campus/gallery/01.jpg" alt="gallery">
                                <div class="single-gallery__icon">
                                    <i class="fa-light fa-circle-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="assets/images/campus/gallery/2x2.jpg" class="single-gallery__item">
                                <img src="assets/images/campus/gallery/02.jpg" alt="gallery">
                                <div class="single-gallery__icon">
                                    <i class="fa-light fa-circle-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="assets/images/campus/gallery/2x3.jpg" class="single-gallery__item">
                                <img src="assets/images/campus/gallery/03.jpg" alt="gallery">
                                <div class="single-gallery__icon">
                                    <i class="fa-light fa-circle-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="assets/images/campus/gallery/2x4.jpg" class="single-gallery__item">
                                <img src="assets/images/campus/gallery/04.jpg" alt="gallery">
                                <div class="single-gallery__icon">
                                    <i class="fa-light fa-circle-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="assets/images/campus/gallery/2x5.jpg" class="single-gallery__item">
                                <img src="assets/images/campus/gallery/05.jpg" alt="gallery">
                                <div class="single-gallery__icon">
                                    <i class="fa-light fa-circle-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="assets/images/campus/gallery/2x6.jpg" class="single-gallery__item">
                                <img src="assets/images/campus/gallery/06.jpg" alt="gallery">
                                <div class="single-gallery__icon">
                                    <i class="fa-light fa-circle-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- reunion gallery end -->
    <!-- event speaker -->
    <div class="rts-event-speaker rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper">
                    <h2 class="rts__section--title text-capitalize">Event Speakers</h2>
                </div>
            </div>
            <!-- event speaker list -->
            <div class="row g-5">
                <!-- single speaker item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="event-speaker">
                        <div class="event-speaker__details">
                            <div class="speaker-thumb">
                                <img src="assets/images/speaker/01.jpg" alt="speaker-thumb">
                                <div class="speaker-social-link">
                                    <a href="#"><i class="fa-brands fa-skype"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                </div>
                            </div>
                            <div class="speaker-meta">
                                <h5 class="speaker__name"><a href="faculty-details.php">Rick Zonson</a></h5>
                                <span class="designation">Assistant Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single speaker item end -->
                <!-- single speaker item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="event-speaker">
                        <div class="event-speaker__details">
                            <div class="speaker-thumb">
                                <img src="assets/images/speaker/02.jpg" alt="speaker-thumb">
                                <div class="speaker-social-link">
                                    <a href="#"><i class="fa-brands fa-skype"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                </div>
                            </div>
                            <div class="speaker-meta">
                                <h5 class="speaker__name"><a href="faculty-details.php">Thomas Fred</a></h5>
                                <span class="designation">Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single speaker item end -->
                <!-- single speaker item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="event-speaker">
                        <div class="event-speaker__details">
                            <div class="speaker-thumb">
                                <img src="assets/images/speaker/03.jpg" alt="speaker-thumb">
                                <div class="speaker-social-link">
                                    <a href="#"><i class="fa-brands fa-skype"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                </div>
                            </div>
                            <div class="speaker-meta">
                                <h5 class="speaker__name"><a href="faculty-details.php">Albert Mack</a></h5>
                                <span class="designation">Head Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single speaker item end -->
                <!-- single speaker item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="event-speaker">
                        <div class="event-speaker__details">
                            <div class="speaker-thumb">
                                <img src="assets/images/speaker/04.jpg" alt="speaker-thumb">
                                <div class="speaker-social-link">
                                    <a href="#"><i class="fa-brands fa-skype"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                </div>
                            </div>
                            <div class="speaker-meta">
                                <h5 class="speaker__name"><a href="faculty-details.php">Micheal Alfred</a></h5>
                                <span class="designation">Assistant Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single speaker item end -->
            </div>
        </div>
    </div>
    <!-- event speaker end -->
    <?php
        $class= 'v__1';
        include_once 'partials/footer/footer__default.php';
        $content = ob_get_clean();
        include 'base.php';
    ?>