<?php 
    $page_title = 'Lms and University PHP Template';
    ob_start();
    include_once 'partials/header/transparent-header.php';
?>

    <!-- hero slider start -->
    <div class="rts-hero-slider rt-relative v_2">
        <div class="rts-hero-slider-active swiper swiper-data" data-swiper='{
            "slidesPerView":1,
            "effect": "fade",
            "loop": false,
            "speed": 1000,
            "navigation":{
                "nextEl":".rt-next",
                "prevEl":".rt-prev"
            },
            "autoplay":{
                "delay":"7000"
            }}'>
            <div class="swiper-wrapper">
                <!-- single slider -->
                <div class="swiper-slide">
                    <div class="rts-slider-height rts-slider-overlay rt-relative ">
                        <div class="rts-slider-bg" data-background="assets/images/banner/slider__4.jpg" style="background-image: url(assets/images/banner/slider__4.jpg);"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-xl-6 col-md-8 col-sm-9">
                                    <div class="rts-slider">
                                        <div class="rts-slider-content">
                                            <h6 class="rts-subtitle"><img src="assets/images/icon/e-cap.svg" alt="education hat"> knowledge meets innovation</h6>
                                            <h1 class="rts-slider-title">
                                                Inspiring Minds
                                                Shaping Futures
                                            </h1>
                                            <p class="rts-slider-desc">
                                                Remember to tailor the section names to fit the specific needs and structure of your university website.
                                            </p>
                                            <div class="rts-slider-btn">
                                                <a href="academic.php" class="rts-theme-btn btn-arrow">View Our Program <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider -->
                <div class="swiper-slide">
                    <div class="rts-slider-height rts-slider-overlay rt-relative ">
                        <div class="rts-slider-bg" data-background="assets/images/banner/slider__5.jpg" style="background-image: url(assets/images/banner/slider__5.jpg);"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-xl-6 col-md-8 col-sm-9">
                                    <div class="rts-slider">
                                        <div class="rts-slider-content">
                                            <h6 class="rts-subtitle"><img src="assets/images/icon/e-cap.svg" alt="education hat"> knowledge meets innovation</h6>
                                            <h1 class="rts-slider-title">
                                                Inspiring Minds
                                                Shaping Futures
                                            </h1>
                                            <p class="rts-slider-desc">
                                                Remember to tailor the section names to fit the specific needs and structure of your university website.
                                            </p>
                                            <div class="rts-slider-btn">
                                                <a href="academic.php" class="rts-theme-btn btn-arrow">View Our Program <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider arrow -->
            <div class="rts-slider-arrow">
                <div class="rt-slider-btn rt-next">
                    <i class="fa-regular fa-arrow-left"></i>
                </div>
                <div class="rt-slider-btn rt-prev">
                    <i class="fa-regular fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- hero slider  end -->
    <!-- apply start -->
    <section class="rts-application-area  rts-section-padding v_2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="rts-section rt-center mb--80">
                    <h2 class="rts-section-title">Apply Now</h2>
                </div>
            </div>
            <!-- application form -->
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="rts-admission-form-image">
                        <img src="assets/images/feature/admission-form.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="rts-application-form ">
                        <div class="rts-application-form-content v__2">
                            <h5 class="heading-title mb--25">Application Form</h5>
                            <form action="#" class="rts-form">
                                <div class="rts-input rt-flex">
                                    <div class="single-input">
                                        <input type="text" name="fname" id="fname" placeholder="First Name" required>
                                    </div>
                                    <div class="single-input">
                                        <input type="text" name="lname" id="lname" placeholder="Last Name" required>
                                    </div>
                                    <div class="single-input">
                                        <input type="email" name="email" id="email" placeholder="Email.." required>
                                    </div>
                                    <div class="single-input">
                                        <input type="number" name="Phone" id="Phone" placeholder="Phone" required>
                                    </div>
                                </div>

                                <div class="rts-input rt-flex">
                                    <div class="single-input">
                                        <input type="text" name="address" id="address" placeholder="address" required>
                                    </div>
                                    <div class="single-input">
                                        <input type="text" name="city" id="city" placeholder="City" required>
                                    </div>
                                    <div class="single-input">
                                        <input type="text" name="country" id="country" placeholder="Country" required>
                                    </div>
                                    <div class="single-input">
                                        <input type="number" name="zip" id="zip" placeholder="Zip Code" required>
                                    </div>
                                </div>

                                <div class="rts-input rt-flex">
                                    <div class="single-input">
                                        <input type="text" name="data" id="datepicker" placeholder="dd/mm/yy" required>
                                    </div>
                                    <div class="single-input">
                                        <input type="text" name="subject" id="subjcet" placeholder="Your Subject">
                                    </div>
                                </div>
                                <div class="rts-input w-full">
                                </div>
                                <div class="rts-input w-full">
                                    <div class="single-input">
                                        <textarea name="msg" id="msg" placeholder="Enter Your Comments"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="rts-theme-btn rts-nbg-btn btn-arrow v2 full-btn">Apply Now <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rt-shape">
                <img src="assets/images/apply/shape/01.png" alt="shape" class="shape rt-shape__1">
                <img src="assets/images/apply/shape/02.png" alt="shape" class="shape rt-shape__2">
                <img src="assets/images/apply/shape/03.png" alt="shape" class="shape rt-shape__3">
                <img src="assets/images/apply/shape/04.png" alt="shape" class="shape rt-shape__4">
            </div>
        </div>
    </section>
    <!-- apply end -->
    <!-- campus life start -->
    <div class="rts-campus rts-campus-bg v_2">
        <div class="container">
            <div class="row g-40 align-items-center">
                <div class="col-lg-6">
                    <div class="rts-left-section">
                        <h2 class="section-title">
                            Campus
                            <span>History</span>
                        </h2>
                        <div class="left-section-content">
                            <p>Founded on the principles of knowledge, innovation, and community, Unipix University has a storied history that spans decades of academic excellence and societal impact. Our journey began with a vision to create a center of learning that would not only shape individual futures but contribute to the advancement of society as a whole.</p>
                            <a href="campus-life.php" class="rts-theme-btn primary btn-arrow">Read More<span><i class="fa-thin fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rts-right-section rt-relative">

                        <div class="campus-video">
                            <img src="assets/images/feature/campus-2.jpg" alt="campus images">
                            <a class="video-play popup-video" href="https://www.youtube.com/watch?v=Uwq1uiuM_9w">
                                <img src="assets/images/icon/play-round.svg" class="round" alt="">
                                <img src="assets/images/icon/play-icon.svg" class="play-icon" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- <div class="rt-shape">
            <img class="rt-shape__1" src="assets/images/feature/shape/01.png" alt="">
            <img class="rt-shape__2" src="assets/images/feature/shape/02.png" alt="">
            <img class="rt-shape__3" src="assets/images/feature/shape/03.png" alt="">
            <img class="rt-shape__4" src="assets/images/feature/shape/04.png" alt="">
        </div> -->
        </div>
    </div>
    <!-- campus life end -->
    <!-- program start -->
    <section class="rts-program v_2 rts-section-padding">
        <div class="container">
            <div class="row rt-center">
                <div class="col-sm-12">
                    <div class="rts__section--wrapper v__5">
                        <h2 class="rts__section--title">Discover Our Program</h2>
                    </div>
                </div>
            </div>
            <!-- program content -->
            <div class="row justify-content-center g-0">
                <div class="col-lg-4 col-md-10">
                    <div class="rts-program-single">
                        <div class="rts-program-single__content">
                            <div class="rts-program-hover">
                                <div class="icon">
                                    <img src="assets/images/program/icon/03.svg" alt="education">
                                </div>
                                <a href="program-single.php" class="program-link">Graduate Admissions</a>
                                <p>Embark on a journey of knowledge, discovery, and growth at Unipix University.</p>
                                <a href="program-single.php" class="about-btn rts-nbg-btn btn-arrow 
