

<div class="pp-scrollable p-table section section-5 pp-section active" style="z-index: 1;">
  <div class="scroll-wrap">
	<img class="p_absoulte pp_triangle t_left" src="<?php echo base_url();?>assets/images/triangle.png" alt=""> 
	<img class="p_absoulte pp_block" src="<?php echo base_url();?>assets/images/block2.png" alt="">
    <div class="p-section-bg" style="background-image:url(<?php echo base_url();?>assets/images/contact_bg.jpg);"></div>
    <div class="scrollable-content">
      <div class="vertical-centred">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="hosting_title pp_sec_title">
                <h3>Contact Us</h3>
                <h2>Get in Touch with us</h2>
              </div>
              <div class="pp_contact_info">
                <div class="media pp_contact_item">
                  <div class="icon"> <i class="icon_pin_alt"></i> </div>
                  <div class="mmedia-body"> 290 Maryam Springs Suite<br>
                    260, Delhi, India </div>
                </div>
                <div class="media pp_contact_item">
                  <div class="icon"> <i class="icon_mail_alt"></i> </div>
                  <div class="mmedia-body"> <a href="#">Redwoodcube@gmail.com</a> </div>
                </div>
                <div class="media pp_contact_item">
                  <div class="icon"> <i class="icon_phone"></i> </div>
                  <div class="mmedia-body"> <a href="#">(+91) 9811365069</a> </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 contactusfrmcls" >
			<?php   
				if ($this->session->userdata('msg')){
					echo '<div class="text-success">'.$this->session->userdata('msg').'</div>';
				}
					
			?>
			
              <!-- <form action="#" class="row pp_contact_form"> -->
			  <?php echo form_open('contactus/index',['class'=>'row pp_contact_form']);?>
                <div class="col-lg-6">
                  <div class="form-group text_box">
					<!-- <input type="text" name="name" placeholder="Your Name"> -->
					<?php 
                    	echo form_hidden('currentClass', $currentClass);; 
					?>
					<?php 
                    	echo form_input(['type'=>'text','name'=>'username','id'=>'c','placeholder'=>'Your Name*']); 
					?>
					
					<?php   
					if ($this->session->userdata('username'))
					{
						echo '<div class="text-danger">'.$this->session->userdata('username').'</div>';
					}
					
					?>
					
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group text_box">
					<!-- <input type="email" name="email" placeholder="Your email address"> -->
					<?php 
                    	echo form_input(['type'=>'text','name'=>'email','id'=>'email','placeholder'=>'Your email address*']); 
					?>
					<?php 
					if ($this->session->userdata('email'))
					{
						echo '<div class="text-danger">'.$this->session->userdata('email').'</div>';
					}
					
					?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group text_box">
					<!-- <input type="text" name="tell" placeholder="Mobile no"> -->
					<?php 
                    	echo form_input(['type'=>'text','name'=>'mobileno','id'=>'mobileno','placeholder'=>'Mobile no*']); 
					?>
					<?php 
					if ($this->session->userdata('mobileno'))
					{
						echo '<div class="text-danger">'.$this->session->userdata('mobileno').'</div>';
					}
					
					?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group text_box">
					<!-- <input type="text" name="company" placeholder="Company"> -->
					<?php 
                    	echo form_input(['type'=>'text','name'=>'company','id'=>'company','placeholder'=>'For which post you are applying']); 
                    ?>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group text_box">
					<!-- <textarea name="message" id="message" cols="30" placeholder="Your message"></textarea> -->
					<?php
						echo form_textarea(['name'=>'message', 'id'=>'message', 'placeholder'=>'Your message']);
					?>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mb-0">
                    <button class="btn_scroll btn_hover">Send Message</button>
                  </div>
                </div>
			  <?php echo form_close();?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer_area h_footer_dark pos_footer_area security_footer_area"> <img class="leaf_left" src="<?php echo base_url();?>assets/images/leaf-left.png" alt=""> <img class="leaf_right" src="<?php echo base_url();?>assets/images/leaf-right.png" alt="">
  <div class="container">
    <div class="footer_top_six">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="f_widget company_widget"> <a href="index.html" class="f-logo"><img src="<?php echo base_url();?>assets/images/footer-logo.png" alt="logo"></a>
            <p class="mt_40">Redwood Cube- Copyright 2020. All rights reserved.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="f_widget about-widget">
            <h3 class="f-title f_600 w_color f_size_18 mb_40">Important Link</h3>
            <ul class="list-unstyled f_list">
              <li><a href="<?php echo base_url()?>aboutus">About Us</a></li>
              <li><a href="<?php echo base_url()?>servicesDetail">Services</a></li>
              <li><a class="orclient" href="#ourclients" onClick="gotoOurClient1('ourclient');">Our Client</a></li>
              <li><a href="blog.html">BLog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="f_widget about-widget">
            <h3 class="f-title f_600 w_color f_size_18 mb_40">Help?</h3>
            <ul class="list-unstyled f_list">
              <li><a href="<?php echo base_url() ?>career">Career</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#contactusfrm">Contact Us</a></li>
              <li><a class="reqcalll" href="#contactusfrm">Request for Callback</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="f_widget social-widget">
            <h3 class="f-title f_600 w_color f_size_18 mb_40 followupOnlyMobile">Follow Us</h3>
            <div class="f_social_icon"> 
						<a href="https://www.facebook.com/redwoodcube-100781514637848/"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/CubeRedwood"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/company/redwood-cube/"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.instagram.com/redwoodcube/"><i class="fa fa-instagram"></i></a>
						</div>
          </div>
        </div>
      </div>
    </div>
    <div class="pos_footer_bottom justify-content-between d-flex align-items-end"> <img class="pos_women" src="<?php echo base_url();?>assets/images/women.png" alt=""> <img src="<?php echo base_url();?>assets/images/people.png" alt=""> <img class="pos_women" src="<?php echo base_url();?>assets/images/man.png" alt=""> </div>
  </div>
  <svg class="wave_shap" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" opacity="0.302" fill="rgb(73, 69, 140)" d="M22.990,11.999 C22.990,11.999 -62.334,196.188 102.000,90.998 C236.033,5.204 349.217,18.152 512.000,80.998 C773.380,181.909 898.075,49.752 1051.000,15.998 C1316.369,-42.574 1488.518,78.268 1581.000,112.999 C1783.485,189.036 1942.990,61.999 1942.990,61.999 L1942.990,211.999 L22.990,211.999 L22.990,11.999 Z" />
  </svg>
