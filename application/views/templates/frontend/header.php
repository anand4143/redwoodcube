<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title>Redwood Cube</title>    
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/fevicon.png" type="image/png">
    <?= link_tag('assets/css/bootstrap.min.css'); ?>
    <?= link_tag('assets/vendors/themify-icon/themify-icons.css'); ?>
    <?= link_tag('assets/vendors/simple-line-icon/simple-line-icons.css'); ?>
    <?= link_tag('assets/vendors/font-awesome/css/all.css'); ?>
    <?= link_tag('assets/vendors/flaticon/flaticon.css'); ?>
    <?= link_tag('assets/vendors/animation/animate.css'); ?>
    <?= link_tag('assets/vendors/owl-carousel/assets/owl.carousel.min.css'); ?>
    <?= link_tag('assets/vendors/elagent/style.css'); ?>
    <?= link_tag('assets/css/style.css'); ?>
	<?= link_tag('assets/css/responsive.css'); ?>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
</head>
<body>
	
<div id="preloader">
  <div id="ctn-preloader" class="ctn-preloader">
    <div class="animation-preloader">
      <div class="spinner"></div>
      <div class="txt-loading"> <span data-text-preloader="R" class="letters-loading"> R </span> <span data-text-preloader="E" class="letters-loading"> E </span> <span data-text-preloader="D" class="letters-loading"> D </span> <span data-text-preloader="W" class="letters-loading"> W </span> <span data-text-preloader="O" class="letters-loading"> O </span> <span data-text-preloader="O" class="letters-loading"> O </span> <span data-text-preloader="D" class="letters-loading"> D </span> <span data-text-preloader="C" class="letters-loading"> C </span> <span data-text-preloader="U" class="letters-loading"> U </span> <span data-text-preloader="B" class="letters-loading"> B </span> <span data-text-preloader="E" class="letters-loading"> E </span> </div>
      <p class="text-center">Loading</p>
    </div>
    <div class="loader">
      <div class="row">
        <div class="col-3 loader-section section-left">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-left">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-right">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-right">
          <div class="bg"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<header class="full_header shadow-sm">
  <div class="float-left"> <a class="logo" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"></a> </div>
  <div class="float-right d-none d-md-block header_footer header-soscial">
  	<ul class="list-unstyled">
					<li><a href="https://www.facebook.com/redwoodcube-100781514637848/" class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/CubeRedwood" class="twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.linkedin.com/company/redwood-cube/" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="https://www.instagram.com/redwoodcube/" class="instagram"><i class="fa fa-instagram"></i></a></li>
        </ul>
  </div>
  <div class="float-right d-none d-md-block">
    <div class="mobileno"><i class="fa fa-phone"></i> +91 9811365069</div>
  </div>
  <div class="float-right d-none d-md-block">
    <div class="emailadd"><i class="fa fa-envelope"></i> Redwoodcube@gmail.com</div>
  </div>
  <div class="float-right">
    <div class="bar_menu"> <span></span> <span></span> <span></span> </div>
  </div>
</header>
<div class="hamburger-menu-wrepper" id="menu">
  <div class="animation-box"> <i class="fa fa-times close_icon"></i>
    <div class="menu-box d-table navbar">
      <ul class="navbar-nav justify-content-end menu offcanfas_menu">
          <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url() ?>"> Home </a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>aboutus"> About Us </a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>servicesDetail"> Services </a> 
          <ul>
          <li class="nav-item"> <a class="nav-link" style="font-size: 20px;" href="<?php echo base_url() ?>servicesDetail/detail/digitalmarketing">Digital Marketing</a>
              </li>
              <li class="nav-item"> <a class="nav-link" style="font-size: 20px;" href="<?php echo base_url() ?>servicesDetail/detail/webdevelopment">Web Development</a>
              </li>
              <li class="nav-item"> <a class="nav-link" style="font-size: 20px;" href="<?php echo base_url() ?>servicesDetail/detail/businessdevelopment">Business Development</a>
              </li>
              <li class="nav-item"> <a class="nav-link" style="font-size: 20px;" href="<?php echo base_url() ?>servicesDetail/detail/dataanalysis">Data Analytics</a>
              </li>
          </ul>
          </li>
          <li class="nav-item"> <a class="nav-link orclient" href="#ourclients" onClick="gotoOurClient('ourclient');"> Our Client </a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>blog"> Blog </a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>ourteam"> Our Team </a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>career"> Career </a> </li>
          <li class="nav-item"> <a class="nav-link reqcalll" href="#quickRequest" id="ansh" onClick="gotoOurClient('contactusfrm');"> Request for Callback </a> </li>
      </ul>
      <div class="header_footer">
        <h5>Follow US</h5>
        <ul class="list-unstyled">
				<li><a href="https://www.facebook.com/redwoodcube-100781514637848/" class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/CubeRedwood" class="twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.linkedin.com/company/redwood-cube/" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="https://www.instagram.com/redwoodcube/" class="instagram"><i class="fa fa-instagram"></i></a></li>
        </ul>
        <p>Redwood Cube- Copyright 2019. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).on('click', 'a.reqcalll', function (event) {
      event.preventDefault();

      $('html, body').animate({
          scrollTop: $($.attr(this, 'href')).offset().top -100
      }, 1000);
      $("#menu").removeClass('show-menu');
      $("#menu").addClass('close-menu');
  });

  $(document).on('click', 'a.orclient', function (event) {
      event.preventDefault();
      $('html, body').animate({
          scrollTop: $($.attr(this, 'href')).offset().top -100
      }, 1000);
      $("#menu").removeClass('show-menu');
      $("#menu").addClass('close-menu');
  });

	// function gotoQuickRequest(){
  //   alert("hello");
	// 	var goto1 = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
	// 	if(goto1 == 'home#quickRequest' || goto1 == 'home#ourclients'){
  //     $('html, body').animate({
  //                   scrollTop: $("#quickRequest").offset().top
  //               }, 2000);
	// 		$("#menu").removeClass('show-menu');
	// 		$("#menu").addClass('close-menu');
	// 	}else{

	// 	}
	// }

	// function gotoOurClient(){
	// 	var goto1 = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
	// 	if(goto1 == 'home#quickRequest' || goto1 == 'home#ourclients'){
	// 		$("#menu").removeClass('show-menu');
	// 		$("#menu").addClass('close-menu');
	// 	}else{

	// 	}
	// }

  function gotoOurClient(arg) {
   
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
