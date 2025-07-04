<!DOCTYPE html>
<html>
   <head>
      <title>Contact Us | EZPZ Bazar</title>
      <meta name="description" content="Contact us for your digital needs and we shall devise a strategic plan for your business. Build and influence digitally.">
      <?php
         include __DIR__ . '/include/header.php'
         ?> 
      <section class="slider-banner" style="background-image: url(images/inner-banner/about-banner.jpg);">
         <div class="slider-carousel-1">
            <div class="item">
               <div class="container">
                  <div class="row justify-content-between no-gutters">
                     <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-right" data-aos-duration="2000">
                        <div class="slider-text">
                           <!-- <h3><span>We Create AWE-INSPIRING</span></h3> -->
                           <h4><span>Get In Touch <br /> With Us</span></h4>
                           <p>Have any queries regarding our services? We'd love to help you anytime.</p>
                           <a href="javascript:;" data-toggle="modal" data-target="#popup_form" class="slide-btn">GET STARTED <img src="images/btn-icon-white.png"></a>
                        </div>
                     </div>
                     <div class="col-lg-6 slider-img">
                        <img src="images/inner-banner/banner-right/contact-right.png" alt="" class="img-fluid">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
       <?php
         include __DIR__ . '/include/client-counter.php'
         ?> 
      <section class="main-service contact-banner-img">
         <span></span>
         <div class="container">
         <div class="row">
         <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-right" data-aos-duration="2000">
            <div class="row">
               <div class="col-md-12">
                  <div class="lets-talk-sec">
                     <h5>Let’s Talk.</h5>
                     <p>Our friendly call center representatives are always available round the clock for any guidance.</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="call-us-box">
                     <div class="call-main-box">
                        <img src="images/phone-icon-img.png" alt="phone-icon-img" class="img-fluid" />
                        <div class="call-info">
                           <p>call us at</p>
                           <a href="<?php echo PHONE_HREF ?>"><?php echo PHONE ?></a>
                        </div>
                     </div>
                     <hr />
                     <p>We are available on live chat! Just ping us and we will take care of it all.</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="call-us-box chat-us-box">
                     <div class="call-main-box chat-us-main-box">
                        <img src="images/chat-icon-img.png" alt="phone-icon-img" class="img-fluid" />
                        <div class="call-info chat-info">
                           <a href="javascript:;" class="chatt">
                              <p>let's chat now</p>
                              <h5 href="javascript:;">live chat</h5>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-8 col-md-12 col-sm-12" data-aos="fade-left" data-aos-duration="2000">
            <div class="main-form">
               <form class="signupForm form_submission" method="POST">
                  <!-- Custom Fields -->
                  <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
                  <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                  <input type="hidden" name="subject" value="Contact Us Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
                  <div class="contact-form">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="contact-form-control">
                              <input type="text" class="form-control" placeholder="First Name *" name="fname" required="" aria-required="true">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="contact-form-control">
                              <input type="number" class="form-control" placeholder="Phone *" minlength="10" maxlength="12" pattern="\d{12}" name="phone" required="" aria-required="true">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="contact-form-control">
                              <input type="text" class="form-control" placeholder="Email Address *" name="email" required="" aria-required="true">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="contact-form-control">
                              <textarea name="requirement" id="msg" placeholder="Requirement *" required="" rows="5"></textarea>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <button class="btn btn-default portfolio-btn contact-btn-sbt" type="submit"> Send Now</button>
                           <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                           <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                           <div class="loader" style="display: none">
                              <img alt="loader" src="loader.gif">
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         </div>
      </section>
      <?php
     
  
         include __DIR__ . '/include/footer.php'
         ?>