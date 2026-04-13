<?php 
    $page_title = 'Event Details Page Template';
    ob_start();
    include_once 'partials/header/transparent-header-v5.php';
?>
<?php
    $class = 'breadcrumb-height breadcumb-bg';
    $image = 'breadcrumb.jpg';
    $title = 'Fall 2023 Chamber Music Showcase 2';
    $page = 'Event Details';
    include_once 'partials/elements/breadcrumb.php';
?>

    <!-- event details -->
    <div class="rts-event-details pt--120">
        <div class="container">
            <div class="row justify-content-md-center justify-content-start">
                <div class="col-lg-7 col-md-10">
                    <div class="event-details">
                        <div class="event-details__content">
                            <div class="event-details__content--thumb">
                                <img src="assets/images/campus/event/event-details.jpg" alt="event details">
                            </div>
                            <div class="event-details__content--text">
                                <div class="rts-section">
                                    <h4 class="rts-section-title">About The Event</h4>
                                    <p class="description">Join us for the Future Minds Symposium, a thought-provoking educational event designed to inspire and empower individuals to navigate the challenges and opportunities of tomorrow's world. This symposium brings together leading experts, visionaries, and innovators from various fields to explore cutting-edge ideas and share insights on shaping the future.</p>
                                </div>
                            </div>
                            <div class="event-details__content--feature">
                                <!-- single feature -->
                                <div class="single-feature">
                                    <p class="feature-heading">Interactive Workshops:</p>
                                    <p class="feature-description">Connect with like-minded individuals, professionals, and mentors. Build a network that will support your personal and professional growth, fostering collaboration and idea exchange.</p>
                                </div>
                                <!-- single feature -->
                                <div class="single-feature">
                                    <p class="feature-heading">INetworking Opportunities:</p>
                                    <p class="feature-description">Hear from renowned thought leaders who will delve into topics such as artificial intelligence, sustainability, and the future of work. Gain valuable perspectives to help you thrive.</p>
                                </div>
                                <!-- single feature -->
                                <div class="single-feature">
                                    <p class="feature-heading">Networking Opportunities:</p>
                                    <p class="feature-description">Hear from renowned thought leaders who will delve into topics such as artificial intelligence, sustainability, and the future of work. Gain valuable perspectives.</p>
                                </div>
                                <!-- single feature -->
                                <div class="single-feature">
                                    <p class="feature-heading">Registration:</p>
                                    <p class="feature-description">Secure your spot today and be part of the Future Minds Symposium. Early bird registration is now open at www.Unipix Don't miss this opportunity to gain valuable insights.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-10">
                    <div class="event-sidebar">
                        <!-- event information -->
                        <div class="event-information">
                            <h5 class="rts-section-title">Event Information</h5>
                            <div class="single-info">
                                <!-- single repeat item -->
                                <div class="info-repeat">
                                    <div class="left-side"><span><i class="fa-light fa-money-check-dollar"></i></span> Cost:</div>
                                    <div class="right-side">
                                        <span class="desc price">$86.00</span>
                                    </div>
                                </div>
                                <!-- single repeat item -->
                                <div class="info-repeat">
                                    <div class="left-side"><span><i class="fa-regular fa-calendar-week"></i></span> Date:</div>
                                    <div class="right-side">
                                        <span class="desc">December 26, 2023</span>
                                    </div>
                                </div>
                                <!-- single repeat item -->
                                <div class="info-repeat">
                                    <div class="left-side"><span><i class="fa-thin fa-users"></i></span> Total Slot:</div>
                                    <div class="right-side">
                                        <span class="desc">54</span>
                                    </div>
                                </div>
                                <!-- single repeat item -->
                                <div class="info-repeat">
                                    <div class="left-side"><span><i class="fa-regular fa-lock"></i></span> Booked Slot:</div>
                                    <div class="right-side">
                                        <span class="desc">0</span>
                                    </div>
                                </div>
                                <!-- book button -->
                            </div>
                            <div class="book-button">
                                <a href="#" class="rts-theme-btn primary">Book Now</a>
                            </div>
                            <!-- countdown -->
                            <div class="event-count-down">
                                <div class="count-item">
                                    <p><span id="day"></span>day</p>
                                </div>
                                <div class="count-item">
                                    <p><span id="hour"></span>hours</p>
                                </div>
                                <div class="count-item">
                                    <p><span id="minute"></span>minute</p>
                                </div>
                                <div class="count-item">
                                    <p><span id="second"></span>second</p>
                                </div>
                            </div>
                            <!-- clear interval -->
                            <div class="event-timeout rt-center mt--20">
                                <div id="timeout"></div>
                            </div>
                        </div>
                        <!-- event venue -->
                        <div class="event-venue mt--50">
                            <h5 class="rts-section-title">Event Venue</h5>
                            <div class="event-venu-information">
                                <div class="single-info">
                                    <!-- single repeat item -->
                                    <div class="info-repeat">
                                        <div class="left-side bold">Venue:</div>
                                        <div class="right-side">
                                            <span class="desc">Starry Haven Events Center</span>
                                        </div>
                                    </div>
                                    <!-- single repeat item -->
                                    <div class="info-repeat">
                                        <div class="left-side bold">Location:</div>
                                        <div class="right-side">
                                            <span class="desc location">Pinecrest Golf Club,123 Fairway
                                                Lane, Anytown, USA</span>
                                        </div>
                                    </div>
                                    <!-- single repeat item -->
                                    <div class="info-repeat">
                                        <div class="left-side bold">Phone Number:</div>
                                        <div class="right-side">
                                            <span class="desc"><a href="callto:121">(+1) 0 221 457 441</a></span>
                                        </div>
                                    </div>
                                    <!-- single repeat item -->
                                    <div class="info-repeat">
                                        <div class="left-side bold">Web Site:</div>
                                        <div class="right-side">
                                            <span class="desc">
                                                <a href="#">www.Unipix.com</a>
                                                <!-- social item -->
                                                <span class="social-links">
                                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- book button -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event-location mt--60">
                    <div class="rts-section">
                        <h3 class="rts-section-title">
                            The Event Location
                        </h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="event-location-map">
                        <iframe class="event-location-map-iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.288851207937!2d90.47855065!3d23.798243149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1663151706353!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- event details end -->
    <!-- event speaker -->
    <div class="rts-event-speaker mt--40">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <h3 class="rts-section-title">Event Speakers</h3>
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


    <!-- university event list -->
    <div class="rts-event rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section mb--40">
                    <h3 class="rts-section-title">Related Event</h3>
                </div>
            </div>
            <div class="row justify-content-center justify-content-md-start g-5">
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-event">
                        <div class="event single-event__content">
                            <div class="event__thumb">
                                <img src="assets/images/campus/event/01.jpg" alt="event thumbnail">
                            </div>
                            <div class="event__meta">
                                <div class="event__meta--da">
                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                        <span>10:30 am</span>
                                    </div>
                                </div>
                                <h5 class="event__title"> <a href="#">Edu Fest 2023: Igniting Minds Off on Transforming Lives</a></h5>
                            </div>
                            <div class="event-place">
                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                <span>Yarra Park, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single event item end -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-event">
                        <div class="event single-event__content">
                            <div class="event__thumb">
                                <img src="assets/images/campus/event/02.jpg" alt="event thumbnail">
                            </div>
                            <div class="event__meta">
                                <div class="event__meta--da">
                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 30, 2023</span>
                                    </div>
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                        <span>10:30 am</span>
                                    </div>
                                </div>
                                <h5 class="event__title"> <a href="#">Edu Fest 2023: Igniting Minds Off on Transforming Lives</a></h5>
                            </div>
                            <div class="event-place">
                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                <span>Yarra Park, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single event item end -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-event">
                        <div class="event single-event__content">
                            <div class="event__thumb">
                                <img src="assets/images/campus/event/03.jpg" alt="event thumbnail">
                            </div>
                            <div class="event__meta">
                                <div class="event__meta--da">
                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>December 03, 2023</span>
                                    </div>
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                        <span>10:30 am</span>
                                    </div>
                                </div>
                                <h5 class="event__title"> <a href="#">Edu Fest 2023: Igniting Minds Off on Transforming Lives</a></h5>
                            </div>
                            <div class="event-place">
                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                <span>Yarra Park, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single event item end -->
            </div>
        </div>
    </div>
    <!-- university event list end -->
    <?php
        $class= 'v__1';
        include_once 'partials/footer/footer__default.php';
        $content = ob_get_clean();
        include 'base.php';
    ?>