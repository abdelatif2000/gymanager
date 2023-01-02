
    <section class="border-bottom border-light py-8 py-lg-10">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 col-lg-6 order-md-1 pr-lg-5 pr-xl-0 mb-7 mb-lg-0">
                    <span class="badge badge-pill badge-primary-soft mb-3" data-aos="zoom-in"><?php echo trans('feature-home-clubs') ?></span>
                    <h1 data-aos="fade-left" data-aos-delay="150" class="display-4 font-weight-bold mb-4"><?php echo trans('feature-home-clubs') ?></h1>

                    <div>
                        <?php if ($this->session->userdata('logged_in') != TRUE): ?>
                            <?php if (settings()->trial_days != 0): ?>
                                <a href="<?php echo base_url('register?trial=start') ?>" class="btn btn-primary btn-pill mr-2" data-aos="fade-left" data-aos-delay="400"><?php echo settings()->trial_days; ?> <?php echo trans('days-free-trial') ?></a>
                            <?php endif ?>
                        <?php endif ?>
                    </div>
                    
                    
                </div>

                <div class="col-md-12 col-lg-6 order-md-2">
                    <div class="banner-img" data-aos="zoom-in" data-aos-delay="100">
                        <img src="<?php echo base_url(settings()->hero_img) ?>" class="text-right" alt="Hero Image">
                    </div>
                </div>
           
            </div>
        </div>
    </section>

            <center>
                <div class="banner-img aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                        <img class="display-5" src="https:///gymanager.club/manager1.png" alt>
                    </div></center>     
    <!-- Workflow -->


    <section class="py-6">
        <div class="container">

            <div class="w-md-80 w-lg-50 text-center mx-auto mb-8 mb-lg-10" data-aos="fade-up">


            </div>

                <div class="row">
                    <?php foreach ($workflows as $workflow): ?>
                        <div class="col-md-4 mb-7 mb-md-0" data-aos="zoom-in-up" data-aos-delay="150">
                            
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="row">
                
     

                               <div class="col-md-4 mb-7 mb-md-0" data-aos="zoom-in-up" data-aos-delay="150">
                        <div class="text-center">
                            <div class="mb-5 workflow-img"><img class="display-5" src="<?php echo base_url() ?>uploads/medium/1_medium-600x600.PNG" alt="..."></div>
                            <h5><?php echo trans('choose-plan') ?></h5>
                            <p class="mb-0 mx-auto w-95 w-lg-85 display-9 line-height-lg"><?php echo trans('choose-your-confortable-plan') ?></p>
                        </div>
                    </div>
                    
                                      <div class="col-md-4 mb-7 mb-md-0" data-aos="zoom-in-up" data-aos-delay="200">
                        <div class="text-center">
                            <div class="mb-5 workflow-img"><img class="display-5" src="<?php echo base_url() ?>uploads/medium/2_medium-600x600.png" alt="..."></div>
                            <h5><?php echo trans('get-paid') ?></h5>
                            <p class="mb-0 mx-auto w-95 w-lg-85 display-9 line-height-lg"><?php echo trans('get-paid-title') ?></p>
                           
                        </div>

                    </div>
                    
                         <div class="col-md-4 mb-7 mb-md-0" data-aos="zoom-in-up" data-aos-delay="250">
                                        <div class="text-center">
                            <div class="mb-5 workflow-img"><img class="display-5" src="<?php echo base_url() ?>uploads/medium/3_medium-600x600.png" alt="..."></div>
                            <h5><?php echo trans('start-working') ?></h5>
                            <p class="mb-0 mx-auto w-95 w-lg-85 display-9 line-height-lg"><?php echo trans('start-working-title') ?></p>
                        </div>
                          
                </div>
                
                


        </div>
    </section>

    <!-- End Workflow -->


    <!-- features -->
    <?php if (!empty($features)): ?>
        <section class="pt-8 pt-md-5 pt-xl-0 mt-9">


        <div class="section-header">
              <h2 style="color: #f9506f;"> <?php echo trans('feature-home-title1') ?> </h2>
                        <div class="text-center mx-auto mb-6 mt-6 w-lg-40">
                <h3 data-aos="fade-up"><?php echo trans('feature-home-title') ?></h3>
                <p data-aos="fade-up" data-aos-delay="150"><?php echo trans('using') ?> <?php echo html_escape(settings()->site_name) ?> <?php echo trans('feature-home-desc') ?></p>
            </div>
            
          
            
        </div>
        
            
<section class="chooseus-section spad">
<div class="container" style="    text-align: center;">
<div class="row">
<div class="col-lg-12">
<div class="section-title">

