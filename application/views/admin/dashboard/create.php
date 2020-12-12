<?php $this->view('templates/header.php'); ?>

<!-- Row -->
<div class="row">
	<div class="col-xl-12">
		<div class="d-flex align-items-center justify-content-between mt-40 mb-20">
			<h4>Create SEO Content</h4>
            <span id="notification"><?php echo $this->session->flashdata('success'); ?></span>
            <span id="notification"><?php echo $this->session->flashdata('error'); ?></span>
		</div>
		 <?php 
				$attributes = array('class' => 'form-horizontal', 'id' => 'frm', 'name' => 'frm');
				echo form_open('dashboard/save/', $attributes);
		 ?>
		<div class="card">
		   <!-- <div class="card-header">
			  <strong>User</strong>
		   </div> -->
		   <div class="card-body">
           <div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">Title</label>
					<div class="col-md-9">
					   <textarea class="form-control" id="title"  name="title" placeholder="Enter title"></textarea>
					   <?php echo form_error('title', '<span class="help-block text-danger">', '</span>'); ?>
					</div>
                 </div>
                <div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">Keywords</label>
					<div class="col-md-9">
					   <textarea class="form-control" id="keywords"  name="keywords" placeholder="Enter keywords"></textarea>
					   <?php echo form_error('keywords', '<span class="help-block text-danger">', '</span>'); ?>
					</div>
                 </div>
                 
                 <div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">Description</label>
					<div class="col-md-9">
					   <textarea class="form-control" id="description"  name="description" placeholder="Enter description"></textarea>
					   <?php echo form_error('description', '<span class="help-block text-danger">', '</span>'); ?>
					</div>
                 </div>
                

                 <div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">Author</label>
					<div class="col-md-9">
					   <textarea class="form-control" id="author"  name="author" placeholder="Enter author"></textarea>
					   <?php echo form_error('author', '<span class="help-block text-danger">', '</span>'); ?>
					</div>
                 </div>
                 <div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">Robots</label>
					<div class="col-md-9">
					   <textarea class="form-control" id="robots"  name="robots" placeholder="Enter robots"></textarea>
					   <?php echo form_error('robots', '<span class="help-block text-danger">', '</span>'); ?>
					</div>
                 </div>
                 <div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">og:title</label>
					<div class="col-md-9">
					   <textarea class="form-control" id="ogtitle"  name="ogtitle" placeholder="Enter og:title"></textarea>
					   <?php echo form_error('ogtitle', '<span class="help-block text-danger">', '</span>'); ?>
					</div>
                 </div>
                 <div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">og:description</label>
					<div class="col-md-9">
					   <textarea class="form-control" id="ogdescription"  name="ogdescription" placeholder="Enter og:description"></textarea>
					   <?php echo form_error('ogdescription', '<span class="help-block text-danger">', '</span>'); ?>
					</div>
                 </div>
                 <div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">og:image</label>
					<div class="col-md-9">
					   <textarea class="form-control" id="ogimage"  name="ogimage" placeholder="Enter og:image"></textarea>
					   <?php echo form_error('ogimage', '<span class="help-block text-danger">', '</span>'); ?>
					</div>
                 </div>
				 
				 
		   </div>
		   <div class="card-footer ">
			  <button class="btn btn-sm btn-primary" type="submit">
			  <i class="fa fa-dot-circle-o"></i> Submit</button>
			  <button class="btn btn-sm btn-danger" type="reset">
			  <i class="fa fa-ban"></i> Reset</button>
		   </div>
		</div>
		 <?php echo form_close();?>
	</div>
</div>
<!-- /Row -->

<?php  $this->view('templates/footer.php'); ?>

<script type="text/javascript">
$(document).ready(function() {
	$("#frmUser").validate({
		rules: {
			userName: {
				required: true
			},
			email:{
				required: true,
				email : true
			},
			firstName:{
				required:true
			},
			lastName:{
				required : true
			}
		},
		messages: {
			userName: {
				required: "Please Enter user name"
			},
			email{
				required : "Please enter email",
				email: "Your email address must be in the format of name@domain.com"
			}
			firstName: {
				required: "Please enter first name"
			},
			lastName: {
				required: "Please enter last name"
			}
		}
	});
});		
</script>