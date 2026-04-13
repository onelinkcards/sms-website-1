<?php
    if (!empty($_GET['course'])) {
        $c = strtolower(preg_replace('/[^a-z]/', '', (string) $_GET['course']));
        if ($c === 'bsc' || $c === 'gnm') {
            header('Location: course.php?code=' . rawurlencode($c), true, 302);
            exit;
        }
    }
?>
<?php 
    $page_title = 'Program Single Page Template';
    ob_start();
    include_once 'partials/header/transparent-header-v5.php';
?>
<?php
    $class = 'breadcrumb-height breadcumb-bg';
    $image = 'breadcrumb.jpg';
    $title = 'B.A in African Studies';
    $page = 'Program Single';
    include_once 'partials/elements/breadcrumb.php';
?>

    <!-- program content -->
    <div class="rts-program rts-section-padding">
        <div class="container">
            <div class="rts-program-single-header">
                <div class="row align-items-center g-3">
                    <div class="col-lg-6">
                        <h3 class="rts-section-title">The Accounting program offers a Bachelor of Science in Accounting.</h3>
                    </div>
                    <div class="col-lg-6">
                        <p class="rts-section-description">The program continues to attract students from all ethnic, racial, and cultural backgrounds as they recognize ways that Africana Studies provides them with a forum to examine the intellectual life, the historical experience, and the cultural understanding of one of this country’s largest racial minority groups.</p>
                    </div>
                </div>
            </div>
            <div class="rts-program-description">
                <div class="row sticky-coloum-wrap">
                    <div class="col-lg-8">
                        <div class="program-description-area" id="curriculum">
                            <div class="program-big-thumb">
                                <img src="assets/images/course/program-big.jpg" alt="program">
                            </div>
                            <div class="program-about">
                                <h4 class="title">About The Program</h4>
                                <p>Students electing to pursue courses in the Africana Studies program are entering into the current intellectual dialogue on multiculturalism in this society as they study with professors who have conducted notable research in African, Caribbean, Africana, and African-American Studies.</p>
                                <p>The Africana Studies program at Stockton University is affiliated with the National Council for Black Studies, Inc. (NCBS) and students are eligible to apply for membership in Ankh Maat Wedjau, the National Honor Society for majors and minors in Africana Studies. Majors and minors in Africana Studies at Stockton University will also come to appreciate their responsibility to their communities through various projects</p>
                            </div>
                            <div class="program-credit-area">
                                <h5 class="title">Program Courses: 40 credits</h5>
                                <p>Core Required Courses for all majors:</p>
                                <div class="program-accordion">
                                    <div class="accordion" id="rts-accordion">
                                        <div class="accordion-item">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Year One
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <table class="table">
                                                        <thead class="table-theme">
                                                            <tr>
                                                                <th style="min-width: 80%;">Spring Semester 1</th>
                                                                <th>Credits</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Introduction to Africana Studies or GSS 2201 - Africana Studies</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>The Contemporary African Diaspora</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>African-Americans: A Seminar</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                    <table class="table">
                                                        <thead class="table-theme">
                                                            <tr>
                                                                <th style="min-width: 80%;">Summer Semester 2 (Summer Session IV)</th>
                                                                <th>Credits</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Introduction to Africana Studies or GSS 2201 - Africana Studies</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>The Contemporary African Diaspora</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>African-Americans: A Seminar</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="table">
                                                        <thead class="table-theme">
                                                            <tr>
                                                                <th style="min-width: 80%;">Spring Semester 1</th>
                                                                <th>Credits</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Introduction to Africana Studies or GSS 2201 - Africana Studies</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>The Contemporary African Diaspora</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>African-Americans: A Seminar</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Year Two
                                            </button>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <table class="table">
                                                        <thead class="table-theme">
                                                            <tr>
                                                                <th style="min-width: 80%;">Spring Semester 1</th>
                                                                <th>Credits</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Introduction to Africana Studies or GSS 2201 - Africana Studies</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>The Contemporary African Diaspora</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>African-Americans: A Seminar</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="table">
                                                        <thead class="table-theme">
                                                            <tr>
                                                                <th style="min-width: 80%;">Summer Semester 2 (Summer Session IV)</th>
                                                                <th>Credits</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Introduction to Africana Studies or GSS 2201 - Africana Studies</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>The Contemporary African Diaspora</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>African-Americans: A Seminar</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="table">
                                                        <thead class="table-theme">
                                                            <tr>
                                                                <th style="min-width: 80%;">Spring Semester 1</th>
                                                                <th>Credits</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Introduction to Africana Studies or GSS 2201 - Africana Studies</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>The Contemporary African Diaspora</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>African-Americans: A Seminar</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Year Three
                                            </button>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body-content">
                                                    <table class="table">
                                                        <thead class="table-theme">
                                                            <tr>
                                                                <th style="min-width: 80%;">Spring Semester 1</th>
                                                                <th>Credits</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Introduction to Africana Studies or GSS 2201 - Africana Studies</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>The Contemporary African Diaspora</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>African-Americans: A Seminar</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="table">
                                                        <thead class="table-theme">
                                                            <tr>
                                                                <th style="min-width: 80%;">Summer Semester 2 (Summer Session IV)</th>
                                                                <th>Credits</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Introduction to Africana Studies or GSS 2201 - Africana Studies</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>The Contemporary African Diaspora</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>African-Americans: A Seminar</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="table">
                                                        <thead class="table-theme">
                                                            <tr>
                                                                <th style="min-width: 80%;">Spring Semester 1</th>
                                                                <th>Credits</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Introduction to Africana Studies or GSS 2201 - Africana Studies</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>The Contemporary African Diaspora</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                            <tr>
                                                                <td>African-Americans: A Seminar</td>
                                                                <td>3 Credits</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial -->
                            <div class="program-student-testimonial rt-relative">
                                <h5 class="title">Student Testimonials</h5>
                                <div class="single-testimonial-box">
                                    <div class="single-testimonial-active">
                                        <div class="swiper-wrapper">
                                            <!-- single slide -->
                                            <div class="swiper-slide">
                                                <div class="single-testimonial-item rt-relative">
                                                    <div class="rating-star mb--10">
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-light fa-star"></i>
                                                    </div>
                                                    <p class="rt-testimonial-text">
                                                        I can't recommend The Gourmet Haven enough. It's a place for special date in nights, or whenever you're in the mood for a culinary.
                                                    </p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img">
                                                                <img src="assets/images/testimonial/author-1.png" alt="author">
                                                            </div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">David Jhon</h5>
                                                                <p>Artist and Instructor</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-icon">
                                                        <img src="assets/images/testimonial/quote.svg" alt="quote">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single slide -->
                                            <div class="swiper-slide">
                                                <div class="single-testimonial-item rt-relative">
                                                    <div class="rating-star mb--10">
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-solid fa-star"></i>
                                                        <i class="fa-sharp fa-light fa-star"></i>
                                                    </div>
                                                    <p class="rt-testimonial-text">
                                                        I can't recommend The Gourmet Haven enough. It's a place for special date in nights, or whenever you're in the mood for a culinary.
                                                    </p>
                                                    <div class="rt-testimonial-author mt--30">
                                                        <div class="rt-author-meta rt-flex rt-gap-20">
                                                            <div class="rt-author-img">
                                                                <img src="assets/images/testimonial/author-1.png" alt="author">
                                                            </div>
                                                            <div class="rt-author-info">
                                                                <h5 class="mb-0">David Jhon</h5>
                                                                <p>Artist and Instructor</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="quote-icon">
                                                        <img src="assets/images/testimonial/quote.svg" alt="quote">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sidebar -->
                    <div class="col-lg-4 sticky-coloum-item">
                        <div class="program-sidebar">
                            <!-- curriculum -->
                            <div class="program-curriculum">
                                <h6 class="heading-title">B.A In African Studies</h6>
                                <div class="program-menu">
                                    <ul class="list-unstyled">
                                        <li><a href="#curriculum"><span><i class="fa-light fa-arrow-right"></i></span>Course Curriculum</a></li>
                                        <li><a href="faculty-details.php"><span><i class="fa-light fa-arrow-right"></i></span>Program Faculty</a></li>
                                        <li><a href="admission.php"><span><i class="fa-light fa-arrow-right"></i></span>Apply Admission</a></li>
                                        <li><a href="scholarship.php"><span><i class="fa-light fa-arrow-right"></i></span>Scholarship </a></li>
                                        <li><a href="event.php"><span><i class="fa-light fa-arrow-right"></i></span>Joint Event</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- contact info -->
                            <div class="program-info">
                                <h5>Department Contact Info</h5>
                                <p>B.A. in Africana Studies</p>
                                <div class="contact-info">
                                    <h5>Contact:</h5>
                                    <a href="mailto:barry.Unipix@info.com">barry.Unipix@info.com</a>
                                    <a href="callto:121">664-254-251</a>
                                </div>
                                <div class="social-info">
                                    <h5>Social Info:</h5>
                                    <div class="social-info-link">
                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                        <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- join event -->
                            <div class="program-event">
                                <div class="program-event-content">
                                    <p>Joint New Event About <br>
                                        African History
                                    </p>
                                   <h4 class="event-title">B.A. in Africana
                                    Studies</h4> 
                                    <div class="single-event-content-meta">
                                        <div class="event-time">
                                            <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                            <span>10:30 am</span>
                                        </div>
                                        <div class="event-place">
                                            <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                            <span>Yarra Park, UK</span>
                                        </div>
                                        <div class="event-date">
                                            <span><i class="fal fa-calendar"></i></span>
                                            <span>November 28, 2023</span>
                                        </div>
                                    </div>
                                    <a href="#" class="rts-theme-btn btn-arrow btn-white">View Our Program <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- program content end -->
<?php
    $class= 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include 'base.php';
?>