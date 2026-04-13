<?php 
    $page_title = 'Tution Fee Information Page Template';
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
    
    <!-- breadcrumb area end -->
    <!-- tution fee -->
        <div class="page-content-top pt--120 pt__md--80">
            <div class="container">
                <div class="row">
                    <h3 class="rts-section-title">About Tuition & Fees</h3>
                    <p class="desc">At Unipix School, we are committed to providing high-quality education at an affordable cost. Our tuition fee structure is designed to be transparent and accessible to all families. The fees cover academic instruction, access to school facilities, and essential learning resources.
                    </p>
                </div>
            </div>
        </div>
        <!-- semister fee chart -->
        <div class="semister-fee pb--120 pb__md--80">
            <div class="container">
                <div class="row">
                    <div class="semister-fee__content sc__version">
                        <h5 class="rts-section-title"> Tuition Fee Structure (2025-2026 Academic Year)</h5>
                        <p class="rt-regular">2025-2026 Academic Year</p>
                        <!-- tab item -->

                        <div class="feelist">School & Collage Tuition Fee </div>
                        <div class="tution__fee__chart rts-fee-chart">
                            <div class="rts-fee-chart__content">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td class="first">Grade Level</td>
                                            <td>Admission Fee (One-Time)</td>
                                            <td>Monthly Tuition Fee</td>
                                            <td class="last">Annual Fee (Total)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Pre-Primary (Nursery, KG)</td>
                                            <td>$645.00</td>
                                            <td>$975.00</td>
                                            <td>$1200.00</td>
                                        </tr>
                                        <tr>
                                            <td>Primary (Grade 1-5)</td>
                                            <td>$845.00</td>
                                            <td>$845.00</td>
                                            <td>$1200.00</td>
                                        </tr>
                                        <tr>
                                            <td>High School (Grade 6-8)</td>
                                            <td>$845.00</td>
                                            <td>$245.00</td>
                                            <td>$600.00</td>
                                        </tr>
                                        <tr>
                                            <td>Secondary School (Grade 9-10)</td>
                                            <td>$845.00</td>
                                            <td>$245.00</td>
                                            <td>$600.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- second part -->

                    <div class="additional__fee__content sc__version">
                        <h6 class="fw-bold">Additional Fee:</h6>
                        <span class="feelist">FALL 2025 - SPPING 2026</span>
                        <div class="tution__fee__chart rts-fee-chart">
                            <div class="rts-fee-chart__content">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td class="first">Additional Fees (If Applicable)</td>
                                            <td class="last">Discounts & Scholarships:</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Registration Fee: $50 (One-time, non-refundable)</td>
                                            <td>Sibling Discount: 10% off on tuition for the second child.</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Exam Fee: $30 per term</td>
                                            <td>Early Payment Discount: 5% off for full-year tuition payment before July 1, 2025.</td>
                                        </tr>
                                        <tr>
                                            <td>Lab & Library Fee: $40 per year (For Grades 6-10)</td>
                                            <td>Merit-Based Scholarships: Available for high-achieving students.</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                   
                </div>
            </div>
        </div>
    <!-- tution fee end -->
<?php
    $class= 'sc';
    include_once 'partials/footer/footer__v6.php';
    include 'partials/components/offcanvase-sc.php';    
    $content = ob_get_clean();
    include 'base.php';
?>