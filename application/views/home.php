<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redwood Cube</title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/fevicon.png" type="image/png">
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
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
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
    <div class="float-left"> <a class="logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo"></a> </div>
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
          <li class="nav-item"> <a class="nav-link orclient" href="#ourclients" onClick="gotoOurClient();"> Our Client </a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>blog"> Blog </a> </li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>ourteam"> Our Team </a> </li>
          <li class="nav-item"> <a class="nav-link reqcalll" href="#" id="ansh" onClick="gotoOurClient('contactusfrm');"> Request for Callback </a> </li>
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
  <section class="h_security_banner_area"> <img class="p_absoulte s_shap" src="<?php echo base_url(); ?>assets/images/shap.png" alt="">
    <div class="s_round one"></div>
    <div class="s_round two"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex align-items-center">
          <div class="security_banner_content">
            <h2 class="wow fadeInUp" data-wow-delay="0.3s">Welcome to The Planet Redwood Cube</h2>
            <p class="f_400 w_color l_height28 wow fadeInUp" data-wow-delay="0.4s">Grade up Your Business Cubes, we will transport you to the new world of Business Marketing.</p>
            <div class="action_btn d-flex align-items-center mt_40 wow fadeInUp" data-wow-delay="0.6s">
              <a href="<?php echo base_url() ?>servicesDetail" class="btn_hover app_btn">Our Services</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
          <div class="spliet_slider_img"> <img class="phone_two" src="<?php echo base_url(); ?>assets/images/infographic5.png" alt=""> </div>
        </div>
      </div>
    </div>
  </section>
  <section class="h_security_area">
    <div class="container" style="max-width: 900px;">
      <div class="hosting_title security_title text-center">
        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Our Services</h2>
      </div>
      <div class="position-relative servicesslider">
        <div class="slider owl-carousel">
          <div>
            <div class="row">
              <div class="col-12 col-md-5">
                <div class="wow fadeInUp" data-wow-delay="0.4s"><img src="<?php echo base_url(); ?>assets/images/work2.png" alt=""></div>
              </div>
              <div class="col-12 col-md-7">
                <div class="media-body agency_service_item wow fadeInUp mt-5" data-wow-delay="0.4s">
                  <h4>Digital Marketing</h4>
                  <p>In a world of space-age technology, digital marketing has become the most powerful tool to bring your beast mode on and take your business and work module to another level.</p>
                  <p class="mb-0 float-right"><a href="<?php echo base_url() ?>servicesDetail/detail/digitalmarketing">Read More</a><i class="fa fa-angle-right"></i></p>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div class="row">
              <div class="col-12 col-md-5">
                <div class="wow fadeInUp" data-wow-delay="0.4s"><img src="<?php echo base_url(); ?>assets/images/tracking_banner_img.png" alt=""></div>
              </div>
              <div class="col-12 col-md-7">
                <div class="media-body agency_service_item wow fadeInUp mt-5" data-wow-delay="0.4s">
                  <h4>Web Development</h4>
                  <p>A lot of time and money is spent on the packaging or appearance of a product, a website or application, which means customers do get influenced by how a product or a website looks.</p>
                  <p class="mb-0 float-right"><a href="<?php echo base_url() ?>servicesDetail/detail/webdevelopment">Read More</a><i class="fa fa-angle-right"></i></p>
                </div>
              </div>
            </div>
          </div>

          <div>
            <div class="row">
              <div class="col-12 col-md-5">
                <div class="wow fadeInUp" data-wow-delay="0.4s"><img src="<?php echo base_url(); ?>assets/images/action_image.png" alt=""></div>
              </div>
              <div class="col-12 col-md-7">
                <div class="media-body agency_service_item wow fadeInUp mt-5" data-wow-delay="0.4s">
                  <h4>Business Development</h4>
                  <p>BD is a process of creating strategies and plans to grow a business, expand operations, and to create a more stable platform for the company.</p>
                  <p class="mb-0 float-right"><a href="<?php echo base_url() ?>servicesDetail/detail/businessdevelopment">Read More</a><i class="fa fa-angle-right"></i></p>
                </div>
              </div>
            </div>
          </div>


          <div>
            <div class="row">
              <div class="col-12 col-md-5">
                <div class="wow fadeInUp" data-wow-delay="0.4s"><img src="<?php echo base_url(); ?>assets/images/pie.png" alt=""></div>
              </div>
              <div class="col-12 col-md-7">
                <div class="media-body agency_service_item wow fadeInUp mt-5" data-wow-delay="0.4s">
                  <h4>Data Analytics</h4>
                  <p>It is a complex but highly effective process of inspecting, cleansing, transforming and modelling data with the goal of discovering useful information and using it as an infinity gauntlet to bring your business module to another level.</p>
                  <p class="mb-0 float-right"><a href="<?php echo base_url() ?>servicesDetail/detail/dataanalysis">Read More</a><i class="fa fa-angle-right"></i></p>
                </div>
              </div>
            </div>
          </div>




        </div>
        <div class="slider-counter"></div>
      </div>
    </div>
  </section>
  <section class="h_security_area bg-light">
    <div class="container">
      <div class="hosting_title security_title text-center">
        <h2 class="wow fadeInUp" data-wow-delay="0.2s">How We Work</h2>
      </div>

      <div class="how-we-work owl-carousel">
        <div class="item">
          <div class="media-body wow fadeInUp mt-2 position-relative border-radius" data-wow-delay="0.4s">
            <div class="howweimg"><img src="<?php echo base_url(); ?>assets/images/whats.png" /></div>
            <div class="position-absolute how-steps">STEP 1</div>
            <div class="position-absolute howwe-txt">
              <h4>Discuss</h4>
              <!-- <p>Every client has their different needs and requirement. Because everyone has their own business goals which are different from one another and approach towards them is also different. So, the first step of ours is to understand, what exactly you want from a digital marketing platform.</p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="media-body wow fadeInUp mt-2 position-relative border-radius" data-wow-delay="0.4s">
            <div class="howweimg"><img src="<?php echo base_url(); ?>assets/images/study-b.png" /></div>
            <div class="position-absolute how-steps">STEP 2</div>
            <div class="position-absolute howwe-txt">
              <h4>Plan</h4>
              <!-- <p>Business – Product- Customer </p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="media-body wow fadeInUp mt-2 position-relative border-radius" data-wow-delay="0.4s">
            <div class="howweimg"><img src="<?php echo base_url(); ?>assets/images/set-goals.png" /></div>
            <div class="position-absolute how-steps">STEP 3</div>
            <div class="position-absolute howwe-txt">
              <h4>Blueprint</h4>
              <!-- <p>According to your demands and need of the product or service. Making the blueprint of our path to reach accomplish the goal and share with you.</p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="media-body wow fadeInUp mt-2 position-relative border-radius" data-wow-delay="0.4s">
            <div class="howweimg"><img src="<?php echo base_url(); ?>assets/images/progress.png" /></div>
            <div class="position-absolute how-steps">STEP 4</div>
            <div class="position-absolute howwe-txt">
              <h4>Testing</h4>
              <!-- <ul>
                  <li>To check the progress of our plans and strategy and what we are doing on a daily bases is shared with you So, you also aware of the tasks to be done and implement by us and get proper reports for that. We believe in transparency So, that our customers feel comfortable and updated about the status of their penny.</li>
                  <li>Weekly and monthly measurement reports.</li>
                  <li>And, continues upgrading strategy for the business. </li>
                </ul> -->
            </div>
          </div>
        </div>

        <div class="item">
          <div class="media-body wow fadeInUp mt-2 position-relative border-radius" data-wow-delay="0.4s">
            <div class="howweimg"><img src="<?php echo base_url(); ?>assets/images/results-b.png" /></div>
            <div class="position-absolute how-steps">STEP 5</div>
            <div class="position-absolute howwe-txt">
              <h4>Outcome / Results</h4>
              <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
            </div>
          </div>
        </div>

        <div class="item">
          <div class="media-body wow fadeInUp mt-2 position-relative border-radius" data-wow-delay="0.4s">
            <div class="howweimg"><img src="<?php echo base_url(); ?>assets/images/optimization.png" /></div>
            <div class="position-absolute how-steps">STEP 6</div>
            <div class="position-absolute howwe-txt">
              <h4>Optimization</h4>
              <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="h_security_area" id="ourclients">
    <div class="container">
      <div class="hosting_title security_title text-center">
        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Our Clients</h2>
      </div>

      <div class="our-client owl-carousel">
        <div class="item">
          <div class="media-body wow fadeInUp mt-2" data-wow-delay="0.4s">
            <div class="ex_team_item">
              <img src="<?php echo base_url(); ?>assets/images/targetpcs.jpg" alt="">
              <div class="team_content">
                <a href="https://targetpcslucknow.com/">
                  <h3 class="f_p f_size_16 f_600 t_color3">Target PCS Lucknow</h3>
                </a>
              </div>
              <div class="hover_content">
                <div class="n_hover_content">
                  <p>When Canada’s #1 LGBTQ streaming content provider comes asking for ideas on how to increase national subscriptions and raise awareness across the country, there’s really only one way to answer… HALLELOO!</p>
                  <a href="https://targetpcslucknow.com/">
                    <h3 class="f_p f_size_16 f_600 w_color">See More</h3>
                  </a>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="media-body wow fadeInUp mt-2" data-wow-delay="0.4s">
            <div class="ex_team_item">
              <img src="<?php echo base_url(); ?>assets/images/muzic.jpg" alt="">
              <div class="team_content">
                <a href="http://muzicseries.com/">
                  <h3 class="f_p f_size_16 f_600 t_color3">Muzic Series Entertainment</h3>
                </a>
              </div>
              <div class="hover_content">
                <div class="n_hover_content">
                  <p>Arc’teryx is one of the world’s most recognized high-performance athletic brands and they're known for technical apparel designed to withstand time and the elements.</p>
                  <a href="http://muzicseries.com/">
                    <h3 class="f_p f_size_16 f_600 w_color">See More</h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="media-body wow fadeInUp mt-2" data-wow-delay="0.4s">
            <div class="ex_team_item">
              <img src="<?php echo base_url(); ?>assets/images/anandi.jpg" alt="">
              <div class="team_content">
                <a href="https://www.facebook.com/pg/anandihealthfood/">
                  <h3 class="f_p f_size_16 f_600 t_color3">Anandi Health Food Traders</h3>
                </a>
              </div>
              <div class="hover_content">
                <div class="n_hover_content">
                  <p>When a globally recognized wellness brand that promotes healthy living, eating and life choices asks you to bring their story to life in the digital space, the answer is quite simple.</p>
                  <a href="https://www.facebook.com/pg/anandihealthfood/">
                    <h3 class="f_p f_size_16 f_600 w_color">See More</h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="media-body wow fadeInUp mt-2" data-wow-delay="0.4s">
            <div class="ex_team_item">
              <img src="<?php echo base_url(); ?>assets/images/mse.jpg" alt="">
              <div class="team_content">
                <a href="https://mseifm.com/">
                  <h3 class="f_p f_size_16 f_600 t_color3">MSE IFM</h3>
                </a>
              </div>
              <div class="hover_content">
                <div class="n_hover_content">
                  <p>When a globally recognized wellness brand that promotes healthy living, eating and life choices asks you to bring their story to life in the digital space, the answer is quite simple.</p>
                  <a href="https://mseifm.com/">
                    <h3 class="f_p f_size_16 f_600 w_color">See More</h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="media-body wow fadeInUp mt-2" data-wow-delay="0.4s">
            <div class="ex_team_item">
              <img src="<?php echo base_url(); ?>assets/images/less.png" alt="">
              <div class="team_content">
                <a href="http://www.home.lesssuperstars.com/">
                  <h3 class="f_p f_size_16 f_600 t_color3">Less superstar</h3>
                </a>
              </div>
              <div class="hover_content">
                <div class="n_hover_content">
                  <p>When a globally recognized wellness brand that promotes healthy living, eating and life choices asks you to bring their story to life in the digital space, the answer is quite simple.</p>
                  <a href="http://www.home.lesssuperstars.com/">
                    <h3 class="f_p f_size_16 f_600 w_color">See More</h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="media-body wow fadeInUp mt-2" data-wow-delay="0.4s">
            <div class="ex_team_item">
              <img src="<?php echo base_url(); ?>assets/images/indian-railways.png" alt="">
              <div class="team_content">
                <a href="https://indianrailways.gov.in/">
                  <h3 class="f_p f_size_16 f_600 t_color3">Railways</h3>
                </a>
              </div>
              <div class="hover_content">
                <div class="n_hover_content">
                  <p>Indian Railways.</p>
                  <a href="https://indianrailways.gov.in/">
                    <h3 class="f_p f_size_16 f_600 w_color">See More</h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="media-body wow fadeInUp mt-2" data-wow-delay="0.4s">
            <div class="ex_team_item">
              <img src="<?php echo base_url(); ?>assets/images/industries.png" alt="">
              <div class="team_content">
                <a href="http://uphorticulture.gov.in/hi">
                  <h3 class="f_p f_size_16 f_600 t_color3">Uttar Pradesh rajkiye udyan vibhag</h3>
                </a>
              </div>
              <div class="hover_content">
                <div class="n_hover_content">
                  <p>Uttar Pradesh rajkiye udyan vibhag.</p>
                  <a href="http://uphorticulture.gov.in/hi">
                    <h3 class="f_p f_size_16 f_600 w_color">See More</h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="media-body wow fadeInUp mt-2" data-wow-delay="0.4s">
            <div class="ex_team_item">
              <img src="<?php echo base_url(); ?>assets/images/irrigation.png" alt="">
              <div class="team_content">
                <a href="http://idup.gov.in/">
                  <h3 class="f_p f_size_16 f_600 t_color3">Uttar Pradesh irrigation department</h3>
                </a>
              </div>
              <div class="hover_content">
                <div class="n_hover_content">
                  <p>Uttar Pradesh irrigation department.</p>
                  <a href="http://idup.gov.in/">
                    <h3 class="f_p f_size_16 f_600 w_color">See More</h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="media-body wow fadeInUp mt-2" data-wow-delay="0.4s">
            <div class="ex_team_item">
              <img src="<?php echo base_url(); ?>assets/images/diid.png" alt="">
              <div class="team_content">
                <a href="http://www.udyogbandhu.com/">
                  <h3 class="f_p f_size_16 f_600 t_color3">Uttar Pradesh film udyog bandhu</h3>
                </a>
              </div>
              <div class="hover_content">
                <div class="n_hover_content">
                  <p>Uttar Pradesh film udyog bandhu.</p>
                  <a href="http://www.udyogbandhu.com/">
                    <h3 class="f_p f_size_16 f_600 w_color">See More</h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        

      </div>

    </div>
  </section>

  <section class="h_security_area bg-light" id="quickRequest" >
    <div class="container">
      <div class="hosting_title security_title text-center">
        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Quick Request</h2>
        <?php
        if ($this->session->userdata('msgquickRequest')) {
          echo '<div class="text-success">' . $this->session->userdata('msgquickRequest') . '</div>';
        }
        ?>
      </div>
      <div class="">
        <!-- <form class="submit-ticket-form"> -->
        <?php echo form_open('home/quickRequest', ['class' => 'submit-ticket-form']); ?>
        <ul class="form-steps list-unstyled">
          <li class="form-step wow fadeInUp step1"> <span class="step-index"> <span class="txt">1</span> </span>
            <h4 class="step-title"> <span class="txt">How can we help you?</span></h4>
            <div class="check-box-group ">
              <div class="checkbox">
                <label>
                  <?php
                  echo form_input(['type' => 'radio', 'name' => 'howCanhelp', 'id' => 'eCommerce1', 'value' => 'Web Development', 'onClick' => 'selectactivefun(1);']);
                  ?>
                  <span class="checkbox-icon"></span> <span class="txt">Web Development</span> </label>
              </div>
              <div class="checkbox">
                <label>
                  <?php
                  echo form_input(['type' => 'radio', 'name' => 'howCanhelp', 'id' => 'eCommerce2', 'value' => 'Digital Marketing', 'onClick' => 'selectactivefun(1);']);
                  ?>
                  <span class="checkbox-icon"></span> <span class="txt">Digital Marketing (SEO, SMO, Advertisement)</span> </label>
              </div>
              <div class="checkbox">
                <label>
                  <?php
                  echo form_input(['type' => 'radio', 'name' => 'howCanhelp', 'id' => 'eCommerce3', 'value' => 'Business Development', 'onClick' => 'selectactivefun(1);']);
                  ?>
                  <span class="checkbox-icon"></span> <span class="txt">Business Development</span> </label>
              </div>
              <div class="checkbox">
                <label>
                  <?php
                  echo form_input(['type' => 'radio', 'name' => 'howCanhelp', 'id' => 'eCommerce4', 'value' => 'Data Analytics', 'onClick' => 'selectactivefun(1);']);
                  ?>
                  <span class="checkbox-icon"></span> <span class="txt">Data Analytics</span> </label>
              </div>
            </div>
            <span class="step-progress"></span>
          </li>
          <li class="form-step wow fadeInUp step2"> <span class="step-index"> <span class="txt">2</span> </span>
            <h4 class="step-title"> <span class="txt">Describe project</span></h4>
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="input-line">
                  <?php
                  echo form_textarea(['class' => 'form-control describeproject', 'rows' => '3', 'cols' => '3', 'name' => 'projectDescription', 'id' => 'request-description', 'placeholder' => 'The more details you give, the more accurate is the estimation', 'onChange' => 'selectTextareaFun();']);
                  ?>
                  <!-- <textarea name="request-description" class="form-control" placeholder="The more details you give, the more accurate is the estimation"></textarea> -->
                  <span class="line"></span></div>
              </div>
            </div>
            <span class="step-progress"></span>
          </li>
          <li class="form-step wow fadeInUp step3"> <span class="step-index"> <span class="txt">3</span> </span>
            <h4 class="step-title"> <span class="txt">How urgent do you need to start?</span></h4>
            <div class="check-box-group">
              <div class="checkbox checkbox1">
                <label>
                  <?php
                  echo form_input(['type' => 'radio', 'name' => 'urgentNeed', 'id' => 'Today', 'value' => 'Today', 'onClick' => 'selectactivefun(3);']);
                  ?>
                  <span class="checkbox-icon"></span> <span class="txt">Today</span> </label>
              </div>
              <div class="checkbox checkbox1">
                <label>
                  <!-- <input type="radio" name="request-type" value="eCommerce"> -->
                  <?php
                  echo form_input(['type' => 'radio', 'name' => 'urgentNeed', 'id' => 'Yesterday', 'value' => 'Tomorrow', 'onClick' => 'selectactivefun(3);']);
                  ?>
                  <span class="checkbox-icon"></span> <span class="txt">Tomorrow</span> </label>
              </div>

              <div class="checkbox checkbox1">
                <label>
                  <!-- <input type="radio" name="request-type" value="eCommerce"> -->
                  <?php
                  echo form_input(['type' => 'radio', 'name' => 'urgentNeed', 'id' => 'Tomorrow', 'value' => 'Within a week', 'onClick' => 'selectactivefun(3);']);
                  ?>
                  <span class="checkbox-icon"></span> <span class="txt">Within a week</span> </label>
              </div>
              <div class="checkbox checkbox1">
                <label>
                  <!-- <input type="radio" name="request-type" value="eCommerce"> -->
                  <?php
                  echo form_input(['type' => 'radio', 'name' => 'urgentNeed', 'id' => 'Week', 'value' => 'Within a month', 'onClick' => 'selectactivefun(3);']);
                  ?>
                  <span class="checkbox-icon"></span> <span class="txt">Within a month</span> </label>
              </div>
              <!-- <div class="checkbox">
                <label>
				  <?php
          //echo form_input(['type'=>'radio','name'=>'urgentNeed','id'=>'Week','value'=>'Week','onClick'=>'selectactivefun(3);']);
          ?>
                  <span class="checkbox-icon"></span> <span class="txt">Within a Month</span> </label>
              </div> -->
            </div>
            <span class="step-progress"></span>
          </li>
          <li class="form-step multiple wow fadeInUp step4"> <span class="step-index"> <span class="txt">4</span> </span>
            <h4 class="step-title"> <span class="txt">Contact information</span></h4>
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <?php
                      echo form_input(['class' => "form-control", 'type' => 'text', 'name' => 'username', 'id' => 'username', 'placeholder' => 'Your name', 'onChange' => 'selectContactInfo();']);
                      ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <?php
                      echo form_input(['class' => "form-control", 'type' => 'text', 'name' => 'contactno', 'id' => 'contactno', 'placeholder' => 'Contact No', 'onChange' => 'selectContactInfo();']);
                      ?>
                    </div>
                  </div>
                  <div class="col-md-4" id="contactusfrm">
                    <div class="form-group">
                      <?php
                      echo form_input(['class' => "form-control", 'type' => 'text', 'name' => 'email', 'id' => 'email', 'placeholder' => 'Your email', 'onChange' => 'selectContactInfo();']);
                      ?>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <span class="step-progress"></span>
          </li>
          <li class="form-step wow fadeInUp step5"> <span class="step-index"> <span class="txt">5</span> </span>
            <button type="submit" id="requestSubmit" class="btn_hover agency_banner_btn cus_mb-10">Submit Request</button>
          </li>
        </ul>
        <?php echo form_close(); ?>
      </div>
    </div>
  </section>

  <div class="pp-scrollable p-table section section-5 pp-section active" style="z-index: 1;" >
    <div class="scroll-wrap">
      <img class="p_absoulte pp_triangle t_left" src="<?php echo base_url(); ?>assets/images/triangle.png" alt="">
      <img class="p_absoulte pp_block" src="<?php echo base_url(); ?>assets/images/block2.png" alt="">
      <div class="p-section-bg" style="background-image:url(<?php echo base_url(); ?>assets/images/contact_bg.jpg);"></div>
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
              <div class="col-lg-7 contactusfrmcls">
                <?php
                if ($this->session->userdata('msg')) {
                  echo '<div class="text-success">' . $this->session->userdata('msg') . '</div>';
                }

                ?>

                <!-- <form action="#" class="row pp_contact_form"> -->
                <?php echo form_open('contactus/index', ['class' => 'row pp_contact_form']); ?>
                <div class="col-lg-6">
                  <div class="form-group text_box">
                    <!-- <input type="text" name="name" placeholder="Your Name"> -->
                    <?php
                    echo form_hidden('currentClass', $currentClass);;
                    ?>
                    <?php
                    echo form_input(['type' => 'text', 'name' => 'username', 'id' => 'c', 'placeholder' => 'Your Name*']);
                    ?>

                    <?php
                    if ($this->session->userdata('username')) {
                      echo '<div class="text-danger">' . $this->session->userdata('username') . '</div>';
                    }

                    ?>

                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group text_box">
                    <!-- <input type="email" name="email" placeholder="Your email address"> -->
                    <?php
                    echo form_input(['type' => 'text', 'name' => 'email', 'id' => 'email', 'placeholder' => 'Your email address*']);
                    ?>
                    <?php
                    if ($this->session->userdata('email')) {
                      echo '<div class="text-danger">' . $this->session->userdata('email') . '</div>';
                    }

                    ?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group text_box">
                    <!-- <input type="text" name="tell" placeholder="Mobile no"> -->
                    <?php
                    echo form_input(['type' => 'text', 'name' => 'mobileno', 'id' => 'mobileno', 'placeholder' => 'Mobile no*']);
                    ?>
                    <?php
                    if ($this->session->userdata('mobileno')) {
                      echo '<div class="text-danger">' . $this->session->userdata('mobileno') . '</div>';
                    }

                    ?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group text_box">
                    <!-- <input type="text" name="company" placeholder="Company"> -->
                    <?php
                    echo form_input(['type' => 'text', 'name' => 'company', 'id' => 'company', 'placeholder' => 'For which post you are applying']);
                    ?>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group text_box">
                    <!-- <textarea name="message" id="message" cols="30" placeholder="Your message"></textarea> -->
                    <?php
                    echo form_textarea(['name' => 'message', 'id' => 'message', 'placeholder' => 'Your message']);
                    ?>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mb-0">
                    <button class="btn_scroll btn_hover">Send Message</button>
                  </div>
                </div>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer_area h_footer_dark pos_footer_area security_footer_area"> <img class="leaf_left" src="<?php echo base_url(); ?>assets/images/leaf-left.png" alt=""> <img class="leaf_right" src="<?php echo base_url(); ?>assets/images/leaf-right.png" alt="">
    <div class="container">
      <div class="footer_top_six">
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="f_widget company_widget"> <a href="index.html" class="f-logo"><img src="<?php echo base_url(); ?>assets/images/footer-logo.png" alt="logo"></a>
              <p class="mt_40">Redwood Cube- Copyright 2020. All rights reserved.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="f_widget about-widget">
              <h3 class="f-title f_600 w_color f_size_18 mb_40">Important Link</h3>
              <ul class="list-unstyled f_list">
                <li><a href="<?php echo base_url() ?>aboutus">About Us</a></li>
                <li><a href="<?php echo base_url() ?>servicesDetail">Services</a></li>
                <li><a class="orclient" href="#ourclients">Our Client</a></li>
                <li><a href="<?php echo base_url() ?>blog">BLog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="f_widget about-widget">
              <h3 class="f-title f_600 w_color f_size_18 mb_40">Help?</h3>
              <ul class="list-unstyled f_list">
                <li><a href="<?php echo base_url() ?>career">Career</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#contactusfrm" id="footerContactus">Contact Us</a></li>
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
      <div class="pos_footer_bottom justify-content-between d-flex align-items-end"> <img class="pos_women" src="<?php echo base_url(); ?>assets/images/women.png" alt=""> <img src="<?php echo base_url(); ?>assets/images/people.png" alt=""> <img class="pos_women" src="<?php echo base_url(); ?>assets/images/man.png" alt=""> </div>
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
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/propper.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/wow/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#requestSubmit").css("cursor", "not-allowed");
      $("#requestSubmit").attr("disabled", "disabled");
    });

    var btnStatus = true;

    function selectactivefun(step) {
      if (step == 1) {
        $(".step1").addClass('fiiledsteps');
      } else {
        btnStatus = false;
        $("#requestSubmit").css("cursor", "not-allowed");
        $("#requestSubmit").attr("disabled", "disabled");
      }
      if (step == 3) {
        $(".step3").addClass('fiiledsteps');
      } else {
        btnStatus = false;
        $("#requestSubmit").css("cursor", "not-allowed");
        $("#requestSubmit").attr("disabled", "disabled");
      }

    }

    function selectTextareaFun() {
      //alert($(".describeproject").val());
      var str = $(".describeproject").val();
      if ($.trim(str) != '') {
        var username = $("#username").val();
        var contactno = $("#contactno").val();
        var email = $("#email").val();
        if (username != '' && email != '' && contactno != '') {
          $(".step2").addClass('fiiledsteps');
          $("#requestSubmit").css("cursor", "pointer");
          $("#requestSubmit").removeAttr("disabled", true);
        } else {
          btnStatus = false;
          $("#requestSubmit").css("cursor", "not-allowed");
          $("#requestSubmit").attr("disabled", "disabled");
        }
      } else if ($(".describeproject").val() == '') {
        $(".step2").removeClass('fiiledsteps');
        btnStatus = false;
        $("#requestSubmit").css("cursor", "not-allowed");
        $("#requestSubmit").attr("disabled", "disabled");
      }



    }

    function selectContactInfo() {
      var username = $("#username").val();
      var contactno = $("#contactno").val();
      var email = $("#email").val();
      if (username != '' && email != '' && contactno != '') {
        if ($(".describeproject").val() != '') {
          if (!btnStatus) {
            $(".step4").addClass('fiiledsteps');
            $("#requestSubmit").css("cursor", "pointer");
            $("#requestSubmit").removeAttr("disabled", true);
          } else {
            btnStatus = false;
          }
        } else {
          $("#requestSubmit").css("cursor", "not-allowed");
          $("#requestSubmit").attr("disabled", "disabled");
        }
      } else {
        $("#requestSubmit").css("cursor", "not-allowed");
        $("#requestSubmit").attr("disabled", "disabled");
      }
    }
  </script>

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