rt-white before-white">Visit Program <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-10">
                    <div class="rts-program-single ">
                        <div class="rts-program-single__content">
                            <div class="rts-program-hover center-item rt-primary-bg">
                                <ul class="list-unstyled">
                                    <li class="single-program">
                                        <div class="icon-box">
                                            <img src="assets/images/icon/04.svg" alt="">
                                        </div>
                                        <a href="program-single.php">Major Programs</a>
                                    </li>
                                    <li class="single-program">
                                        <div class="icon-box">
                                            <img src="assets/images/icon/05.svg" alt="">
                                        </div>
                                        <a href="program-single.php">Minors Programs</a>
                                    </li>
                                    <li class="single-program">
                                        <div class="icon-box">
                                            <img src="assets/images/icon/06.svg" alt="">
                                        </div>
                                        <a href="program-single.php">Bachelor’s & Master’s</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-10">
                    <div class="rts-program-single">
                        <div class="rts-program-single__content">
                            <div class="rts-program-hover">
                                <div class="icon">
                                    <img src="assets/images/program/icon/01.svg" alt="education">
                                </div>
                                <a href="program-single.php" class="program-link">Online Education</a>
                                <p>Embark on a journey of knowledge, discovery, and growth at Unipix University.</p>
                                <a href="program-single.php" class="about-btn rts-nbg-btn btn-arrow 
