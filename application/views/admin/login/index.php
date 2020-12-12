<?php //$this->view('templates/admin/header.php'); ?>

<!-- <h1>anand shukla</h1> -->

<?php //$this->view('templates/admin/footer.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <?= link_tag('assets/dist/css/style.css'); ?>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
   
	<!-- HK Wrapper -->
	<div class="hk-wrapper">
        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <div class="container-fluid">
                <div class="row">				
						<div class="col-xl-12 pa-0">
							<div class="auth-form-wrap py-xl-0 py-50">
								<div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
									<h1 class="display-4 mb-5">Redwoodcube Admin Panel</h1>
									<!-- <p class="mb-30">Sign in to your account and enjoy.</p> -->
                                    <p class="help-block text-danger">
                                    <?php
                                     echo $this->session->flashdata('error');?>
                                    </p>
											<?php echo form_open('admin/login/userLogin'); ?>
											<div class="form-group">
												<?php echo form_input(['class' => 'form-control', 'name' => 'username', 'type' => 'email', 'placeholder' => 'Email']);?>
                                                <?php echo form_error('username', '<span class="help-block text-danger">', '</span>'); ?>
											</div>
											<div class="form-group">
												<div class="input-group">
													<?php echo form_input(['class' => 'form-control', 'placeholder' => 'Password', 'id' => 'password', 'name' => 'password', 'type' => 'password']); ?>
													<div class="input-group-append">
														<span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                                        
													</div>
                                                   
												</div>
                                                <?php echo form_error('password', '<span class="help-block text-danger">', '</span>'); ?>
                                            </div>
                                           
											
											<button class="btn btn-primary btn-block" type="submit">Login</button>
											
								   
								</div>
							</div>
						</div>
					</span>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
	<!-- /HK Wrapper -->
    
   

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="<?php echo base_url();?>assets/dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="<?php echo base_url();?>assets/dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Owl JavaScript -->
<script src="<?php echo base_url();?>assets/vendors/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- FeatherIcons JavaScript -->
<script src="<?php echo base_url();?>assets/dist/js/feather.min.js"></script>

<!-- Init JavaScript -->
<script src="<?php echo base_url();?>assets/dist/js/init.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/login-data.js"></script>
<script type="text/javascript">


$( document ).ready(function() {
    $('#loginButton').on('click',function(){
        $("#LoginFrm").show();
        //$("#loginButton").hide();
    });
});
</script>
</body>
</html>

<?php  //include('admin_footer.php'); ?>