// $(document).ready(function (){
//             $("#ansh").click(function (){
//               var goto1 = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
//               alert(goto1);
//                 $('html, body').animate({
//                     scrollTop: $("#quickRequest").offset().top
//                 }, 100);
//             });
//         });

    // function gotoQuickRequest() {
    //   var goto1 = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
    //   if (goto1 == 'home#quickRequest' || goto1 == 'home#ourclients') {
    //     $("#menu").removeClass('show-menu');
    //     $("#menu").addClass('close-menu');
    //   } else {

    //   }
    // }

    // function gotoOurClient() {
    //   var goto1 = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
    //   if (goto1 == 'home#quickRequest' || goto1 == 'home#ourclients') {
    //     $("#menu").removeClass('show-menu');
    //     $("#menu").addClass('close-menu');
    //   } else {

    //   }
    // }
    function gotoOurClient(arg) {
   
   var goto1 = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
   if(arg === 'ourclient'){
     window.location.replace("http://redwoodcube.com/RC/home#ourclients");
   }
   if(arg === 'quickRequest'){
     window.location.replace("http://redwoodcube.com/RC/home#quickRequest");
   }
   if(arg === 'contactusfrm'){
     window.location.replace("http://redwoodcube.com/RC/home#contactusfrm");
   }
    
   if (goto1 == 'home#quickRequest' || goto1 == 'home#ourclients') {
     $("#menu").removeClass('show-menu');
     $("#menu").addClass('close-menu');
   } else {

   }
 }
  </script>
  <script>
$(document).ready(function () {
            $('.social-button-toggle').on("click", function () {
                $(this).toggleClass('open');
                $(this).find('span').toggleClass('fa-plus fa-share');
                $('.option').toggleClass('scale-on');
            });
        });
</script>
</body>

</html>
