<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
 
    <meta <?php bloginfo('charset');?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="/https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ionicons.min.css">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
	  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">198 West 21th Street, Suite 721 New York NY 10016</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.html">Kiddos</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	    <?php wp_nav_menu();?>
	      </div>
	    </div>
	  </nav>