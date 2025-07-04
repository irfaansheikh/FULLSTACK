<?php include 'include/header.php' ?>
<?php include 'include/menu.php' ?>
<?php
$getPackageParam = $_GET['package'];
$pakageData = getPackageByName($getPackageParam);
   // print_r($pakageData);die;
 //getPromotionPackageByName(PROMOTION_CUSTOM_LOGO,$getPackageParam);
?>
<section class="page-details-header">
    <div class="container">
        <div class="service-tab ptb-20" id="whyus">
            <div class="container text-center bounce animated" style="margin-top:40px;">
            </div>
            <div class="sechead">
                <h3 class="montfont">Memorable Logos, Creating Everlasting Impression on Your Target Audience</h3>
                <p>Our experienced designers help companies around the world to develop and become top figures in their competitive industries. We will provide you with a high-quality custom logo design and make your business stand out.</p>
            </div>
        </div>

    </div>
</section>

<section class="pacakge-details det-packages"  data-package-box>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 text-center combo-detail">
                            <div class="row upper-combo">
                                <div class="col-md-12">
                                    <h1 class="text-uppercase combo-detail-text"><?php echo $pakageData['title'] ?></h1>
                                </div>
                                <div class="col-md-12 text-center">
                                    <p><?php echo $pakageData['technical_description'] ?></p>
                                </div>
                                <div class="col-md-12 lower-combo">
                                    <div class="row">
                                       <h2><?php echo $pakageData['title'] ?></h2>
                                            
                                         <?php echo $pakageData['html_description']; ?>
                                       
<!--                                        <div class="col-xs-6 col-sm-6 col-md-3 text-left">
                                            <h2>Branding</h2>
                                            <ul>
                                                <li class="first">Business Card</li>
                                                <li>Letterhead</li>
                                                <li>Envelope</li>
                                                <li>Fax Template</li>
                                                <li>MS Word Letterhead</li>
                                            </ul>
                                            <h2>Final Files</h2>
                                            <ul>
                                                <li class="first">JPG</li>
                                                <li>PDF</li>
                                                <li>AI</li>
                                                <li>PSD</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-3 text-left">
                                            <h2>Website</h2>
                                            <ul>
                                                <li>Unlimited Pages Website</li>
                                                <li>Content Management System (CMS)</li>
                                                <li>Mobile Responsive</li>
                                                <li>Team of Expert Designers & Developers</li>
                                                <li>5 Stock Images</li>
                                                <li>3 Banner Designs</li>
                                                <li>Complete W3C Certified HTML</li>
                                                <li>Complete Deployment</li>
                                            </ul>
                                        </div>-->
                                        <div class="col-xs-12 col-sm-6 col-md-3"
                                             style="padding-left: 0px; padding-right: 0px">
                                            <h3><?= SITE_CURRENCY_SYMBOLS ?><?php echo $pakageData['price'];?><sup>.00</sup></h3>
                                            <h4>75%OFF<span> | <span class="cutprice"><?= SITE_CURRENCY_SYMBOLS ?><?php echo $pakageData['cross_price']?><sup>.00</sup></span></span>
                                            </h4>
                                            <!-- <a href="" class="montfont btn-orders">Order Now</a> -->
                                            <div class="liovechats-bx" style="margin-top: 30px">
                                                <a href="javascript:;" title="">
                                                    <span>Click here to</span>
                                                    <h5 class="montfont">Live Chat</h5>
                                                </a>
                                            </div>
                                            <div class="request-quote">
                                                <a class="popup-open" href="javascript:;" title=""><i
                                                            class="fas fa-edit"></i> Request A Quote</a>
                                            </div>
<!--                                            <a href="start_up_combo_plan.php" class="view-details-combo">View
                                                Details</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
    </div>
