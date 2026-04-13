 <?php 
    $page_title = 'Tuition and Fees Page Template';
    ob_start();
    include_once 'partials/header/transparent-header-v5.php';
?>
<?php
    $class = 'breadcrumb-height breadcumb-bg';
    $image = 'breadcrumb.jpg';
    $title = 'Tution and Fees';
    $page = 'Tuition and Fees';
    include_once 'partials/elements/breadcrumb.php';
?>

    <!-- tution fee -->
        <div class="page-content-top pt--120 pt__md--80">
            <div class="container">
                <div class="row">
                    <h3 class="rts-section-title">About Tuition & Fees</h3>
                    <p class="desc">Tuition rates for the Fall and Spring semesters are approved at the Board of Trustees meeting in July prior to the beginning of the academic year. Summer tuition rates are approved at the Board of Trustees meeting in February before the term begins. Course registration dates can be found on the . See Important Dates for payment due dates and other deadlines.
                    </p>
                    <h5>Undergraduate Students</h5>
                    <p class="desc">Part-time undergraduate students (registered for less than 12 credits) or undergraduate students registered for credits over 20 in the Fall or Spring semester are charged the per credit rate based on residency. Undergraduate students taking between 12 and 20 credits in the Fall or Spring term are charged a flat rate tuition. Flat rate tuition is not available in the Summer. Undergraduate students registering for courses in the Summer term are charged a discounted per credit rate based on residency.</p>
                </div>
            </div>
        </div>
        <!-- semister fee chart -->
        <div class="semister-fee pb--120 pb__md--80">
            <div class="container">
                <div class="row">
                    <div class="semister-fee__content">
                        <h5 class="rts-section-title">Flat Rate (Undergraduate)</h5>
                        <p class="rt-regular">FALL 2023 - SPPING 2024</p>
                        <!-- tab item -->
                        <div class="rts-fee-chart">
                            <div class="rts-fee-chart__tab">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="undergrade-1-tab" data-bs-toggle="tab" data-bs-target="#undergrade-1" type="button" role="tab" aria-controls="undergrade-1" aria-selected="true">Undergraduate Tuition </button>
                                        <button class="nav-link" id="grade-tution-2-tab" data-bs-toggle="tab" data-bs-target="#grade-tution-2" type="button" role="tab" aria-controls="grade-tution-2" aria-selected="false">Graduate Tuition </button>
                                    </div>
                                </nav>
                            </div>
                            <div class="rts-fee-chart__content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="undergrade-1" role="tabpanel" aria-labelledby="undergrade-1-tab">
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <th>UNDERGRADUATE - Faculties </th>
                                                <th> Flat Rate Tuition (Credits)</th>
                                                <th>IN-STATE (Per Semester)</th>
                                                <th>OUT-STATE (Per Semester)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="3">Business & Administration</td>
                                                <td><span>12-20 Credits (Full-Time)</span></td>
                                                <td>$7,245.00
                                                </td>
                                                <td>$12,475.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Education & General Fees
                                                    <span>(12-20 Credits)</span>
                                                </td>
                                                <td>$845.00</td>
                                                <td>$845.00</td>
                                            </tr>
                                            <tr>
                                                <td>Facilities Fee <span>(12-20 credits)</span></td>
                                                <td>$845.00</td>
                                                <td>$245.00</td>
                                            </tr>
                                       
                                        <tr class="table-theme">
                                            <td>Total: </td>
                                            <td></td>
                                            <td>$8,335.00</td>
                                            <td>$13,565.00</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">Computer Science</td>
                                            <td><span>12-20 Credits (Full-Time)</span></td>
                                            <td>$7,245.00
                                            </td>
                                            <td>$12,475.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Education & General Fees
                                                <span>(12-20 Credits)</span>
                                            </td>
                                            <td>$845.00</td>
                                            <td>$845.00</td>
                                        </tr>
                                        <tr>
                                            <td>Facilities Fee <span>(12-20 credits)</span></td>
                                            <td>$845.00</td>
                                            <td>$245.00</td>
                                        </tr>
                                        <tr class="table-theme border-none">
                                            <td>Total: </td>
                                            <td></td>
                                            <td>$8,335.00</td>
                                            <td>$13,565.00</td>
                                        </tr>
                                        <tr class="table-theme-theme">
                                            <td>Other Fees Per Semester</td>
                                            <td>Non-Matriculated Student <br>
                                                Fee (if applicable)</td>
                                            <td>$65.00</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="grade-tution-2" role="tabpanel" aria-labelledby="grade-tution-2-tab">
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <th>UNDERGRADUATE - Faculties </th>
                                                <th> Flat Rate Tuition (Credits)</th>
                                                <th>IN-STATE (Per Semester)</th>
                                                <th>OUT-STATE (Per Semester)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="3">Business & Administration</td>
                                                <td><span>12-20 Credits (Full-Time)</span></td>
                                                <td>$7,245.00
                                                </td>
                                                <td>$12,475.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Education & General Fees
                                                    <span>(12-20 Credits)</span>
                                                </td>
                                                <td>$845.00</td>
                                                <td>$845.00</td>
                                            </tr>
                                            <tr>
                                                <td>Facilities Fee <span>(12-20 credits)</span></td>
                                                <td>$845.00</td>
                                                <td>$245.00</td>
                                            </tr>
                                       
                                        <tr class="table-theme">
                                            <td>Total: </td>
                                            <td></td>
                                            <td>$8,335.00</td>
                                            <td>$13,565.00</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">Computer Science</td>
                                            <td><span>12-20 Credits (Full-Time)</span></td>
                                            <td>$7,245.00
                                            </td>
                                            <td>$12,475.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Education & General Fees
                                                <span>(12-20 Credits)</span>
                                            </td>
                                            <td>$845.00</td>
                                            <td>$845.00</td>
                                        </tr>
                                        <tr>
                                            <td>Facilities Fee <span>(12-20 credits)</span></td>
                                            <td>$845.00</td>
                                            <td>$245.00</td>
                                        </tr>
                                        <tr class="table-theme border-none">
                                            <td>Total: </td>
                                            <td></td>
                                            <td>$8,335.00</td>
                                            <td>$13,565.00</td>
                                        </tr>
                                        <tr class="table-theme-theme">
                                            <td>Other Fees Per Semester</td>
                                            <td>Non-Matriculated Student <br>
                                                Fee (if applicable)</td>
                                            <td>$65.00</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- second part -->
                    <div class="semister-fee__content mt--80 v_2">
                        <h5 class="rts-section-title">Per Credit Rate (Undergraduate)</h5>
                        <!-- tab item -->
                        <div class="rts-fee-chart">
                            <div class="rts-fee-chart__tab">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                                        <button class="nav-link active" id="undergrade-tab" data-bs-toggle="tab" data-bs-target="#undergrade" type="button" role="tab" aria-controls="undergrade" aria-selected="true">FALL 2023 - SPPING 2024</button>
                                        <button class="nav-link" id="grade-tution-tab" data-bs-toggle="tab" data-bs-target="#grade-tution" type="button" role="tab" aria-controls="grade-tution" aria-selected="false">Summer 2023</button>
                                    </div>
                                </nav>
                            </div>
                            <div class="rts-fee-chart__content" id="nav-tabContent2">
                                <div class="tab-pane fade show active" id="undergrade" role="tabpanel" aria-labelledby="undergrade-tab">
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>UNDERGRADUATE - Per Credit Rate</td>
                                                <td> IN-STATE (Per Semester)</td>
                                                <td>OUT-STATE (Per Semester)</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tuition Per Credit</td>
                                                <td>$645.00</td>
                                                <td>$975.00</td>
                                            </tr>
                                            <tr>
                                                <td>Education & General Fees
                                                   <span>(Per Credits)</span></td>
                                                <td>$845.00</td>
                                                <td>$845.00</td>
                                            </tr>
                                            <tr>
                                                <td>Facilities Fee <span>(12-20 credits)</span></td>
                                                <td>$845.00</td>
                                                <td>$245.00</td>
                                            </tr>
                                            <tr class="table-theme">
                                                <td>Total: </td>
                                                <td>$8,335.00</td>
                                                <td>$13,565.00</td>
                                            </tr>
                                            <tr class="table-theme-theme">
                                                <td>Other Fees Per Semester</td>
                                                <td>Non-Matriculated Student <br>
                                                    Fee (if applicable)</td>
                                                <td>$65.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="grade-tution" role="tabpanel" aria-labelledby="grade-tution-tab">
                                    <table class="table">
                                        <thead class="table-theme">
                                            <tr>
                                                <td>UNDERGRADUATE - Per Credit Rate</td>
                                                <td> IN-STATE (Per Semester)</td>
                                                <td>OUT-STATE (Per Semester)</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tuition Per Credit</td>
                                                <td>$645.00</td>
                                                <td>$975.00</td>
                                            </tr>
                                            <tr>
                                                <td>Education & General Fees
                                                   <span>(Per Credits)</span></td>
                                                <td>$845.00</td>
                                                <td>$845.00</td>
                                            </tr>
                                            <tr>
                                                <td>Facilities Fee <span>(12-20 credits)</span></td>
                                                <td>$845.00</td>
                                                <td>$245.00</td>
                                            </tr>
                                            <tr class="table-theme">
                                                <td>Total: </td>
                                                <td>$8,335.00</td>
                                                <td>$13,565.00</td>
                                            </tr>
                                            <tr class="table-theme-theme">
                                                <td>Other Fees Per Semester</td>
                                                <td>Non-Matriculated Student <br>
                                                    Fee (if applicable)</td>
                                                <td>$65.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- tution fee end -->
    <?php
        $class= 'v__1';
        include_once 'partials/footer/footer__default.php';
        $content = ob_get_clean();
        include 'base.php';
    ?>