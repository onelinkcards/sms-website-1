<?php 
    $page_title = 'Faculty Staff Details Template';
    ob_start();
    include_once 'partials/header/transparent-header-v5.php';
?>
<?php
    $class = 'breadcrumb-height breadcumb-bg';
    $image = 'breadcrumb.jpg';
    $title = 'Faculty Details';
    $page = 'Faculty Details';
    include_once 'partials/elements/breadcrumb.php';
?>
    
    <!-- faculty directory -->
    <section class="rts-faculty-details  rts-section-padding">
        <div class="container">
            <div class="row sticky-coloum-wrap justify-content-sm-center g-5">
                <div class="col-lg-4 col-md-10 col-sm-10 sticky-coloum-item">
                    <div class="faculty-member">
                        <div class="faculty-member__details rt-center ">
                            <div class="faculty-member__image">
                                <img src="assets/images/faculty/mem-1.jpg" alt="member image">
                            </div>
                            <div class="faculty-member__info">
                                <div class="faculty-member__info--social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <a href="mailto:jenni@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>jenni@Unipixuni.edu</a>
                                <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+122451247241</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 col-sm-10">
                    <div class="member-info ">
                        <div class="member-info__details">
                            <div class="short-info">
                                <h4 class="rts-section-title mb--15">Jennifer Aarons, PhD</h4>
                                <span class="designation">Assistant Professor</span>
                                <p class="description">
                                    Katherine Panagakos earned her M.A. in Classics from Tulane University and her Ph.D. in Greek and Latin from The Ohio State University. During her graduate work, she was a student at The American School of Classical Studies at Athens (ASCSA) and was a field walker and camp manager at the Eastern Korinthia Archaeogical Survey (EKAS). Katherine spent three years in a rotating position at schools in the Associated Colleges of the South (Southwestern University in Georgetown, TX; Furman University in Greenville, SC; and Rhodes College in Memphis, TN).
                                </p>
                            </div>
                            <div class="short-info">
                                <h5 class="rts-section-title">Biography</h5>
                                <p class="description">
                                    She began teaching primarily Latin and Classics-related courses at Unipix in January of 2008. Katherine serves as the advisor for the Classics National Honor Society (ΗΣΦ) and OGRE (Order of Greco-Roman Enthusiasts), as well as being an active member of the Interdisciplinary Center of Hellenic Studies (ICHS) and the Friends of Hellenic Studies (FHS). Her research focuses on the ancient Greek and Roman novels. Katherine is currently working on three manuscripts. The first focuses on the role of pirates and robbers in the ancient novels and the other two are in collaboration with former students: one is an intermediate Greek text on Aesop’s Fables; the other is a collection of essays on suicide in the ancient Greco-Roman world.
                                </p>
                                <h5 class="rts-section-title">Education</h5>
                                <p class="description">Ph.D., The Ohio State University</p>
                                <h5 class="rts-section-title">AREAS OF EXPERTISE</h5>
                                <p class="description">Latin language and literature, Ancient Greek and Roman novels, Augustan Age, Classical mythology, Greco-Romans in film, zombies in popular culture
                                </p>
                            </div>
                            <div class="short-info">
                                <h5 class="rts-section-title">COURSES</h5>
                                <div class="course__single">
                                    <ul class="list-unstyled">
                                        <li><a href="#">LANG 1220/1221 Beginning Latin I & II</a></li>
                                        <li><a href="#">LANG 3760/3761Advanced Greek I and II (Lucian, Longus, and Homer)</a></li>
                                        <li><a href="#">GAH 1038 Reacting to the Past</a></li>
                                        <li><a href="#">GAH 1401 Classical Myth and Legend</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="short-info">
                                <h5 class="rts-section-title">PUBLICATIONS</h5>
                                <p>Review of Stefan Tilg’s Chariton of Aphrodisias and the invention of the Greek Love Novel (Oxford UP, 2010).Bryn Mawr Classical Review. Bryn Mawr, PA: BMCR, 2011.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faculty directory end -->
    <?php
        $class= 'v__1';
        include_once 'partials/footer/footer__default.php';
        $content = ob_get_clean();
        include 'base.php';
    ?>