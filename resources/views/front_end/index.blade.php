<?php session_start();?>
<?php require_once('includes/dbconnection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Looking for Tractor Services? TOG World app offers best Tractor Booking Online in Nigeria with simplicity and ease. Find reliable and efficient tractors for your farmland online. ">
    <meta name="keywords" content="Operators, Harvesters. Ploughing, Harvester Hire, Corn Harvesting, TOG, Tractors, Tractor Services, Tractor Booking, TOG, Tractor Booking Online Nigeria, Nigerian tractors, lagos tractors, ogun tractor, tractor in the north, farmer, farming, agent, tractor driver, rent tractors, rent tractor, rent heavy equipments, hire tractors, hire tractor, hire heavy equipments, tractors, tractor booking, TOG, Operators, Farm Lands, Harvesters, search, tractor clusters, tractors, tractor service providers, services, farmers, farming services, tractor services, ploughing, tractorization, Nigeria, Lagos">
    <meta name="author" content="TOG">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Tractor Services - Tractor Booking Online Nigeria| TOG</title>

    <!-- Styles -->
    <link href="css/f1.css" rel="stylesheet">
    <link href="css/f2.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!-- Favicon  -->
    <link rel="icon" href="https://tog.ng/assets/img/fav.png">

</head>
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">TOGWorld</a> -->

        <!-- Image Logo -->
        <a href="./"><img src="images/logo.png" alt="Tractor Services"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#features">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#preview">PREVIEW</a>
                </li>

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#details" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DETAILS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms"><span class="item-text">TERMS CONDITIONS</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy"><span class="item-text">PRIVACY POLICY</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACT</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://www.facebook.com/tractoronthego/">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://twitter.com/tractoronthego">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1>MOBILE APP <br>FOR <span id="js-rotating">FARMERS, OPERATORS, AGENTS</span></h1>
                            <p class="p-large">TOGWorld app was designed with simplcity, ease of use and functionality in mind, and you can be rest assured that the hassles of finding reliable and efficient tractors for your farmland is a thing of the past.</p>
                            <a class="btn-solid-lg page-scroll" href="https://apps.apple.com/ng/app/togworld/id1503050620?ign-mpt=uo%3D4"><i class="fab fa-apple"></i>APP STORE</a>
                            <a class="btn-solid-lg page-scroll" href="https://play.google.com/store/apps/details?id=tog.ng"><i class="fab fa-google-play"></i>PLAY STORE</a>
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/header-iphone.png" alt="Tractor Booking Online Nigeria">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Testimonials -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-1.jpg" alt="Tractor Service Providers">
                                        <div class="card-body">
                                            <p class="testimonial-text">I just finished my trial period and was so amazed with the support and results that I purchased TOGWorld.</p>
                                            <p class="testimonial-author">Ndamati Orlu - Farmer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.jpg" alt="Harvester Hire">
                                        <div class="card-body">
                                            <p class="testimonial-text">I don't know how I managed to get work done without TOGWorld. The speed of this application is amazing!</p>
                                            <p class="testimonial-author">Austin Okoye - Agent</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">This app has the potential of becoming a mandatory tool in every marketer's day to day operations.</p>
                                            <p class="testimonial-author">Adeyinka Ayoko - Operator</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="Tractor Service Providers">
                                        <div class="card-body">
                                            <p class="testimonial-text">Searching for a great marketing automation app was difficult but thankfully I found TOGWorld.</p>
                                            <p class="testimonial-author">Danjuma Danladi - Farmer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-5.jpg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">TOGWorld's support team is amazing. They've helped me with some issues and I am so grateful to them.</p>
                                            <p class="testimonial-author">Gambo Gowon - Farmer</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-6.jpg" alt="Tractor Services">
                                        <div class="card-body">
                                            <p class="testimonial-text">Who would have thought that TOGWorld can provide such amazing results in just a few weeks of use</p>
                                            <p class="testimonial-author">Abiye Hart - Operator</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->


    <!-- Features -->
    <div id="features" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>FEATURES</h2>
                    <div class="p-heading p-large">TOGWorld was designed based on input from personal development coaches and popular trainers so it offers all</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">

                <!-- Tabs Links -->
                <ul class="nav nav-tabs" id="TOGWorldTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-cog"></i>TYPE OF FARM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-binoculars"></i>TRACTOR OPERATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-search"></i>ORDER SUMMARY</a>
                    </li>
                </ul>
                <!-- end of tabs links -->


                <!-- Tabs Content-->
                <div class="tab-content" id="TOGWorldTabsContent">

                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="container">
                            <div class="row">

                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <div class="card left-pane first">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Type Of Farm</h4>
                                                <p>Like any self improving process, everything starts with setting your goals and committing to them</p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="far fa-compass"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card left-pane">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title">State</h4>
                                                <p>TOGWorld provides a well designed and ergonomic visual editor for you to edit your notes and input data</p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="far fa-file-code"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card left-pane">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Local Government</h4>
                                                <p>Each option packaged in the app's menus is provided in order to improve your personal development status</p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="far fa-gem"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of icon cards pane -->

                                <!-- Image Pane -->
                                <div class="col-lg-4">
                                    <img class="img-fluid" src="images/features-iphone-1.jpg" alt="Tractors Online Nigeria">
                                </div>
                                <!-- end of image pane -->

                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <div class="card right-pane first">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="far fa-calendar-check"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Farm Size</h4>
                                                <p>Schedule your appointments, meetings and periodical evaluations using the provided in-app calendar option</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card right-pane">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="far fa-bookmark"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Farm Features</h4>
                                                <p>Reading focus mode for long form articles, ebooks and other materials which involve large text areas</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card right-pane">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="fas fa-cube"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Items In Farm</h4>
                                                <p>Get a solid foundation for your self development efforts. Try TOGWorld mobile app for any mobile platform</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of icon cards pane -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <div class="container">
                            <div class="row">

                                <!-- Image Pane -->
                                <div class="col-md-4">
                                    <img class="img-fluid" src="images/features-iphone-2.jpg" alt="Tractors on Pay As You Go">
                                </div>
                                <!-- end of image pane -->

                                <!-- Text And Icon Cards Area -->
                                <div class="col-md-8">
                                    <div class="text-area">
                                        <h3>Tractor Operation</h3>
                                        <p>After you've selected type of farm and number of hectares then you can choose operation details. You can always change them.</p>
                                    </div> <!-- end of text-area -->

                                    <div class="icon-cards-area">
                                            <div class="card">
                                                <div class="card-icon">
                                                    <i class="fas fa-cube"></i>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title">Type Of Operation</h4>
                                                    <p>Get cheap and solid rates when choosing your farm operations</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-icon">
                                                    <i class="far fa-bookmark"></i>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title">Units</h4>
                                                    <p>Unit is based on how many number of activites you want to perform and all comes with costing.</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-icon">
                                                    <i class="far fa-calendar-check"></i>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title">Land Type</h4>
                                                    <p>Often Tractorized(Land was tractorized at most 2 months ago) and Never Tractorized(Land has never undergone a tractor operation)</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-icon">
                                                    <i class="far fa-file-code"></i>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title">Costing</h4>
                                                    <p>Costing is broken down into units and can be accumulated which is also based on the selected land type.</p>
                                                </div>
                                            </div>
                                    </div> <!-- end of icon cards area -->
                                </div> <!-- end of col-md-8 -->
                                <!-- end of text and icon cards area -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                        <div class="container">
                            <div class="row">

                                <!-- Text And Icon Cards Area -->
                                <div class="col-md-8">
                                    <div class="icon-cards-area">
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa-calendar-check"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Tractorization Request</h4>
                                                <p>Harrowing, Ploughing, Ridging, De-Stumping, Planting and many more to review.</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa-file-code"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Farm Specification</h4>
                                                <p>TOGWorld provides options for commercial and subsistence farms.</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="fas fa-cube"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Grand Total</h4>
                                                <p>The grand total adds up all cost on each activity selected.</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa-bookmark"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Note</h4>
                                                <p>Feel free to drop any message of any kind regarding your order, we shall review and revert. </p>
                                            </div>
                                        </div>
                                    </div> <!-- end of icon cards area -->

                                    <div class="text-area">
                                        <h3>Order Summary</h3>
                                        <p>Review all entries before making payment with your card or bank details. TOG App is highly secured and integreted with one of the best payment systems in Africa.</p>
                                    </div> <!-- end of text-area -->
                                </div> <!-- end of col-md-8 -->
                                <!-- end of text and icon cards area -->

                                <!-- Image Pane -->
                                <div class="col-md-4">
                                    <img class="img-fluid" src="images/features-iphone-3.jpg" alt="Tractor Booking Online Nigeria">
                                </div>
                                <!-- end of image pane -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div><!-- end of tab-pane -->
                    <!-- end of tab -->

                </div> <!-- end of tab-content -->
                <!-- end of tabs content -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of features -->


    <!-- Video -->
    <div id="preview" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>PREVIEW</h2>
                    <div class="p-heading p-large">Target the right customers for your business with the help of TOGWorld's patented segmentation technology</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=TZ19mgUYlVY" data-effect="fadeIn">
                                <img class="img-fluid" src="images/video-frame.jpg" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of video -->


    <!-- Details 1 -->
    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/details-1-iphone.jpg" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h3>Fast & Easy</h3>
                        <p>TOGWorld can easily help you track your personal development evolution if you take the time to properly setup your goals at the beginning of the training process. Check out the details</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">TOG APP</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="basic-3">
        <div class="second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h3>The Services</h3>
                            <p>Join any of the TOG clusters around you and enjoy great collaboration benefits.</p>
                            <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">TOG SERVICES</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <img class="img-fluid" src="images/details-2-iphone.jpg" alt="alternative">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of second -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 2 -->


    <!-- Details Lightboxes -->
	<!-- Lightbox -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
		<div class="row">
			<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
			<div class="col-lg-6">
				<img class="img-fluid" src="images/details-lightbox-1.png" alt="alternative">
			</div>
			<div class="col-lg-6">
				<h3>Goals Setting</h3>
				<hr>
                <p>TOGWorld can easily help you track your personal development evolution if you take the time to set it up.</p>
                <h4>The Process</h4>
                <p>Sign Up as a Farmer or as a Tractor Owner. Tractor Owners get all the same benefits as Farmers on TOG.</p>
                <p>You easily get commission as a tractor owner.</p>
				<table>
					<tr><td class="icon-cell"><i class="fas fa-desktop"></i></td><td>Register</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-bullhorn"></i></td><td>Get Verified</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-image"></i></td><td>Login</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-envelope"></i></td><td>List your Tractor</td></tr>
					<tr><td class="icon-cell"><i class="fab fa-font-awesome-flag"></i></td><td>Get a Match</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-code"></i></td><td>Get Paid</td></tr>
				</table>
				<a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#details">BACK</a>
			</div>
		</div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
		<div class="row">
			<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
			<div class="col-lg-6">
				<img class="img-fluid" src="images/details-lightbox-2.png" alt="alternative">
			</div>
			<div class="col-lg-6">
				<h3>How We Do It</h3>
				<hr>
                <p>We work closely with the government and private sectors to deliver the best value for tractors to farmers across Nigeria.</p>
                <h4>Your Tractor</h4>
                <p>List your tractor or farming machinery on TOG, for hire or outright purchase. Everybody wins.</p>
                <p>Get matched with Farmers in your area who need your tractor(s).</p>
				<table>
					<tr><td class="icon-cell"><i class="fas fa-desktop"></i></td><td>Search & Hire</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-bullhorn"></i></td><td>Outright Sales</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-image"></i></td><td>Maintenance</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-envelope"></i></td><td>Servicing</td></tr>
					<tr><td class="icon-cell"><i class="fab fa-font-awesome-flag"></i></td><td>Logistics</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-code"></i></td><td>Training</td></tr>
				</table>
				<a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#details">BACK</a>
			</div>
		</div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightboxes -->


    <!-- Screenshots -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/1.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/1.jpg" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/2.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/2.jpg" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/3.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/3.jpg" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/4.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/4.jpg" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/5.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/5.jpg" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/6.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/6.jpg" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/7.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/7.jpg" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/8.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/8.jpg" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/9.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/9.jpg" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/10.jpg" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/10.jpg" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of screenshots -->


    <!-- Download -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Download <span class="blue">TOGWorld</span></h2>
                        <p class="p-large">TOG is Nigeria's Number One Tractor on Demand Service. We have more tractors in our network than any other service of it's kind in Nigeria, and we have the cheapest rates.</p>
                        <a class="btn-solid-lg" href="https://apps.apple.com/ng/app/togworld/id1503050620?ign-mpt=uo%3D4"><i class="fab fa-apple"></i>APP STORE</a>
                        <a class="btn-solid-lg" href="https://play.google.com/store/apps/details?id=tog.ng"><i class="fab fa-google-play"></i>PLAY STORE</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/download.png" alt="alternative">
                    </div> <!-- end of img-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of download -->


    <!-- Statistics -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Counter -->
                    <div id="counter">
                        <div class="cell">
                          <?php

                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error)
                                  {
                                      die("Connection failed: " . $conn->connect_error);
                                  }

                                  $sql2 = "SELECT COUNT(*) AS tcon FROM users";
                                  $result2 = $conn->query($sql2);

                                  if ($result2->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result2->fetch_assoc()) {

                                    $rcon = $row['tcon'];;


                                  echo "<div class='counter-value number-count'>712K</div>";

                                }

                                } else
                                {
                                  echo "<div class='counter-value number-count'>712K</div>";
                                }

                          ?>

                            <p class="counter-info">Users</p>
                        </div>
                        <div class="cell">
                          <?php

                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error)
                                  {
                                      die("Connection failed: " . $conn->connect_error);
                                  }

                                  $sql2 = "SELECT COUNT(*) AS tcon FROM users WHERE account_type='FARMER'";
                                  $result2 = $conn->query($sql2);

                                  if ($result2->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result2->fetch_assoc()) {

                                    $rcon = $row['tcon'];;


                                  echo "<div class='counter-value number-count'>711K</div>";

                                }

                                } else
                                {
                                echo "<div class='counter-value number-count'>711K</div>";
                                }

                          ?>
                            <p class="counter-info">Registered Farmer</p>
                        </div>
                        <div class="cell">
                          <?php

                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error)
                                  {
                                      die("Connection failed: " . $conn->connect_error);
                                  }

                                  $sql2 = "SELECT COUNT(*) AS tcon FROM users WHERE account_type='OPERATOR'";
                                  $result2 = $conn->query($sql2);

                                  if ($result2->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result2->fetch_assoc()) {

                                    $rcon = $row['tcon'];;


                                  echo "<div class='counter-value number-count'>317</div>";
                                }

                                } else
                                {
                                echo "<div class='counter-value number-count'>317</div>";
                                }

                          ?>

                            <p class="counter-info">Operators</p>
                        </div>
                        <div class="cell">
                          <?php

                                  // Create connection
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  // Check connection
                                  if ($conn->connect_error)
                                  {
                                      die("Connection failed: " . $conn->connect_error);
                                  }

                                  $sql2 = "SELECT COUNT(*) AS tcon FROM users WHERE account_type='AGENT'";
                                  $result2 = $conn->query($sql2);

                                  if ($result2->num_rows > 0) {

                                    // output data of each row
                                    while($row = $result2->fetch_assoc()) {

                                    $rcon = $row['tcon'];;

                                  echo "<div class='counter-value number-count'>756</div>";

                                }

                                } else
                                {
                                  echo "<div class='counter-value number-count'>756</div>";
                                }

                          ?>

                            <p class="counter-info">Agents</p>
                        </div>
                    </div>
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Contact -->
    <div id="contact" class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>CONTACT</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Don't hesitate to give us a call or just use the contact form below</li>
                      </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6 offset-lg-3">

                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree to TOGWorld's stated conditions in <a href="privacy">Privacy Policy</a> and <a href="terms">Terms Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
      <br>
        <ul class="list-unstyled li-space-lg">
            <li><i class="fas fa-map-marker-alt"></i>33 Immam Dauda St, Surulere, Lagos. Nigeria</li>
            <li><i class="fas fa-phone"></i><a class="blue" href="tel:+2348106077777">+2348106077777</a></li>
            <li><i class="fas fa-envelope"></i><a class="blue" href="mailto:info@tog.ng">info@tog.ng</a></li>
        </ul>
        </div> <!-- end of form -->

        <iframe width="100%" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=33%2C%20Imam%20Dauda%20Street%2C%20Off%20Eric%20Moore%20Rd%20Surulere%2C%20Lagos%20Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>


    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>About TOG</h4>
                        <p>TOG is Tractor on the go service that can provide easy access to tractor services for users and farmers.</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="turquoise" href="https://tog.ng/">tog.ng</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="turquoise" href="terms">Terms & Conditions</a>, <a class="turquoise" href="privacy">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/tractoronthego/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://twitter.com/tractoronthego">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.youtube.com/channel/UCwPH1RiVRoY-twvIicGpg9w">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/tractoronthego/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://tog.ng">Tractor On The Go</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e453af1298c395d1ce7c150/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
