<?php  $this->view('templates/frontend/header.php');?>
 
    <!-- Hero Area Start -->
    <!-- Breadcumb area start  -->
    <section class="breadcumb-area breadcrumb-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-inner">
                        <h2 class="title">Services</h2>
                        <ul class="page-lists">
                            <li><a href="<?php echo base_url()?>">Home</a></li>
                            <li><a class="active" href="<?php echo base_url()?>services">Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End -->
    <section class="servicescon">
    	<div class="container">
    		<h2>Our Services</h2>
    		<div class="row mt-5">
			<div class="col-md-3">
    				<div class="servicesimg">
						<a href="<?php echo base_url()?>recording-studio">
							<img src="<?php echo base_url();?>assets/images/s6.jpg"/>
						</a>
					</div>
    				<div class="servicestxt">
					<a href="<?php echo base_url()?>recording-studio"><p>Recording Studio</p></a>
    					<a href="<?php echo base_url()?>recording-studio" class="btn btn-default"><span>Know More</span></a>
    				</div>
    			</div>

    			<div class="col-md-3">
    				<div class="servicesimg">
						<a href="<?php echo base_url()?>audio-production">
							<img src="<?php echo base_url();?>assets/images/s1.jpg"/>
						</a>
					</div>
    				<div class="servicestxt">
					<a href="<?php echo base_url()?>audio-production"><p>Audio Production</p></a>
    					<a href="<?php echo base_url()?>audio-production" class="btn btn-default"><span>Know More</span></a>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="servicesimg">
						<a href="<?php echo base_url()?>video-production">
							<img src="<?php echo base_url();?>assets/images/s2.jpg"/></div>
						</a>
    					<div class="servicestxt">
							<a href="<?php echo base_url()?>video-production"><p>Video Production / Film making</p></a>
    						<a href="<?php echo base_url()?>video-production" class="btn btn-default"><span>Know More</span></a>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="servicesimg">
						<a href="<?php echo base_url()?>photography">
							<img src="<?php echo base_url();?>assets/images/s3.jpg"/></div>
						</a>
    				<div class="servicestxt">
						<a href="<?php echo base_url()?>photography"><p>Photography</p></a>
    					<a href="<?php echo base_url()?>photography" class="btn btn-default"><span>Know More</span></a>
    				</div>
    			</div>
    			
    		</div>
    		
    		<div class="row mt-4">
			<div class="col-md-3">
    				<div class="servicesimg">
						<a href="<?php echo base_url()?>animation">						
							<img src="<?php echo base_url();?>assets/images/s4.jpg"/>
						</a>
					</div>
    				<div class="servicestxt">
						<a href="<?php echo base_url()?>animation">	<p>Animation</p></a>
						<a href="<?php echo base_url()?>animation" class="btn btn-default"><span>Know More</span></a>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="servicesimg">
						<a href="<?php echo base_url()?>launches">
							<img src="<?php echo base_url();?>assets/images/s5.jpg"/>
						</a>
					</div>
    				<div class="servicestxt">
						<a href="<?php echo base_url()?>launches"><p>Launches, Distribution And Market Release</p></a>
						<a href="<?php echo base_url()?>launches" class="btn btn-default"><span>Know More</span></a>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="servicesimg">
						<a href="<?php echo base_url()?>event-management">
							<img src="<?php echo base_url();?>assets/images/s6.jpg"/>
						</a>
						</div>
    				<div class="servicestxt">
						<a href="<?php echo base_url()?>event-management"><p>Events And Talent Management</p></a>
						<a href="<?php echo base_url()?>event-management" class="btn btn-default"><span>Know More</span></a>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="servicesimg">
						<a target="_blank" href="https://digitalphin.wordpress.com/">
							<img src="<?php echo base_url();?>assets/images/s7.jpg"/>
						</a>
					</div>
    				<div class="servicestxt">
						<a target="_blank" href="https://digitalphin.wordpress.com/"><p>Digital Promotion</p></a>
						<a target="_blank" href="https://digitalphin.wordpress.com/" class="btn btn-default"><span>Know More</span></a>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="servicesimg">
						<a  target="_blank" href="http://mseifm.com/">
							<img src="<?php echo base_url();?>assets/images/s8.jpg"/>
						</a>
					</div>
    				<div class="servicestxt">
						<a  target="_blank" href="http://mseifm.com/"><p>Education</p></a>
						<a  target="_blank" href="http://mseifm.com/" class="btn btn-default"><span>Know More</span></a>
    				</div>
    			</div>
    		</div>
    		
    	</div>
    </section>
    
<?php  $this->view('templates/frontend/footer.php');?>