</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-sm-6">
<div class="choose-item">
<img src="assets/images/j1.png" alt="">
<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo trans('support-24') ?></font></font></h5>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="choose-item">
<img src="/assets/images/j2.png" alt="">
<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo trans('staff-24') ?></font></font></h5>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="choose-item">
<img src="/assets/images/j3.png" alt="">
<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo trans('members-24') ?></font></font></h5>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="choose-item">
<img src="/assets/images/j4.png" alt="">
<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo trans('clubs-24') ?></font></font></h5>

</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="choose-item">
<img src="/assets/images/j5.png" alt="">
<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo trans('platform-24') ?></font></font></h5>

</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="choose-item">
<img src="/assets/images/j6.png" alt="">
<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo trans('health-24') ?></font></font></h5>

</div>
</div>
</div>
</div>
</section>                




        </section>
    <?php endif; ?>
    <!-- features -->


<section class="gallery-section">
<section class="pt-6">
    <div class="container">

        <div class="text-center mx-md-auto mb-5 mb-md-7 mb-lg-9">
            <h2 class="mb-1 aos-init aos-animate" data-aos="fade-up"><?php echo trans('pricing-title') ?></h2>
            <p data-aos="fade-up" class="aos-init aos-animate"><?php echo trans('pricing-desc') ?></p>

            <div class="btn-group btn-group-toggle mt-4 aos-init aos-animate" data-toggle="buttons" data-aos="fade-up">
              <label class="btn btn-outline-primary custom-btngp">
                <input type="radio" name="price_type" value="monthly" class="switch_price"><?php echo trans('monthly') ?>               </label>
              <label class="btn btn-outline-primary custom-btngp active">
                <input type="radio" name="price_type" value="yearly" class="switch_price" checked=""> <?php echo trans('yearly') ?>              </label>
            </div>

        </div>

        <!-- Blog -->
        <div class="row">
                          <div class="col-md-4 m-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                  
                  <div class="course-thumb">
                                        <img src="assets/images/1.jpg" alt="course-img" style="width:600px";>
                                    </div>
                 <div class="pricing-table purple">

                  <h1 class="package_title badge badge-pill badge-secondary-soft">Basic</h1>

                    <!-- Price -->
                    <div class="price-tag m-0 text-left">
                       <div class="yearly_price">
                           <span class="text-dark symbol">$</span>
                           <span class="amount text-dark">0</span>
                           <span class="text-small text-muted"><?php echo trans('yearly') ?></span>
                       </div>

                       <div class="monthly_price" style="display: none;">
                           <span class="text-dark symbol">$</span>
                           <span class="amount text-dark">0</span>
                           <span class="text-small text-muted"><?php echo trans('monthly') ?></span>
                       </div>
                    </div>
                    
                    <!-- Features -->
                      <div class="pricing-features text-center">
                                                      
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span <i class="fa fa-times-circle text-danger"></i></span> <?php echo trans('online-consultation') ?>          </div>
                            
                                                                                                      
                                                            <div class="feature">
                                <span class="icon">50 </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span> <?php echo trans('patients') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-times-circle text-danger"></i></span> <?php echo trans('advise') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-times-circle text-danger"></i></span> <?php echo trans('diagnosis') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-times-circle text-danger"></i></span> <?php echo trans('prescription') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-times-circle text-danger"></i></span> <?php echo trans('appointments') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-times-circle text-danger"></i></span><?php echo trans('view-profile') ?>                            </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span>
                                <span class="limit mr-2"><i class="fa fa-times-circle text-danger"></i></span><?php echo trans('staff') ?>                                </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span>  
                                <span class="limit mr-2"><i class="fa fa-times-circle text-danger"></i></span><?php echo trans('experts') ?>                                </div>
                                                                            </div>
                    <!-- Button -->
                    <input type="hidden" name="billing_type" value="yearly" class="billing_type">
                    <a class="btn btn-light-primary btn-block package_btn" href="https://gymanager.club/register?plan=basic"><?php echo trans('select-plan') ?> </a>
                 </div>
              </div>
                          <div class="col-md-4 m-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                  
                  <div class="course-thumb">
                                        <img src="assets/images/1.jpg" alt="course-img" style="width:600px";>
                                    </div>
                 <div class="pricing-table purple">

                  <h1 class="package_title badge badge-pill badge-primary-soft">Standard</h1>

                    <!-- Price -->
                    <div class="price-tag m-0 text-left">
                       <div class="yearly_price">
                           <span class="text-dark symbol">$</span>
                           <span class="amount text-dark">400</span>
     <span class="text-small text-muted"><?php echo trans('yearly') ?></span>
                       </div>

                       <div class="monthly_price" style="display: none;">
                           <span class="text-dark symbol">$</span>
                           <span class="amount text-dark">35</span>
