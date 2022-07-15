<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title><?php echo $title;?></title>
	   <meta name="description" content="<?php echo $description;?>" />
	   <meta property="og:image" content="<?php echo $sourceurl;?>" />
    
    
    <!-- Twitter -->
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:site" content="@dental_panache" />
      <meta name="twitter:creator" content="@dental_panache" />
      <meta name="twitter:title" content="<?php echo $title;?>" />
      <meta name="twitter:description" content="<?php echo $description;?>" />
      <meta name="twitter:image" content="<?php echo $sourceurl;?>" />
      <meta property="twitter:url" content="<?php echo base_url();?><?php echo $link;?>" />
    
    <!-- Open Graph / Facebook -->
      <meta property="og:locale" content="en-in" />
      <meta property="og:type" content="website" />
      <meta property="og:site_name" content="Blanchard International" />
      <meta property="og:title" content="<?php echo $title;?>" />
      <meta property="og:description" content="<?php echo $description;?>" />
      <meta property="og:image" name="image" content="<?php echo $sourceurl;?>" />
      <meta property="og:url" content="<?php echo $link;?>" />
	   
	   
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/meanmenu.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/boxicons.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon-two.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/odometer.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">      
      <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon.png">
      
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91555827-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-91555827-1');
        </script>
      
      <script type='text/javascript'>
        window.__lo_site_id = 314178;
        
        (function() {
        var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
        wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
         })();
      </script>
   </head>
   <body>
     <!--<div class="preloader">
         <div class="loader">
            <div class="sbl-half-circle-spin"></div>
         </div>
      </div>-->
      <header class="header-area grin-care-header">
         <div class="top-area">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-lg-8 col-md-12">
                     <ul class="top-information-wrap">
                        <li>
                           <i class='bx bxs-phone'></i>
                           <a href="tel:+91-7290073613">+91-7290073613</a>
                        </li>
                         
                        <li>
                           <i class='bx bx-envelope-open'></i>
                           <a href="mailto:smile@dentalpanache.com">smile@dentalpanache.com</span></a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-4 col-md-12">
                     <ul class="top-optional-wrap">
                        <li>
                           <a href="https://www.facebook.com/dentalpanachegurgaon" target="_blank">
                           <i class='bx bxl-facebook'></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://twitter.com/dental_panache" target="_blank">
                           <i class='bx bxl-twitter'></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.linkedin.com/company/13261976" target="_blank">
                           <i class='bx bxl-linkedin'></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.instagram.com/dentalpanachegurgaon/" target="_blank">
                           <i class='bx bxl-instagram'></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="navbar-area grin-care-navbar">
            <div class="main-responsive-nav">
               <div class="container">
                  <div class="main-responsive-menu">
                     <div class="logo">
                        <a href="<?php echo base_url();?>">
                        <img src="<?php echo base_url();?>assets/images/dplogo.png" alt="logo">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="main-navbar">
               <div class="container-fluid">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="/">
                     <img src="<?php echo base_url();?>assets/images/dplogo.png" alt="logo">
                     </a>
                     <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                           <li class="nav-item">
                              <a href="<?php echo base_url(); ?>" class="nav-link">Home</a>                              
                           </li>
                           <li class="nav-item">
                              <a href="<?php echo base_url(); ?>dental-tourism" class="nav-link">Dental Tourism</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Services <i class='bx bx-caret-down'></i></a>
                              <ul class="dropdown-menu">
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>consent-form" class="nav-link">COVID 19 consent form</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>teeth-whitening-in-gurgaon" class="nav-link">Teeth Whitening</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>porcelain-veneers" class="nav-link">Porcelain Veneers</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>dental-implants-in-gurgaon" class="nav-link">Dental Implants</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>best-root-canal-treatment-in-gurgaon" class="nav-link">Root Canal Treatment</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>dental-crowns-bridges" class="nav-link">Dental Crowns Bridges</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>invisible-braces-aligners-in-gurgaon" class="nav-link">Invisible Braces Aligners</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>kids-dentist-in-gurgaon" class="nav-link">Kids Dentist</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>tooth-extraction-in-gurgaon" class="nav-link">Tooth Extraction</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>dental-emergency-dentist-in-gurgaon" class="nav-link">Dental Emergency</a>
                                 </li>
                                 
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                              Smile Gallery
                              <i class='bx bx-caret-down'></i>
                              </a>
                               <ul class="dropdown-menu">
                                    <li class="nav-item">
                                       <a href="#" class="nav-link">Videos</a>
                                       <ul class="dropdown-menu">
                                          <li class="nav-item">
                                             <a href="<?php echo base_url(); ?>educational-videos" class="nav-link">Educational Videos</a>
                                          </li>
                                          <li class="nav-item">
                                             <a href="<?php echo base_url(); ?>video-testimonials" class="nav-link">Video Testimonials</a>
                                          </li>
                                       </ul>
                                 </li>
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>gallery" class="nav-link">Clinical Cases</a>
                                 </li>
                              </ul>
                           </li>

                           <li class="nav-item">
                              <a href="<?php echo base_url(); ?>faqs" class="nav-link">Faqs</a>
                           </li>
                           <li class="nav-item">
                              <a href="<?php echo base_url(); ?>blog" class="nav-link">Blog</a>
                           </li>
                            
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                              About Us
                              <i class='bx bx-caret-down'></i>
                              </a>
                              <ul class="dropdown-menu">
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>about-us" class="nav-link">About Us</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>contact-us" class="nav-link">Contact Us</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>clinic-tour" class="nav-link">Clinic Tour</a>
                                 </li>
                                  
                              </ul>
                           </li>                          
                        </ul>
                        <div class="others-options d-flex align-items-center">                            
                           <div class="option-item">
                              <div class="navbar-btn">
                                 <a href="<?php echo base_url(); ?>contact-us" class="default-btn">Book Appointment</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>