</footer>

<div class="social-button-anim">
  <button class="social-button social-button-toggle" type="button">
    <span class="fa fa-share" aria-hidden="true"></span>
  </button>
  <ul class="list-inline" id="options">
    <li class="option">
      <button class="social-button option1" type="button">
        <span class="fa fa-facebook" aria-hidden="true"></span>
      </button>
    </li>
    <li class="option">
      <button class="social-button option2" type="button">
        <span class="fa fa-twitter" aria-hidden="true"></span>
      </button>
    </li>
    <li class="option">
      <button class="social-button option5" type="button">
        <span class="fa fa-linkedin" aria-hidden="true"></span>
      </button>
    </li>
    <li class="option">
      <button class="social-button option3" type="button">
        <span class="fa fa-instagram" aria-hidden="true"></span>
      </button>
    </li>
  </ul>
</div>

<div class="back-to-top">
        <!-- back to top start -->
        <a target="_blank" href="https://api.whatsapp.com/send?phone=+919811365069"><i class="fa fa-whatsapp"></i></a>
        
    </div>
    <!-- back to top end -->
    <div class="leftbutton">
        <!-- back to top start -->
        <a target="_blank" href="tel:+919811365069"><i class="fa fa-phone"></i></a>
    </div>
    <!-- jquery -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/propper.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
	<script src="<?php echo base_url();?>assets/js/main.js"></script>
  <script>
$(document).ready(function () {
            $('.social-button-toggle').on("click", function () {
                $(this).toggleClass('open');
                $(this).find('span').toggleClass('fa-plus fa-share');
                $('.option').toggleClass('scale-on');
            });
        });


function gotoOurClient1(arg) {
   
   var goto1 = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
   if(arg === 'ourclient'){
     window.location.replace("http://localhost:8080/hari/RC/home#ourclients");
   }
   if(arg === 'quickRequest'){
     window.location.replace("http://localhost:8080/hari/RC/home#quickRequest");
   }
   if(arg === 'contactusfrm'){
     window.location.replace("http://localhost:8080/hari/RC/home#contactusfrm");
   }
    
   if (goto1 == 'home#quickRequest' || goto1 == 'home#ourclients') {
     $("#menu").removeClass('show-menu');
     $("#menu").addClass('close-menu');
   } else {

   }
 }
</script>
</body>
</html>
