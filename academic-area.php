<?php 
    $page_title = 'Academic Page Template';
    $body_class = 'page';
    ob_start();
    include_once 'partials/header/transparent-header-v5.php';
?>
    
<?php 
    $class= 'breadcrumb-height breadcumb-bg';
    $image = 'breadcrumb.jpg';
    $parent = 'Academics';
    $page = 'Academics Areas';
    $title = 'Academic Areas of Study';
    include 'partials/elements/breadcrumb-v2.php';
?>
    
    <!-- content -->
    <div class="rts-academic-area rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <h3 class="rts-section-title">Academic Areas of Study</h3>
                </div>
            </div>
            <!-- academic top -->
            <div class="search-filter mb--40">
                <div class="row g-5">
                    <div class="col-lg-7 col-md-6">
                        <div class="category-search">
                            <h6>Areas of Study:</h6>
                            <form action="#" class="cat-search-form">
                                <input type="text" placeholder="What interests you?" name="s" id="cat">
                                <button type="submit" class="cat-search"><i class="fa-light fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="category-filter">
                            <h6>Program Type:</h6>
                            <select name="cat-search" id="cat-filter">
                                <option value="*">Undergraduate Programs</option>
                                <option value="*">Accounting BS</option>
                                <option value="*">Africana Studies, BA</option>
                                <option value="*">Applied Physics, BA, BS</option>
                                <option value="*">Biology, BA, BS</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-program-category">
                <div class="row g-5">
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/01.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">Undergraduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">Accounting BS</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/02.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">Undergraduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">Africana Studies, BA</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/03.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">Undergraduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">Applied Physics, BA, BS</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/03.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">Undergraduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">Applied Physics, BA, BS</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/04.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">Undergraduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">Biology, BA, BS</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/05.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">Undergraduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">Chemistry, BA, BS</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/06.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">Undergraduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">Computer Science, BS</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/07.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">Undergraduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">Economics, BA</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/08.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">Undergraduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">Business Administration</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/09.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">Online Education</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">American Studies, MA</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/10.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">graduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">M.A. in Education</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/11.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">graduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">Education, MA</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/12.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">Undergraduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">Nursing, DNP</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/13.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">graduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">M.A. in Counseling</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/14.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">Online Education</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">M.S. in Nursing</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-cat-item">
                            <div class="cat-thumb">
                                <img src="assets/images/course/15.jpg" alt="course-thumbnail">
                                <a href="program-single.php" class="cat-link-btn">graduate</a>
                            </div>
                            <div class="cat-meta">
                                <div class="cat-title">
                                    <a href="program-single.php">Master of Public Health</a>
                                </div>
                                <div class="cat-link">
                                    <a href="program-single.php" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="rts-load-more-btn ">
                    <a href="#" class="rts-theme-btn primary lh-100">Load More</a>
                </div>
            </div>
        </div>
    </div>

<?php
    $class= 'v__1';
    include_once 'partials/footer/footer__default.php';
    $content = ob_get_clean();
    include 'base.php';
?>