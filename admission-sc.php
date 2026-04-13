<?php 
$page_title = 'Scholar Admission Page Template';
$body_class = 'page index-sc';
ob_start();
include_once 'partials/header/header-sc.php';
?>

<?php 
    $class = 'sc__version sc__breadcrumb';
    $image = 'breadcrumb-3.webp';
    $title = 'Apply to Unipix School';
    $page = 'Program';
    include_once 'partials/elements/breadcrumb-sc.php';
?>
    

    <!-- admission page content -->
    <div class="rts-page-content rts-section-padding sc__version">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="admission-content-top">
                        <h3 class="rts-section-title">
                           Start Your Journey with Us Apply for Admission
                        </h3>

                        <div class="admission-big-thumb">
                            <img class="rounded-10" src="assets/images/about/admission-sc.webp" alt="admission">
                        </div>

                        <div class="requirement-deadline">
                            <h3 class="rts-section-title">Requirements and Deadlines</h3>
                            <div class="requirement-deadline__content">
                                <ul>
                                    <li class="single-requirement">$90 nonrefundable application fee or fee waiver request</li>
                                    <li class="single-requirement">ACT or SAT test scores (test optional)</li>
                                    <li class="single-requirement">School Report form and counselor letter of recommendation </li>
                                    <li class="single-requirement">Official transcript(s) or academic results</li>
                                    <li class="single-requirement">Letters of recommendation from two teachers</li>
                                    <li class="single-requirement">Midyear transcript (due by February 15)</li>
                                    <li class="single-requirement">$90 nonrefundable application fee or fee waiver request</li>
                                    <li class="single-requirement">ACT or SAT test scores (test optional)</li>
                                    <li class="single-requirement">School Report form and counselor letter of recommendation </li>
                                    <li class="single-requirement">Official transcript(s) or academic results</li>
                                    <li class="single-requirement">Letters of recommendation from two teachers</li>
                                    <li class="single-requirement">Midyear transcript (due by February 15)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="application-deadline">
                            <h3 class="rts-section-title">Application Deadlines</h3>
                            <div class="application-deadline__content">
                                <div class="application-deadline__content--table">
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <td class="first">Event</td>
                                                <td>Restrictive Early Action</td>
                                                <td class="last">Regular Decision</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Standard Application Deadline</td>
                                                <td>November 1</td>
                                                <td>January 10</td>
                                            </tr>
                                            <tr>
                                                <td>Notification of Missing Documents</td>
                                                <td>Mid-November</td>
                                                <td>Mid-February</td>
                                            </tr>
                                            <tr>
                                                <td>Decision Released By</td>
                                                <td>Mid-December</td>
                                                <td>Early April</td>
                                            </tr>
                                            <tr>
                                                <td class="last-1">Student Reply Date</td>
                                                <td>May 1</td>
                                                <td class="last-2">May 1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p> Unipix reserves the right to evaluate an application and render a final decision even if all pieces of the application have not been received.</p>
                                <p class="w-95 mx-0">Applicants are limited to a total of three applications for undergraduate admission, whether for first-year admission, transfer admission or a <br>combination of both. If you have submitted fewer than three applications to Unipix, you may reapply.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row sticky-coloum-wrap g-5 mt--45">
                <div class="col-lg-8">
                    <div class="rts-ap-section">
                        <h3 class="rts-section-title mb--30">Application Details</h3>
                        <div class="rts-application-form">
                            <form action="#">
                                <div class="single-form-part">
                                    <h5 class="form-title">Personal Information</h5>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="fname">First Name</label>
                                            <input type="text" id="fname" placeholder="First name">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="lname">Last Name</label>
                                            <input type="text" id="lname" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="email2">Enter your mail</label>
                                            <input type="email" id="email2" placeholder="Enter your mail">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="phone">Enter Phone Number</label>
                                            <input type="tel" id="phone" placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="dob">Date of Birth</label>
                                            <input type="text" id="datepicker" placeholder="dd/mm/yy">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender">
                                                <option value="*">Gender</option>
                                                <option value="*">Male</option>
                                                <option value="*">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="country">Select your Country </label>
                                            <input id="country" type="text" placeholder="Country">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-form-part">
                                    <h5 class="form-title">Academic Information</h5>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="cname">Collage Name</label>
                                            <input id="cname" type="text" placeholder="Collage Name">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="gpa">Enter your GPA</label>
                                            <input id="gpa" type="text" placeholder="Enter your GPA">
                                        </div>
                                    </div>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="cname2">Collage Name</label>
                                            <input id="cname2" type="text" placeholder="current college">
                                        </div>
                                        <div class="single-input-item">
                                            <label for="gpa2">Enter your GPA</label>
                                            <input type="text" id="gpa2" placeholder="Current GPA">
                                        </div>
                                    </div>
                                </div>
                                <div class="single-form-part">
                                    <h5 class="form-title">Financial Information</h5>
                                    <div class="single-input">
                                        <div class="single-input-item">
                                            <label for="income">Household Income</label>
                                            <select name="income" id="income">
                                                <option value="*">Less then $1k</option>
                                                <option value="*">Less then $2k</option>
                                                <option value="*">Less then $3k</option>
                                            </select>
                                        </div>
                                        <div class="single-input-item">
                                            <label for="yes">applying for need-based financial aid</label>
                                            <select name="yes" id="yes">
                                                <option value="*">yes</option>
                                                <option value="*">no</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="single-form-part">
                                    <h5 class="form-title">Agreement and Submission</h5>
                                    <p>By submitting this application, I confirm that all information provided is accurate and complete. I understand that any false
                                        information may result in the disqualification of my application.
                                    </p>
                                    <div class="single-input-item">
                                        <label for="sub">Application Submission:</label>
                                        <input type="file" id="sub">
                                    </div>

                                    <div class="d-flex align-items-center single-checkbox mt--20">
                                        <input type="checkbox" id="exampleCheck1">
                                        <label for="exampleCheck1">By submitting this form, you agree to the Unipix University Privacy Notice</label>
                                    </div>
                                </div>
                                <button type="submit" class="rts-theme-btn primary with-arrow">Submit Application<span><i class="fa-thin fa-arrow-right"></i></span></button>
                            </form>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sticky-coloum-item">
                    <div class="program-sidebar">
                        <!-- curriculum -->
                        <div class="program-curriculum">
                            <h6 class="heading-title">B.A In African Studies</h6>
                            <div class="program-menu">
                                <ul class="list-unstyled">
                                    <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>Course Curriculum</a></li>
                                    <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>Program Faculty</a></li>
                                    <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>Apply Admission</a></li>
                                    <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>Scholarship </a></li>
                                    <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>Joint Event</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- contact info -->
                        <div class="program-info rounded-10">
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
                        <div class="program-event rounded-10 overflow-hidden">
                            <div class="program-event-content">
                                <p>Joint New Event About
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
                                <a href="#" class="rts-theme-btn with-arrow btn-white lh-100">Joint Now <span><i class="fa-thin fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- admission page content end -->
    <?php
        $class= 'sc';
        include_once 'partials/footer/footer__v6.php';
        include_once 'partials/components/offcanvase-sc.php';
        $content = ob_get_clean();
        include 'base.php';
    ?>