</section>
<section class="creative-digital">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="sechead">
                    <h3 class="montfont">A Creative Digital Agency You Can Count On!</h3>
                    <p>A creative digital agency, providing ex eptional design and development solutions for existing and emerging brands. Whether you're a start-up or well established brand, Design,Marketing and Media to assist you with your goals.</p>
                    <ul>
                        <li><a href="">LET’S GET STATED</a></li>
                        <li><a href="">LET’S DISSCUS</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 creative-left-container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="creative-bix">
                            <img src="img/quality-check-color.png" alt="Quality">
                            <p>Quality Checked</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="creative-bix">
                            <img src="img/turn-around-color.png" alt="Turn Around">
                            <p>Quick Turnaround Time</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="creative-bix creative-bix-no-margin">
                            <img src="img/value-monry-color.png" alt="Value for Money">
                            <p>Value for Money</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="creative-bix creative-bix-no-margin">
                            <img src="img/award-color.png" alt="Award Winning Team">
                            <p>Award Winning Team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="maincta">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-7 padright0">
                <h3 class="montfont">Make Your First Move<strong>Share Your Idea With Us </strong> </h3>
                <p class="montfont">Contact our experts NOW to begin crafting your project.</p>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-5 padright0">
                <div class="btn-radius-top">
                    <a href="#" title=""><i class="fas fa-box"></i> Select Package</a>
                    <a class="popup-open" href="javascript:;" title=""><i class="fas fa-edit"></i> Request A Quote</a>
                </div>
                <div class="callsdivs montfont">
                    <a href="tel:+18335648380" title=""><i class="fas fa-phone"></i><span>Contact Number:</span> +1 (833) 5648380</a>
                    <a href="" title=""><i class="fas fa-comments"></i><span>Start Live Chat</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-area section-padding" id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2 class="section-title">How It <span>Works?</span></h2>
                    <p>We have streamlined our processes to achieve beautiful designs, smooth development and impactful results in the most effective manner. We take our work seriously and do not miss out on deadlines and maintain a 100% satisfaction ratio for our clients.</p>
                </div>
            </div>
        </div>

        <section class="creative-section service-menu twotab" style="display: block;">
            <div class="service-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="col-sm-6 abcd col-lg-3 active col-md-3 col-xs-6">
                        <a href="#website-brief" role="tab" data-toggle="tab" class="creative-section-box">
                            <img src="img/tabs/home-tabs/home-logo-brief-white.png" alt="">
                            <span>Creative Brief</span>
                        </a>
                    </li>
                    <li class="col-sm-6 col-lg-3 col-md-3 col-xs-6">
                        <a href="#concept" role="tab" class="webBtn creative-section-box" data-toggle="tab">
                            <img src="img/tabs/home-tabs/home-logo-concept-color.png" alt="">
                            <span>First Concept</span>
                        </a>
                    </li>
                    <li class="col-sm-6 col-lg-3 col-md-3 col-xs-6">
                        <a href="#customer" role="tab" data-toggle="tab" class="creative-section-box">
                            <img src="img/tabs/home-tabs/home-logo-revision-color.png" alt="">
                            <span>
                                Feedback/Revisions
                            </span>
                        </a>
                    </li>
                    <li class="col-sm-6 col-lg-3 col-md-3 col-xs-6">
                        <a href="#feedback" role="tab" data-toggle="tab" class="creative-section-box">
                            <img src="img/tabs/home-tabs/home-logo-final-color.png" alt="">
                            <span>
                                Final Delivery
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 creative-section">
                <div class="tab-content tabnumone" style="padding-left: 15px;padding-right: 15px">
                    <div class="single-service-tab-content tab-pane fade active in" id="website-brief">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="service-content custom_animated animate_service_content">
                                    <h2 class="section-title">Creative Brief</h2>
                                    <p>You will provide us a brief to our creative team about what your business stands for and the feel you want for the logo to be designed for your brand. The brief will provide the initial information needed for the logo design.</p>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-0"></div>
                            <div class="col-md-5 col-sm-6">
                                <div class="service-left-image">
                                    <div class="image-one custom_animated animate_service_img"><img src="img/first-concept-logo.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-tab-content tab-pane fade" id="concept">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="service-content custom_animated animate_service_content">
                                    <h2 class="section-title">First Concept</h2>
                                    <p>Once we reach the verdict about what your requirements and must-haves are, our designers will make a concept and make a draft to begin the collaborative design process. Our team communicates back and forth about logo designs until the final concept is made which best reflects your business.</p>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="service-left-image">
                                    <div class="image-one custom_animated animate_service_img"><img src="img/creative-brief-logo.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-tab-content tab-pane fade in" id="customer">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="service-content custom_animated animate_service_content">
                                    <h2 class="section-title">Feedback / Revisions</h2>
                                    <p>Once you make up your mind and select the final logo design, our team starts the work on other package items and will revise the design in order to get the perfect logo for your brand.</p>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="service-left-image">
                                    <div class="image-one custom_animated animate_service_img"><img src="img/customer-review-log-tab.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-tab-content tab-pane fade in" id="feedback">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="service-content custom_animated animate_service_content">
                                    <h2 class="section-title">Final Delivery</h2>
                                    <p>After confirmation and your approval, we will send the final files of your logo. After having the files reviewed and after having the errors removed, we deliver the project and all the necessary format files.</p>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="service-left-image">
                                    <div class="image-one custom_animated animate_service_img"><img src="img/logo-final-tab.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="maincta">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-7 padright0">
                <h3 class="montfont">Make Your First Move<strong>Share Your Idea With Us </strong> </h3>
                <p class="montfont">Contact our experts NOW to begin crafting your project.</p>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-5 padright0">
                <div class="btn-radius-top">
                    <a href="#" title=""><i class="fas fa-box"></i> Select Package</a>
                    <a class="popup-open" href="javascript:;" title=""><i class="fas fa-edit"></i> Request A Quote</a>
                </div>
                <div class="callsdivs montfont">
                    <a href="tel:+18335648380" title=""><i class="fas fa-phone"></i><span>Contact Number:</span> +1 (833) 5648380</a>
                    <a href="" title=""><i class="fas fa-comments"></i><span>Start Live Chat</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row" style="margin-bottom:55px;">
        <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
            <div class="area-title text-center wow fadeIn">
                <h2 class="section-title" style="margin-top: 77px;">Client's Love towards Design Vocals</h2>
                <p>See what our clients have to say about our service and experience with Design Vocals. Their words of appreciation really make a difference to us. Let's take a look!</p>
            </div>
        </div>
    </div>
</div>

<?php include 'include/testimonials.php' ?>
<?php include 'include/footer.php' ?>