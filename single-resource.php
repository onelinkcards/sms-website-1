<?php 
    $page_title = 'About Us Page Template';
    $body_class = 'page index-sc';
    ob_start();
    include_once 'partials/header/header-sc.php';
?>
<?php 
    $class = 'sc__version sc__breadcrumb';
    $image = 'breadcrumb-3.webp';
    $title = 'Science Resources';
    $page = 'Program';
    include_once 'partials/elements/breadcrumb-sc.php';
?>
    
    <!-- program content -->
    <div class="rts-program rts-section-padding">
        <div class="container">
            <div class="rts-program-single-header">
                <div class="row align-items-center g-3">
                    <div class="col-lg-6">
                        <h3 class="rts-section-title">Unleashing Curiosity – Science Resources for Young Minds.</h3>
                    </div>
                    <div class="col-lg-6">
                        <p class="rts-section-description">At Unipix school, our Science Resources are designed to spark curiosity, creativity, and critical thinking among students. Through interactive learning, experiments, and real-world applications, we make science fun and engaging.</p>
                    </div>
                </div>
            </div>
            <div class="rts-program-description">
                <div class="row sticky-coloum-wrap">
                    <div class="col-lg-8">
                        <div class="program-description-area" id="curriculum">
                            <div class="program-big-thumb">
                                <img src="assets/images/about/resources.webp" class="rounded-10" alt="program">
                            </div>
                            <div class="program-about">
                                <h4 class="title">About The Program</h4>
                                <p>At Unipix School, we believe that science is the key to understanding the world around us. Our Science Resources are designed to ignite curiosity, foster creativity, and develop problem-solving skills in young learners. Through interactive experiments, hands-on projects, and real-world applications, students explore the fundamentals of life sciences, physical sciences, and earth sciences.</p>
                                <p>We encourage students to think critically, ask questions, and discover answers through guided exploration. Our engaging science lessons help students connect theoretical knowledge with practical experiences, making learning both fun and meaningful.</p>
                            </div>
                            <ul class="program__list">
                                <li><i class="fa-light fa-check"></i> Interactive Learning – Engaging lessons with visual aids, models, and experiments.</li>
                                <li><i class="fa-light fa-check"></i>  Hands-on Experiments – Practical activities to explore scientific concepts.</li>
                                <li><i class="fa-light fa-check"></i> Eco-Friendly Projects – Teaching sustainability and environmental awareness.</li>
                                <li><i class="fa-light fa-check"></i> Real-World Applications – Applying scientific knowledge in real-world scenarios.</li>
                            </ul>

                            <!-- resource pricing plan -->
                            <div class="resource__plan">
                                <div class="row g-5">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single__resource__plan">
                                            <div class="plan__header">
                                                <div class="plan__name">High School</div>
                                                <div class="plan__price">
                                                    <h2 class="price">$89 <span>/ Per Month</span></h2>
                                                    <span>Grow your Business by Professional Plan</span>
                                                </div>
                                                <div class="plan__icon"><img src="assets/images/icon/box-icon.svg" alt=""></div>
                                            </div>
                                            <button class="purchase__plan">Select Plan</button>
                                            <div class="plan__content">
                                                <h6>Key Feature</h6>
                                                <ul>
                                                    <li><i class="fa-light fa-circle-check"></i> $7,500 semester-only</li>
                                                    <li><i class="fa-light fa-circle-check"></i> $60 one-time non-refundable application fee</li>
                                                    <li> <i class="fa-light fa-circle-check"></i> Full-time enrollment includes a minimum of four credits and a maximum of six credits. </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single__resource__plan">
                                            <div class="plan__header">
                                                <div class="plan__name">Secondary School</div>
                                                <div class="plan__price">
                                                    <h2 class="price">$199 <span>/ Per Month</span></h2>
                                                    <span>Grow your Business by Professional Plan</span>
                                                </div>
                                                <div class="plan__icon"><img src="assets/images/icon/box-icon.svg" alt=""></div>
                                            </div>
                                            <button class="purchase__plan">Select Plan</button>
                                            <div class="plan__content">
                                                <h6>Key Feature</h6>
                                                <ul>
                                                    <li><i class="fa-light fa-circle-check"></i> $7,500 semester-only</li>
                                                    <li><i class="fa-light fa-circle-check"></i> $60 one-time non-refundable application fee</li>
                                                    <li> <i class="fa-light fa-circle-check"></i> $1,650 semester-only (per course)</li>
                                                    <li> <i class="fa-light fa-circle-check"></i> $60 one-time non-refundable application fee </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- resource pricing plan end -->


                            <div class="program-student-testimonial rt-relative">
                                <h5 class="title fw-bold">Student Testimonials</h5>
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
                            <div class="program-credit-area faq sc__accordion single__resource pt--80 mt-0">
                                <h3 class="faq__title">Frequently Asked Questions (FAQ)</h3>
                                <div class="program-accordion">
                                    <div class="accordion" id="rts-accordion">
                                        <div class="accordion-item expanded">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                What are the admission requirements for Unipix University?
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body">
                                                    <p>
                                                        Admission requirements vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                How do I apply for financial aid?
                                            </button>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                                <div class="accordion-body">
                                                    <p>
                                                        Admission requirements vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                How do I contact Unipix University?
                                            </button>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                               <div class="accordion-body">
                                                <p>Admission requirements vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.</p>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                Are online courses available?
                                            </button>
                                            <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#rts-accordion">
                                               <div class="accordion-body">
                                                <p>Admission requirements vary by program. Please refer to the Admissions section on our website for detailed information or contact the Admissions Office for assistance.</p>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sidebar -->
                    <div class="col-lg-4 sticky-coloum-item">
                        <div class="program-sidebar sc__version">
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
                                    <a href="#" class="rts-theme-btn btn-arrow btn-white">Join Now <span><i class="fa-thin fa-arrow-right"></i></span></a>
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
    $class= 'sc';
    include_once 'partials/footer/footer__v6.php';
    include 'partials/components/offcanvase-sc.php';    
    $content = ob_get_clean();
    include 'base.php';
?>