rt-white before-white">Visit Program <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- program end -->
    <!-- scholarship appication -->
    <section class="rts-scholarship rts-scholarship-bg rts-section-height">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="rts-scholarship-info">
                        <h2 class="rts-section-title">Scholarships and Financial Aid</h2>
                        <p class="w-740 mb--50">Each semester, Brac University is proud to honor academically talented and exceptionally skilled students with a variety of scholarships and awards. The university annually awards more than 100 million takas as scholarships to both undergraduate and postgraduate students.</p>
                        <a href="scholarship.php" class="rts-theme-btn btn-arrow">Know More<span><i class="fa-thin fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- scholarship appication end -->
    <!-- apply procedure  -->
    <section class="rts-application-procedure rts-section-padding">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-lg-12 col-sm-11">
                    <div class="rts-section mb--40 rt-between">
                        <h2 class="rts-section-title w-440">How to Apply to
                            Unipix University</h2>
                        <p class="w-520">If you have any questions or need assistance at any step of the application process, our admissions team is here to help. We look forward to welcoming you to Unipix University.</p>
                    </div>
                </div>
            </div>
            <!-- apply content -->
            <div class="row justify-content-sm-center justify-content-md-start g-5">
                <div class="col-lg-4 col-md-6 col-sm-11">
                    <div class="single-procedure">
                        <div class="procedure-image">
                            <img src="assets/images/apply/01.jpg" alt="application-thumb">
                        </div>
                        <div class="rt-clip-serial rt-clip-text">01</div>
                        <div class="icon">
                            <img src="assets/images/icon/07.svg" alt="">
                        </div>
                        <a href="#">Create an Account:</a>
                        <p>Take the time to explore the diverse range of undergraduate and graduate programs offered at Unipix University</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-11">
                    <div class="single-procedure">
                        <div class="procedure-image">
                            <img src="assets/images/apply/01.jpg" alt="application-thumb">
                        </div>
                        <div class="rt-clip-serial rt-clip-text">02</div>
                        <div class="icon">
                            <img src="assets/images/icon/06.svg" alt="">
                        </div>
                        <a href="#">Online Application</a>
                        <p>Take the time to explore the diverse range of undergraduate and graduate programs offered at Unipix University</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-11">
                    <div class="single-procedure">
                        <div class="procedure-image">
                            <img src="assets/images/apply/01.jpg" alt="application-thumb">
                        </div>
                        <div class="rt-clip-serial rt-clip-text">03</div>
                        <div class="icon">
                            <img src="assets/images/icon/06.svg" alt="">
                        </div>
                        <a href="#">Programs & Requirements</a>
                        <p>Take the time to explore the diverse range of undergraduate and graduate programs offered at Unipix University</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- apply procedure end  -->
    <!-- research area -->
    <section class="rts-research rt-relative research-bg rts-section-height">
        <div class="container">
            <div class="section-bg rt-relative">
                <div class="row justify-content-md-center">
                    <div class="col-lg-5 col-md-11">
                        <div class="rts-research-image">
                            <img src="assets/images/feature/research-1.jpg" alt="research">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-11">
                        <div class="research-content-area">
                            <h2 class="rts-section-title mt--80 mb--20">
                                University Research Centers
                                and Institutes:
                            </h2>
                            <p>Discover a network of cutting-edge research centers and institutes that serve as hubs of innovation
                                within Unipix University From state-of-the-art laboratories.</p>
                            <div class="research-subject mt--30">
                                <div class="single-research">
                                    <div class="icon">
                                        <img src="assets/images/icon/09.svg" alt="biomedical">
                                    </div>
                                    <div class="content">
                                        <h6>Biomedical Sciences</h6>
                                        <p>
                                            Delve into groundbreaking
                                            research in biomedical Sciences
                                        </p>
                                    </div>
                                </div>
                                <div class="single-research">
                                    <div class="icon">
                                        <img src="assets/images/icon/10.svg" alt="biomedical">
                                    </div>
                                    <div class="content">
                                        <h6>Health and Medicine</h6>
                                        <p>
                                            From clinical trials to public
                                            health initiatives
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="research-meta-info mt--50 mb--70">
                                <a href="#" class="rts-theme-btn btn-arrow">Join Community<span><i
                                        class="fa-thin fa-arrow-right"></i></span></a>
                                <div class="research-author">
                                    <div class="image">
                                        <img src="assets/images/author/01.png" alt="author">
                                    </div>
                                    <div class="info">
                                        <h6>Jon Pool</h6>
                                        <p>Research Manager</p>
                                    </div>
                                </div>
                                <div class="research-author">
                                    <div class="image">
                                        <img src="assets/images/icon/phone.svg" alt="phone">
                                    </div>
                                    <div class="info">
                                        <h6><a href="callto:121">+1012405451</a></h6>
                                        <p>Phone Number</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="research-big-text rt-clip-text">Our Research Community</div>
                    </div>
                </div>

            </div>
            <div class="rt-shape">
                <div class="rt-shape__1">
                    <img src="assets/images/feature/research/01.svg" alt="">
                </div>
                <div class="rt-shape__2">
                    <img src="assets/images/feature/research/02.svg" alt="">
                </div>
                <div class="rt-shape__3">
                    <img src="assets/images/feature/research/03.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- research area end -->
    <!-- notice board start -->
    <section class="rts-notice rts-section-padding rts-section-padding">
        <div class="container">
            <div class="row gy-5 gy-lg-0 justify-content-md-center">
                <div class="col-md-11 col-lg-7">
                    <div class="rts-event-section">
                        <h4 class="rts-section-title mb--25">Alumni Event</h4>
                        <div class="rts-event-section-content">
                            <ul class="list-unstyled rts-counter">
                                <li class="single-event">
                                    <div class="single-event-counter">
                                        <div class="count-number rt-clip-text"></div>
                                    </div>
                                    <div class="single-event-content">
                                        <h5 class="event-title">Diversity, Equity, and Inclusion</h5>
                                        <div class="single-event-content-meta">
                                            <div class="event-date">
                                                <span><i class="fal fa-calendar"></i></span>
                                                <span>November 28, 2023</span>
                                            </div>
                                            <div class="event-time">
                                                <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                                <span>10:30 am</span>
                                            </div>
                                            <div class="event-place">
                                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                                <span>Yarra Park, UK</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-event">
                                    <div class="single-event-counter">
                                        <div class="count-number rt-clip-text"></div>
                                    </div>
                                    <div class="single-event-content">
                                        <h5 class="event-title">Talking Money With Kids and Teens</h5>
                                        <div class="single-event-content-meta">
                                            <div class="event-date">
                                                <span><i class="fal fa-calendar"></i></span>
                                                <span>November 28, 2023</span>
                                            </div>
                                            <div class="event-time">
                                                <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                                <span>10:30 am</span>
                                            </div>
                                            <div class="event-place">
                                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                                <span>Yarra Park, UK</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-event">
                                    <div class="single-event-counter">
                                        <div class="count-number rt-clip-text"></div>
                                    </div>
                                    <div class="single-event-content">
                                        <h5 class="event-title">Planning for College After Affirmative Action</h5>
                                        <div class="single-event-content-meta">
                                            <div class="event-date">
                                                <span><i class="fal fa-calendar"></i></span>
                                                <span>November 28, 2023</span>
                                            </div>
                                            <div class="event-time">
                                                <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                                <span>10:30 am</span>
                                            </div>
                                            <div class="event-place">
                                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                                <span>Yarra Park, UK</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-lg-5">
                    <div class="rts-notice-section ">
                        <div class="rts-section rt-between pb--25 rts-border-bottom-2">
                            <h4 class="rts-section-title">Notice</h4>
                            <a href="#" class="rts-arrow">View All <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                        </div>
                        <div class="rts-tab">
                            <ul class="nav nav-pills pb--30" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Latest</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Exam</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Admission</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                    <ul class="list-unstyled notice-content-box">
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    20
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Notice Regarding Upcoming Campus Event: Spring Fling Carnival.
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    22
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Important Notice: Changes to Examination Schedule for Fall Semester 2024.
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    24
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Notice Regarding Deadline Extension for Assignment Submission in Biology 101.
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    25
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Urgent Notice: Campus Maintenance Work Scheduled for March 5th-7th.
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    25
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Notice of Guest Lecture: Dr. John Smith on Neuroscience Advances.
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                    <ul class="list-unstyled notice-content-box">
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    20
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Important Notice: Midterm Examination Schedule for Spring Semester 2024.
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    21
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Notice Regarding Final Examination Timetable for Fall Semester 2023
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    22
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Urgent Notice: Changes to Exam Dates for Biology 10
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    23
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Notice of Exam Venue Change for Chemistry 201
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    25
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Reminder Notice: Registration Deadline for Winter Term Examinations
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                    <ul class="list-unstyled notice-content-box">
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    26
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Admission Notice: Applications Now Open for Fall 2024 Intake
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    27
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Important Notice: Admission Criteria and Requirements for Undergraduate Programs
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    28
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Urgent Admission Notice: Extended Deadline for Submission of Applications
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    29
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Notice of Scholarship Opportunities for Incoming Freshmen
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-notice">
                                            <div class="single-notice-item">
                                                <div class="notice-date">
                                                    30
                                                    <span>Jan</span>
                                                </div>
                                                <div class="notice-content">
                                                    <p>
                                                        <a href="notice-details.php">
                                                            Admission Notice: Information Session for Prospective Students on 2024
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- notice board end -->
    <!-- Testimonial Start -->
    <div class="rts-testimonial v_2 rt-relative pt--120 pb--120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                    <div class="rts-section text-center mb--45">
                        <h2 class="rts-section-title">Our Students Feedback</h2>
                    </div>
                </div>
            </div>
            <!-- testimonial content -->
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10">
                    <div class="rts-testimonial-box">
                        <div class="testimonial-item rt-flex">
                            <div class="testimonial-item-image save-from-hidden">
                                <img src="assets/images/testimonial/testimonial-big.jpg" alt="testimonial thumbnail">
                                <a href="https://www.youtube.com/watch?v=7ahgosTZJHg" class="video-play popup-video">
                                    <img src="assets/images/icon/video-btn.svg" alt="video">
                                </a>
                            </div>
                            <div class="testimonial-item-content w-630 rt-relative">
                                <div class="testmonial-v2">
                                    <div class="swiper-wrapper">
                                        <!-- single testimonial -->
                                        <div class="swiper-slide">
                                            <div class="single-testimonial">
                                                <div class="rt-between mb--50">
                                                    <div class="rt-icon">
                                                        <img src="assets/images/testimonial/quote.svg" alt="quote icon">
                                                    </div>
                                                    <div class="rt-review">
                                                        <div class="rating-star mb--10">
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-light fa-star"></i>
                                                        </div>
                                                        <p class="rt-secondary rt-medium --p-s">4.5 ( 112 Review)</p>
                                                    </div>
                                                </div>
                                                <p class="testimonial-text">
                                                    I would highly recommend Michael Richard to anyone interested the subject matter. It has provided me with invaluable knowledge & a newfound passion topic. My only suggestion would be to add more live.
                                                </p>
                                                <div class="rt-testimonial-author mt--50">
                                                    <div class="rt-author-meta rt-flex rt-gap-20">
                                                        <div class="rt-author-img">
                                                            <img src="assets/images/testimonial/author-1.png" alt="author">
                                                        </div>
                                                        <div class="rt-author-info">
                                                            <h5 class="mb-1">David Jhon</h5>
                                                            <p>Artist and Instructor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single testimonial -->
                                        <div class="swiper-slide">
                                            <div class="single-testimonial">
                                                <div class="rt-between mb--50">
                                                    <div class="rt-icon">
                                                        <img src="assets/images/testimonial/quote.svg" alt="quote icon">
                                                    </div>
                                                    <div class="rt-review">
                                                        <div class="rating-star mb--10">
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-light fa-star"></i>
                                                        </div>
                                                        <p class="rt-secondary rt-medium --p-s">4.5 ( 112 Review)</p>
                                                    </div>
                                                </div>
                                                <p class="testimonial-text">
                                                    I would highly recommend Michael Richard to anyone interested the subject matter. It has provided me with invaluable knowledge & a newfound passion topic. My only suggestion would be to add more live.
                                                </p>
                                                <div class="rt-testimonial-author mt--50">
                                                    <div class="rt-author-meta rt-flex rt-gap-20">
                                                        <div class="rt-author-img">
                                                            <img src="assets/images/testimonial/author-1.png" alt="author">
                                                        </div>
                                                        <div class="rt-author-info">
                                                            <h5 class="mb-1">David Jhon</h5>
                                                            <p>Artist and Instructor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single testimonial -->
                                        <div class="swiper-slide">
                                            <div class="single-testimonial">
                                                <div class="rt-between mb--50">
                                                    <div class="rt-icon">
                                                        <img src="assets/images/testimonial/quote.svg" alt="quote icon">
                                                    </div>
                                                    <div class="rt-review">
                                                        <div class="rating-star mb--10">
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-solid fa-star"></i>
                                                            <i class="fa-sharp fa-light fa-star"></i>
                                                        </div>
                                                        <p class="rt-secondary rt-medium --p-s">4.5 ( 112 Review)</p>
                                                    </div>
                                                </div>
                                                <p class="testimonial-text">
                                                    I would highly recommend Michael Richard to anyone interested the subject matter. It has provided me with invaluable knowledge & a newfound passion topic. My only suggestion would be to add more live.
                                                </p>
                                                <div class="rt-testimonial-author mt--50">
                                                    <div class="rt-author-meta rt-flex rt-gap-20">
                                                        <div class="rt-author-img">
                                                            <img src="assets/images/testimonial/author-1.png" alt="author">
                                                        </div>
                                                        <div class="rt-author-info">
                                                            <h5 class="mb-1">David Jhon</h5>
                                                            <p>Artist and Instructor</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- rts dot -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial end -->
    <!-- blog area start -->
    <div class="rts-blog rts-section-padding v_2 no-bg">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-11 col-lg-12">
                    <div class="rts-section rts-border-bottom-1 mb--50 pb--20">
                        <h2 class="rts-section-title">
                            Latest From Our Blogs
                        </h2>
                        <p class="rts-section-description">Whether you’re considering a foundation course or an undergraduate academics is a place.</p>
                        <a href="blog.php" class="rts-arrow">View All <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- blog content -->
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="rts-blog-post blog-v-full">
                        <div class="single-blog-post">
                            <a href="blog-details.php" class="blog-thumb">
                                <img src="assets/images/blog/big-thumb-1.jpg" alt="blog-thumb">
                            </a>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <div class="rt-author">
                                        <span>
                                        <i class="fa-light fa-user"></i>
                                    </span>
                                        <a href="#">Samira Khan</a>
                                    </div>
                                    <div class="rt-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                </div>
                                <a href="blog-detail.php" class="post-title">
                                    Interactive Worksheets: Printable worksheets have come to life!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rts-blog-post">
                        <!-- single blog -->
                        <div class="single-blog-post">
                            <div class="blog-thumb">
                                <a href="blog-details.php">
                                    <img src="assets/images/blog/small-thumb-1.jpg" alt="post-thumbnail">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <div class="rt-author">
                                        <span>
                                        <i class="fa-light fa-user"></i>
                                    </span>
                                        <a href="#">Samira Khan</a>
                                    </div>
                                    <div class="rt-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                </div>
                                <a href="blog-details.php" class="post-title">
                                    Classroom community-building It’s ok to try something new!
                                </a>
                            </div>
                        </div>
                        <!-- single blog -->
                        <div class="single-blog-post">
                            <div class="blog-thumb">
                                <a href="blog-details.php">
                                    <img src="assets/images/blog/small-thumb-2.jpg" alt="post-thumbnail">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <div class="rt-author">
                                        <span>
                                        <i class="fa-light fa-user"></i>
                                    </span>
                                        <a href="#">Samira Khan</a>
                                    </div>
                                    <div class="rt-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                </div>
                                <a href="blog-details.php" class="post-title">
                                    Those inequalities are inequalities that occur within households
                                </a>
                            </div>
                        </div>
                        <!-- single blog -->
                        <div class="single-blog-post">
                            <div class="blog-thumb">
                                <a href="blog-details.php">
                                    <img src="assets/images/blog/small-thumb-3.jpg" alt="post-thumbnail">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <div class="rt-author">
                                        <span>
                                        <i class="fa-light fa-user"></i>
                                    </span>
                                        <a href="#">Samira Khan</a>
                                    </div>
                                    <div class="rt-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                </div>
                                <a href="blog-details.php" class="post-title">
                                    After decades of improvement, health rates on worrying
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->

     <?php
        $class = 'pb--120';
        include_once 'partials/components/brand-slider.php';
    ?>

    <?php
        $class = 'rts-cta-background rts__white';
        include_once 'partials/components/newsletter.php';
        $class= 'v_2 pt--100 pb--100';
        $cclass = 'v_1';
        include_once 'partials/footer/footer-v3.php';
        $content = ob_get_clean();
        include 'base.php';
    ?>