<span class="text-small text-muted"><?php echo trans('monthly') ?>
                       </div>
                    </div>
                    
                    <!-- Features -->
                      <div class="pricing-features text-center">
                                                      
                                                                                                      
                                                           <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span <i class="fa fa-check-circle text-success"></i></span> <?php echo trans('online-consultation') ?>          </div>
                            
                                                                                                      
                                                            <div class="feature">
                                       <span class="icon">150 </span> 
                                <span class="limit mr-2"><i class="fa fa-times-circle text-success"></i></span> <?php echo trans('patients') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span> <?php echo trans('advise') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span> <?php echo trans('diagnosis') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                               <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span> <?php echo trans('prescription') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span> <?php echo trans('appointments') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span><?php echo trans('view-profile') ?>                            </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon">50 </span> 
                                <span class="limit mr-2"><i class="fa fa-times-circle text-success"></i></span><?php echo trans('staff') ?>                                </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon">3 </span> 
                                <span class="limit mr-2"><i class="fa fa-times-circle text-success"></i></span><?php echo trans('experts') ?>                                </div>
                                                                            </div>
                    <!-- Button -->
                    <input type="hidden" name="billing_type" value="yearly" class="billing_type">
                    <a class="btn btn-light-primary btn-block package_btn" href="https://gymanager.club/register?plan=basic"><?php echo trans('select-plan') ?> </a>
                 </div>
              </div>
                          <div class="col-md-4 m-auto aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                  
                  <div class="course-thumb">
                                         <img src="assets/images/1.jpg" alt="course-img" style="width:600px";>
                                    </div>
                 <div class="pricing-table purple">

                  <h1 class="package_title badge badge-pill badge-secondary-soft">Premium</h1>

                    <!-- Price -->
                    <div class="price-tag m-0 text-left">
                       <div class="yearly_price">
                           <span class="text-dark symbol">$</span>
                           <span class="amount text-dark">500</span>
     <span class="text-small text-muted"><?php echo trans('yearly') ?></span>
                       </div>

                       <div class="monthly_price" style="display: none;">
                           <span class="text-dark symbol">$</span>
                           <span class="amount text-dark">50</span>
<span class="text-small text-muted"><?php echo trans('monthly') ?>
                       </div>
                    </div>
                    
                    <!-- Features -->
                      <div class="pricing-features text-center">
                                                      
                                                                                                      
                                                          <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span<i class="fa fa-check-circle text-success"></i></span> <?php echo trans('online-consultation') ?>          </div>
                            
                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span> <?php echo trans('patients') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span> <?php echo trans('advise') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span> <?php echo trans('diagnosis') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span> <?php echo trans('prescription') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span> <?php echo trans('appointments') ?>                               </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span><?php echo trans('view-profile') ?>                            </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon"><i class="fa fa-infinity"></i> </span> 
                                <span class="limit mr-2"><i class="fa fa-check-circle text-success"></i></span><?php echo trans('staff') ?>                                </div>
                            
                                                                                                                                                                      
                                                            <div class="feature">
                                <span class="icon">15 </span> 
                                <span class="limit mr-2"><i class="fa fa-times-circle text-success"></i></span><?php echo trans('experts') ?>                                </div>
                                                                            </div>
                    <!-- Button -->
                    <input type="hidden" name="billing_type" value="yearly" class="billing_type">
                    <a class="btn btn-light-primary btn-block package_btn" href="https://gymanager.club/register?plan=basic"><?php echo trans('select-plan') ?> </a>
                 </div>
              </div>
                    </div>
        <!-- End Blog -->

    </div>
</section>
    </section>

    
    
    
    
    
    
    <!-- Blog -->
    <?php if (settings()->enable_blog == 1 && !empty($posts)): ?>
        <section class="bg-light pt-6">
            <div class="container">
                <div class="text-center mb-5 mt-5 mb-lg-7 mt-0 mt-lg-5 mt-xl-0" data-aos="fade-up">
                    <h3 class="h2 mb-6 mt-6"><?php echo trans('learn-more-empower-yourself') ?></h3>
                </div>

                <div class="row">
                    <?php $p=1; foreach ($posts as $post): ?>
                        <?php include'include/blog_post_item.php'; ?>
                    <?php $p++; endforeach ?>
                </div>
            </div>
        </section>
    <?php endif ?>
    <!-- End Blog -->



    <section class="pt-6 get_started">
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="simo">
                    <div class="join-thumb">
                        <img src="https://mucle-timer.netlify.app/assets/images/join-lady.png" alt="join-lady">
                    </div>
                </div>
                
            <div class="text-center col-md-6 mb-5 mt-5 mb-lg-7 mt-0 mt-lg-5 mt-xl-0">
                <h3 data-aos="fade-up" class="h1 mb-2 mt-4 text-light font-weight-normal"><?php echo trans('start-using') ?> <?php echo html_escape(settings()->site_name) ?> <?php echo trans('account') ?></h3>
                <p data-aos="fade-up" data-aos-delay="150" class="text-light"><?php echo trans('home-intro-desc') ?></p>
                <a data-aos="fade-up" data-aos-delay="250" href="<?php echo base_url('register') ?>" class="badge badge-light badge-pill py-3"><?php echo trans('get-started') ?> <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            </div>
        </div>
    </section>
    
    
    <section class="section bg-dark">
