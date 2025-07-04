<footer class="main-footer">
	<div class="container" data-aos="fade-up" data-aos-duration="2000">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-contact">
					<img src="images/footer-logo.png">
				
					<h3>Get in Touch</h3>
					<a href="<?php echo PHONE_HREF ?>"><i class="fas fa-phone"></i> <?php echo '92 300 2119676' ?> (PAK)</a>
					<a href="<?php echo EMAIL_HREF ?>"><i class="fas fa-envelope-open-text"></i> <?php echo 'info@dplutotech.com/' ?></a>
					
					<a href="javascript:;"><i class="fas fa-map-marked-alt"></i> <?php echo 'UK Address: 38 Corbidge Court, Glaisher Street, Greenwich, United Kingdom, SE8 3ES' ?></a>
					<a href="javascript:;"><i class="fas fa-map-marked-alt"></i> <?php echo 'Ground Floor, Bungalow # 16, Plot No. 43/1-Q, Razi Road, PECHS, Block-6, Karachi-75400' ?></a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-6">
				<div class="quick-link footer-quick-link">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="index.php"><i class="fas fa-caret-right"></i> Home</a></li>
						<li><a href="about.php"><i class="fas fa-caret-right"></i> About Us</a></li>
						<li><a href="portfolio.php"><i class="fas fa-caret-right"></i> Portfolio</a></li>
						<li><a href="review.php"><i class="fas fa-caret-right"></i> Reviews</a></li>
						<li><a href="pricing.php"><i class="fas fa-caret-right"></i> Packages</a></li>
						<li><a href="contact.php"><i class="fas fa-caret-right"></i> Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4">
				<div class="services-link footer-quick-link">
					<h3>Services</h3>
					<ul>
						<li><a href="website.php"><i class="fas fa-caret-right"></i> Website</a></li>
						<li><a href="logo.php"><i class="fas fa-caret-right"></i> Logo Design </a></li>
						<li><a href="animation.php"><i class="fas fa-caret-right"></i> Animation</a></li>
						<li><a href="mobile-app.php"><i class="fas fa-caret-right"></i> Mobile Apps </a></li>
						<li><a href="digital-marketing.php"><i class="fas fa-caret-right"></i> Digital Marketing</a></li>
						<li><a href="print-design.php"><i class="fas fa-caret-right"></i> Print Design</a></li>
						<li><a href="seo.php"><i class="fas fa-caret-right"></i> SEO</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 pl-lg-0">
				<div class="footer-link footer-quick-link">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="privacy.php"><i class="fas fa-caret-right"></i> Privacy & Security </a></li>
						<li><a href="terms.php"><i class="fas fa-caret-right"></i> Terms & Conditions</a></li>
						<li><a href="javascript:;"><i class="fas fa-caret-right"></i> Sitemap</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 pl-lg-0">
				<div class="footer-solutions footer-quick-link">
					<h3>Our Awards</h3>
					<img src="images/solutions-img.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</footer>

<section class="main-copyright">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-7 col-md-8 col-sm-8">
				<div class="copyright-left">
					<p>Copyright © <?php echo date('Y'); ?>, <?php echo WEBSITE_NAME ?> All Rights Reserved. </p>
					<ul>
			          <li class="first"><a href="terms.php">Terms Of Use</a></li>
			          <li class="last"><a href="privacy.php">Privacy Policy</a></li>
			      	</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4">
				<div class="soical-right">
					<ul>
						<li><a href="#" target="blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
						<!-- <li><a href="https://twitter.com/TheDesignszone" target="blank"><i class="fab fa-twitter"></i><span></span></a></li> -->
						<li><a href="#" target="blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>




<!--form Modal Popup-->
<div class="modal fade" id="popup_form">
  <div class="modal-dialog modal-dialog-centered">
    <div class="entry-box">
      <form class="offr-frm form_submission" method="POST">
      	<!-- Custom Fields -->
        <input type="hidden" name="url" value='<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'>
        <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
        <input type="hidden" name="subject" value="Popup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
        <input type="hidden" name="price" data-name="price" value="">
        <input type="hidden" name="pkgtitle" data-name="pkgtitle" value="">
        <input type="hidden" name="sysip" data-name="sysip" value="<?php echo $get_client_ip; ?>">
        <input type="hidden" name="addressl" data-name="addressl" value="<?php echo $address; ?>">
        <input type="hidden" name="pkgctgry" data-name="pkgctgry" value="">
        <input type="hidden" name="title" data-name="title" value="">	
		<div class="row h-100 justify-content-center">
		 
			<div class="col-lg-5 col-md-5 col-sm-5 popup_top pr-0">
				<div class="text">
				
					<h2>Get Your</h2>
					<h1>Next<br> Project</h1>
				</div>
				<div class="text_dis">
					<div class="text_dis_in">
						<h2>STARTED ON A</h2>
						<h1>75% OFF</h1>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-10 entry-right">
				<div class="col-sm-12 p-0">	
					<button type="button" class="close" data-dismiss="modal">×</button> 
					<div class="text_topfr">
						<h2>Get Impressive Designs &</h2>
						<h4>Result-Oriented Digital Services</h4>
					</div>
				</div>
				<div class="col-sm-12">
					
					<div class="input-group mb-4">
						<div class="input-group-prepend">
						<span class="input-group-text set_inp_gr"><i class="fas fa-user"></i></span>
						
						</div>
						<input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
	  				</div>
				</div>
				<div class="col-sm-12">

					<div class="input-group mb-4">
						<div class="input-group-prepend">
						<span class="input-group-text set_inp_gr"><i class="fas fa-envelope"></i></span>
						
						</div>
						<input type="text" class="form-control" name="email" placeholder="Enter Your Email" required>
	  				</div>
				</div>
				<div class="col-sm-12">
					<div class="input-group">
						<div class="input-group-prepend">
						<span class="input-group-text set_inp_gr"><i class="fas fa-phone"></i></span>
						
						</div>
						<input type="number" class="form-control" name="phone" minlength="10" maxlength="12" pattern="\d{12}" placeholder="Phone Number" required>
	  				</div>
				</div>
				
				<div class="col-sm-12">
					<div class="form-group mb-0 mt-4">
					<button type="submit" class="entery-submit">
					Get In Touch
					</button>
					<div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
          <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
          <div class="loader" style="display: none">
             <img alt="loader" src="loader.gif">
          </div>
					</div>
				</div>
			</div>
		</div>
      </form>
    </div>
  </div>
</div>
<!--form Modal Popup-->

<!--<chat-bot platform_id="a765a78f-90c0-4e74-b804-3c391c26d00c" user_id="d0a22921-9415-4e99-933c-7b56ac1fdfc9" chatbot_id="37c3c61c-24cb-44a3-b8ca-c2d8490328f1">-->
<!--  <a href="https://www.chatsimple.ai/?utm_source=widget&utm_medium=referral">[chatbot]</a>-->
<!--</chat-bot>-->
<script src="https://chatsimple-widget.s3.us-east-2.amazonaws.com/chat-bot-loader.js" defer></script>
   	<script src="js/plugin.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/custom.js"></script>
		<script src="js/form-submit.js"></script>
<!--		<?php include 'include/chat-code.php'; ?>-->
</body>
</html>