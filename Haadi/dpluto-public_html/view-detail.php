<!DOCTYPE html>
<html>
   <head>
      <title>Digital Pluto Technology encapsulates minimalism into Logo Designs </title>
      <meta name="description" content="Digital Pluto Technology creates visual clues that add value and meaning to your brand persona. Design your brand logos with our creative gypsies and be remembered.">
      <?php
         include __DIR__ . '/include/header.php';

         $getPackageParam = $_GET['package'];
         $pakageData = getPackageByName($getPackageParam);

         $data = getTestimonialsByPackageName($getPackageParam, $testimonials);
         ?> 

      <section class="detail_title">
         <div class="container">
            <div class="service-heading">
               <h3>Memorable Logos, Creating Everlasting Impression on Your Target Audience</h3>
               <p>Our experienced designers help companies around the world to develop and become top figures in their competitive industries. We will provide you with a high-quality custom logo design and make your business stand out.</p>
            </div>
         </div>
      </section>

      <section class="pacakge-details det-packages"  data-package-box>
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="boxpackages" data-package-box>
                         <div class="packheads">
                          <div class="productSku" style="display: none;"><?php echo $pakageData['sku']; ?></div>
                            <h3 class="montfont"><?php echo $pakageData['title']; ?></h3>
                            <p><?php echo $pakageData['technical_description']; ?></p>
                         </div>
                         <div class="packdetails">
                            <div class="packtitles">
                               <div class="fleft">
                                  <h3 class="opensansfont">$<?php echo $pakageData['price']; ?></h3>
                               </div>
                               <div class="fright">
                                  <h4><?php echo $pakageData['discount_label']; ?><span class="cutprice">$<?php echo $pakageData['cross_price']; ?></span></h4>
                               </div>
                            </div>
                            <div class="wrap-pack-detail pricing-list">
                              <div class="slim-scroll">
                                <div data-package-scroll>
                                   <?php echo $pakageData['html_description']; ?>
                               </div>
                             </div>
                            </div>
                         </div>
                        </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-7 pricing-details-left" >
                      <div class="sechead">

                          <h3><?php echo $pakageData['title']; ?></h3>
      <?php echo $pakageData['short_description']; ?>
                          <ul>
                              <li><a class="montfont btn-orders  order-package"
                                     data-sku="<?php echo $pakageData['sku']; ?>"
                                     data-category-type="<?= $pakageData['category_id'] == 103 ? 'logo' : (($pakageData['category_id'] == 104) ? 'web' : '') ?>"
                                     data-promotion-id="<?= isset($promotion_id) ? $promotion_id : 0 ?>"
                                     data-price="<?php echo $pakageData['price']; ?>"
                                     data-price-text="$<?php echo $pakageData['price']; ?>"
                                     data-title="<?php echo $pakageData['title']; ?>"
                                     data-package-id="<?php echo $pakageData['id']; ?>"
                                     href="javascript:void(0)">Order Now</a></li>
                              <li>
                                  <div class="liovechats-bx">
                                      <a href="javascript:;" title="" class="chat">
                                          <span>Click here to</span>
                                          <h5 class="montfont">Live Chat</h5>
                                      </a>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      
      <section class="main-ready-work website">
      <div class="container">
      <div class="row justify-content-end">
      <div class="col-lg-2 col-md-2 col-md-2 ready-work-img">
         <img src="images/ready-work-img.png" alt="" class="img-fluid">
      </div>
      <?php
         include __DIR__ . '/include/cta-2.php'
         ?> 

      <?php
         include __DIR__ . '/include/footer.php'
         ?>