<div class="vc-bg-lines light">
<span class="border-1"></span>
<span class="border-2"></span>
<span class="border-3"></span>
<span class="border-4"></span>
<span class="border-5"></span>
<span class="border-6"></span>
<span class="border-7"></span>
</div>
<div class="container">
<div class="row align-items-center">
<div class="col-6 col-sm-4 col-lg-2"><img class="img-fluid d-block mx-auto" alt="Image" src="https://templates.bulltheme.com/gymnast/html/images/clients/1.png"></div>
<div class="col-6 col-sm-4 col-lg-2"><img class="img-fluid d-block mx-auto" alt="Image" src="https://templates.bulltheme.com/gymnast/html/images/clients/2.png"></div>
<div class="col-6 col-sm-4 col-lg-2"><img class="img-fluid d-block mx-auto" alt="Image" src="https://templates.bulltheme.com/gymnast/html/images/clients/3.png"></div>
<div class="col-6 col-sm-4 col-lg-2"><img class="img-fluid d-block mx-auto" alt="Image" src="https://templates.bulltheme.com/gymnast/html/images/clients/4.png"></div>
<div class="col-6 col-sm-4 col-lg-2"><img class="img-fluid d-block mx-auto" alt="Image" src="https://templates.bulltheme.com/gymnast/html/images/clients/5.png"></div>
<div class="col-6 col-sm-4 col-lg-2"><img class="img-fluid d-block mx-auto" alt="Image" src="https://templates.bulltheme.com/gymnast/html/images/clients/6.png"></div>
</div>
</div>
</section>

    <div style="rpadding: 10px";>


<div style="/* text-align: center; */content: black;right: 200px;left: 200px;" ;="">
<div class="gettouch-section" style="
    /* text-align: center; */
    /* align-items: center; */
    /* right: 20px; */
">
<div class="container">
<div class="row">


<div class="col-md-4">
<div class="gt-text" style="
    overflow: hidden;
    margin-bottom: 30px;
    /* text-align: center; */
">
<i class="fa fa-mobile" style="
    font-size: 30px;
    color: #f9506f;
    display: inline-block;
    height: 65px;
    width: 65px;
    border-radius: 50%;
    line-height: 65px;
    text-align: center;
float: right;
    margin-right: 40px;
    text-align: center;
"></i>
<ul style="
    /* position: absolute; */
    /* right: -18px; */
    /* top: 0; */
    /* content: &quot;|&quot;; */
    padding-top: 20px;
    /* color: #545454; */
">


<li style="
    /* padding-top: 20px; */
    list-style: none;
    font-size: 14px;
    color: #ffffff;
    display: inline-block;
    position: relative;
"><?php echo trans('phone-212') ?></li>
</ul>
</div>
</div>
<div class="col-md-4">
<div class="gt-text email" style="
    overflow: hidden;
    margin-bottom: 30px;
">
<i class="fa fa-envelope" style="
    font-size: 30px;
    color: #f9506f;
    display: inline-block;
    height: 65px;
    width: 65px;
    border-radius: 50%;
    line-height: 65px;
    text-align: center;
float: right;
    margin-right: 70px;
"></i>
<p style="
    padding-top: 20px;
"><?php echo trans('hmail-home1') ?></p>
</div>
</div>
<p style="
    padding-top: 1px;
    text-align: center;
    /* size: auto; */
    font-size: 35px;">
<a target="_blank" href="<?php echo html_escape($settings->facebook) ?>"  style="padding: 20px";><i class="fab fa-facebook-f"></i></a>
<a target="_blank" href="<?php echo html_escape($settings->twitter) ?>" style="padding: 20px";><i class="fab fa-twitter"></i></a>
<a target="_blank" href="<?php echo html_escape($settings->linkedin) ?>" style="padding: 20px";><i class="fab fa-linkedin-in"></i></a>
<a target="_blank" href="<?php echo html_escape($settings->instagram) ?>" style="padding: 20px";><i class="fab fa-instagram"></i></a>
</p>


</div>
</div>
</div>        </div>

        </div>



