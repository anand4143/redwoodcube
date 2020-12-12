<?php  $this->view('templates/frontend/header.php');?>

<section class="breadcrumb_area">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Our Services</h1>
                    <p class="f_400 w_color f_size_16 l_height26">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </section>





<section class="h_security_area">
  <div class="container">
    
   <h2 class="f_600 f_size_30 t_color3 text-center l_height40 mb_40">Two lines about services</h2>
                <div class="row app_service_info">
                    <div class="col-lg-3 col-sm-6">
                        <div class="app_service_item">
							<i class="ti-target app_icon one"></i>
                            <h5 class="f_p f_size_18 f_600 t_color3 mt_30 mb-20"><a href="<?php echo base_url()?>servicesDetail/detail/digitalmarketing" >Digital Marketing</a></h5>
                            <p class="f_400 f_size_15 mb-20 h140">In a world of space-age technology, digital marketing has become the most powerful tool to bring your beast mode on and take your business and work module to another level.</p>
                            <a href="<?php echo base_url()?>servicesDetail/detail/digitalmarketing" class="learn_btn_two c_violet">Learn More <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="app_service_item">
                            <i class="ti-world app_icon one"></i>
                            <h5 class="f_p f_size_18 f_600 t_color3 mt_30 mb-20"><a href="<?php echo base_url()?>servicesDetail/detail/webdevelopment">Web Development</a></h5>
                            <p class="f_400 f_size_15 mb-20 h140">A lot of time and money is spent on the packaging or appearance of a product, a website or application, which means customers do get influenced by how a product or a website looks.</p>
                            <a href="<?php echo base_url()?>servicesDetail/detail/webdevelopment" class="learn_btn_two c_violet">Learn More <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="app_service_item">
                            <i class="ti-package app_icon one"></i>
                            <h5 class="f_p f_size_18 f_600 t_color3 mt_30 mb-20"><a href="<?php echo base_url()?>servicesDetail/detail/businessdevelopment" >Business Development</a></h5>
                            <p class="f_400 f_size_15 mb-20 h140">BD is a process of creating strategies and plans to grow a business, expand operations, and to create a more stable platform for the company.</p>
                            <a href="<?php echo base_url()?>servicesDetail/detail/businessdevelopment" class="learn_btn_two c_violet">Learn More <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="app_service_item">
						<i class="ti-bar-chart app_icon one"></i>
                            <h5 class="f_p f_size_18 f_600 t_color3 mt_30 mb-20"><a href="<?php echo base_url()?>servicesDetail/detail/dataanalysis">Data Analytics</a></h5>
                            <p class="f_400 f_size_15 mb-20 h140">It is a complex but highly effective process of inspecting, cleansing, transforming and modelling data with the goal of discovering useful information and using it as an infinity gauntlet to bring your business module to another level.</p>
                            <a href="<?php echo base_url()?>servicesDetail/detail/dataanalysis" id="contactusfrm" class="learn_btn_two c_violet">Learn More <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
    
  </div>
</section>

<?php  $this->view('templates/frontend/footer.php');?>
