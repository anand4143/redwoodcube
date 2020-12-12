<?php  $this->view('templates/frontend/header.php');?>
 
   
    <!-- Hero Area Start -->
    <!-- Breadcumb area start  -->
    <section class="breadcumb-area breadcrumb-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-inner">
                        <h2 class="title">Enquiry Now</h2>
                        <ul class="page-lists">
                            <li><a href="<?php echo base_url()?>">Home</a></li>
                            <li><a class="active" href="<?php echo base_url()?>enquiry">Enquiry Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End -->
    
    
    <section class="contact-area" >
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="left-content-area">
                        <h4 class="title">Get In Touch</h4>
                        <ul class="info-list">
                            <li>
                               <div class="single-info-item">
                                    <div class="icon">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="content">
                                        <span class="details">SS- 1888,1889, circle, Aashiyana,Lucknow</span>
                                    </div>
                               </div>
                            </li>
                            <li>
                               <div class="single-info-item">
                                    <div class="icon">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <div class="content">
                                        <span class="details">+91-7570005000</span>
                                        <span class="details">+91 9919999799</span>
                                    </div>
                               </div>
                            </li>
                            <li>
                               <div class="single-info-item">
                                    <h4>Start A Projects</h4>
                                    <p>Continuous learning is our motto. Using the latest musical technology, we provide a multi – channel promotion of the talent. “Muzic Series Entertainment” will also help you in reaching the apex by providing the necessary platform.</p>
                               </div>
                            </li>
                            <li>
                              <h4>Say Hello</h4>
                                   <p>For anything and everything video related, just get in touch and we’ll be happy to chat with you.</p>
                               <div class="single-info-item">
                                   
                                    <div class="icon">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <div class="content">
                                        <span class="details">muzicseriesentertainment@gmail.com</span>
                                    </div>
                               </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                   <div class="right-content-area">
                        <h4 class="title">Please fill in the form here</h4>
                        <span class="text-green text-success"><?php echo $this->session->flashdata('Success'); ?></span>
                        <span class="text-red"><?php echo $this->session->flashdata('Error'); ?></span>
                        <!-- <form id="contactform" class="contact-form"> -->
                        <?php echo form_open('enquiry/saveEnquiry',['class'=>'contact-form']);?>
                            <div class="form-group">
                            <label for="name">Name <span class="required" style="color:red;">*</span></label>                               
                                <?php echo form_input(['class'=>'form-control', "value"=> set_value('name'), "name"=>"name", "id"=>"name","size"=>"30","placeholder"=>"Enter your name"]);?>
                                <?php echo form_error('name');  ?>
                            </div>
                            <div class="form-group">
                            <label for="name">Email <span class="required" style="color:red;">*</span></label>                                
                                <?php echo form_input(['class'=>'form-control', "value"=> set_value('email'), "name"=>"email", "id"=>"email","size"=>"30","placeholder"=>"Enter your email"]);?>
                                <?php echo form_error('email');  ?>
                            </div>
                            <div class="form-group">
                            <label for="name">Phone <span class="required" style="color:red;">*</span></label> 
                                <?php echo form_input(['class'=>'form-control', "value"=> set_value('phone'), "name"=>"phone", "id"=>"phone","size"=>"30","placeholder"=>"Enter your Phone"]);?>
                                <?php echo form_error('phone');  ?>
                            </div>
                            <!-- <div class="form-group">
                            <label for="name">Budget <span class="required" style="color:red;">*</span></label>
                                <?php //echo form_input(['class'=>'form-control', "value"=> set_value('budget') ,"name"=>"budget", "id"=>"budget","size"=>"30",'maxlength'=> 16,"placeholder"=>"Enter your Budget"]);?>
                                <?php //echo form_error('budget');  ?>
                            </div> -->
                            <div class="form-group text-area">                                
                                <?php echo form_textarea(['class'=>'form-control', "name"=>"enquirytext", "id"=>"enquirytext","placeholder"=>"How can we help you ?"]);?>
                                <?php echo form_error('enquirytext');  ?>
                            </div>
                            <div class="submit-box">
                                <button type="submit" class="submit-btn">Submit</button>
                            </div>
                        </form>
                   </div>
                </div>
            </div>
        </div>
    </section>
    

    
<?php  $this->view('templates/frontend/footer.php');?>