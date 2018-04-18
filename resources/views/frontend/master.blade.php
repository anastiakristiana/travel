<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Memo's Travel</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="Big Sale Air Asia" />
    <meta name="description" content="Tiket Murah Air Asia">
    <meta name="author" content="Memo's Travel">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}" type="image/x-icon">
	
    <!-- AJAX Notification -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- AJAX Notification -->
  
	<!-- Theme Styles -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}">
    
    <!-- Current Page Styles -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('components/revolution_slider/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('components/revolution_slider/css/style.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('components/jquery.bxslider/jquery.bxslider.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('components/flexslider/flexslider.css')}}" media="screen" />
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    
    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{URL::asset('css/updates.css')}}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
	
	<!-- Autocomplete -->
	<link rel="stylesheet" href="{{URL::asset('css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
	<style>
		.ui-autocomplete-category {
		font-weight: bold;
		padding: .2em .4em;
		margin: .8em 0 .2em;
		line-height: 1.5;
	  }
    </style>
	<script src="{{URL::asset('js/jquery-1.12.4.js')}}"></script>
	<script src="{{URL::asset('js/jquery-ui.js')}}"></script>
  <!-- End of autocomplete -->
  
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body>
    
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top style2">
            <div class="topnav">
                <div class="container">
                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu-item-has-children">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#flights">Flights</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#hows">How Memo's Travel Works</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#bestoffers">Best Flight Offers</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#testimonial">Testimonial</a>
                            </li>
                            
                        </ul>
                    </nav>
                    <ul class="quick-menu pull-right clearfix">
                        <li><a href="#">ACCOUNT</a></li>
                        <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                        <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="main-header">
                
                <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>

                <div class="container">
                    <h1 class="logo navbar-brand">
                        <a href="index.html" title="Travelo - home">
                            <img src="images/logo.png" alt="Travelo HTML5 Template" />
                        </a>
                    </h1>
                    <div class="header-search col-sm-offset-4 col-md-offset-2 hidden-mobile">
                        <form method="post" role="form">
                            <div class="col-xs-6">
                                <input type="text" name="where" value="" placeholder="Where do you want to go?" class="input-text white-bg full-width where" />
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-3">
                                    <div class="datepicker-wrap transparent">
                                        <input type="text" class="input-text white-bg full-width check-in" name="date_from" placeholder="Check In" />
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="datepicker-wrap transparent">
                                        <input type="text" class="input-text white-bg full-width check-out" name="date_to" placeholder="Check Out" />
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="selector style1 guest">
                                        <select class="full-width white-bg">
                                            <option>1 Guest</option>
                                            <option>2 Guests</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <button type="submit" class="btn-medium uppercase full-width">search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            
                <nav id="mobile-menu-01" class="mobile-menu collapse">
                    <ul id="mobile-primary-menu" class="menu">
                        <li class="menu-item-has-children">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#flights">Flights</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#hows">How Memo's Travel Works</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#bestoffers">Best Flight Offers</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#testimonial">Testimonial</a>
                        </li>
                    </ul>
                    
                    <ul class="mobile-topnav container">
                        <li><a href="#">MY ACCOUNT</a></li>
                        <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                        <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                    </ul>
                    
                </nav>
            </div>
            <div id="travelo-signup" class="travelo-signup-box travelo-box">
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                </div>
                <div class="seperator"><label>OR</label></div>
                <div class="simple-signup">
                    <div class="text-center signup-email-section">
                        <a href="#" class="signup-email"><i class="soap-icon-letter"></i>Sign up with Email</a>
                    </div>
                    <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
                </div>
                <div class="email-signup">
                    <form>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="first name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="last name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="email address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="confirm password">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Tell me about Memo's Travel news
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="description">By signing up, I agree to Memo's Travel's Terms and Condition & Privacy Policy.</p>
                        </div>
                        <button type="submit" class="full-width btn-medium">SIGNUP</button>
                    </form>
                </div>
                <div class="seperator"></div>
                <p>Already a member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
            </div>
            <div id="travelo-login" class="travelo-login-box travelo-box">
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                </div>
                <div class="seperator"><label>OR</label></div>
                <form>
                    <div class="form-group">
                        <input type="text" class="input-text full-width" placeholder="email address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="input-text full-width" placeholder="password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="forgot-password pull-right">Forgot password?</a>
                        <div class="checkbox checkbox-inline">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </form>
                <div class="seperator"></div>
                <p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
            </div>
        </header>
 
		@yield('content')
 
		
        <section id="content">
            <div class="search-box-wrapper">
                <div class="search-box container">
                    <ul class="search-tabs clearfix" id="flights">
                        
                        <li class="active"><a href="#flights-tab" data-toggle="tab">FLIGHTS</a></li>
                        <!--<li><a href="#flight-and-hotel-tab" data-toggle="tab">FLIGHT &amp; HOTELS</a></li>
                        <li><a href="#cars-tab" data-toggle="tab">CARS</a></li>
                        <li><a href="#cruises-tab" data-toggle="tab">CRUISES</a></li>
                        <li><a href="#flight-status-tab" data-toggle="tab">FLIGHT STATUS</a></li>
                        <li><a href="#online-checkin-tab" data-toggle="tab">ONLINE CHECK IN</a></li>-->
                    </ul>
                    <div class="visible-mobile" id="flights">
                        <ul id="mobile-search-tabs" class="search-tabs clearfix">
                            <li class="active"><a href="#flights-tab">FLIGHTS</a></li>
                            <!--<li><a href="#flight-and-hotel-tab">FLIGHT &amp; HOTELS</a></li>
                            <li><a href="#cars-tab">CARS</a></li>
                            <li><a href="#cruises-tab">CRUISES</a></li>
                            <li><a href="#flight-status-tab">FLIGHT STATUS</a></li>
                            <li><a href="#online-checkin-tab">ONLINE CHECK IN</a></li>-->
                        </ul>
                    </div>
                    
                    <div class="search-tab-content">
                        <div class="tab-pane fade active in" id="flights-tab">
                            <form action="flight-list-view.html" method="post">
                                <div class="row">
                                    @yield('cont')
                                    
                                    
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            
			<div class="global-map-area section parallax" data-stellar-background-ratio="0.5">
                <div class="container description text-center" id="hows">
                    <h1>How Travelo Works?</h1>
                    <br>
                    <div class="travelo-process">
                        <img src="images/travelo_process.png" alt="">
                        <div class="process first icon-box style12">
                            <div class="details animated" data-animation-type="fadeInUp" data-animation-delay="1">
                                <h4>Explore Destinations</h4>
                                <p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="icon-wrapper animated" data-animation-type="slideInLeft" data-animation-delay="0">
                                <i class="soap-icon-beach circle"></i>
                            </div>
                        </div>
                        <div class="process second icon-box style12">
                            <div class="icon-wrapper animated" data-animation-type="slideInRight" data-animation-delay="1.5">
                                <i class="soap-icon-availability circle"></i>
                            </div>
                            <div class="details animated" data-animation-type="fadeInUp" data-animation-delay="2.5">
                                <h4>Check Availability</h4>
                                <p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="process third icon-box style12">
                            <div class="icon-wrapper animated" data-animation-type="slideInRight" data-animation-delay="2">
                                <i class="soap-icon-stories circle"></i>
                            </div>
                            <div class="details animated" data-animation-type="fadeInUp" data-animation-delay="3">
                                <h4>Book Online</h4>
                                <p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="process forth icon-box style12">
                            <div class="details animated" data-animation-type="fadeInUp" data-animation-delay="4.5">
                                <h4>Get Ready to Fly</h4>
                                <p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="icon-wrapper animated" data-animation-type="slideInLeft" data-animation-delay="3.5">
                                <i class="soap-icon-plane-left takeoff-effect1 circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="container section" id="bestoffers">
                <h2>Featured Flight Offers</h2>
                <div class="row image-box listing-style1 flight">
                    <div class="col-sm-6 col-md-3">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown">
                                <span><img alt="" src="http://placehold.it/270x160"></span>
                            </figure>
                            <div class="details">
                                <span class="price"><small>avg/person</small>$620</span>
                                <h4 class="box-title">Paris<small>Oneway flight</small></h4>
                                <div class="time">
                                    <div class="take-off">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">Take off</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                    <div class="landing">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">landing</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                </div>
                                <p class="duration fourty-space"><span class="skin-color">Total Time</span> 13 Hour, 40 minutes</p>
                                <div class="action">
                                    <a class="button btn-small full-width" href="flight-detailed.html">SELECT NOW</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown">
                                <span><img alt="" src="http://placehold.it/270x160"></span>
                            </figure>
                            <div class="details">
                                <span class="price"><small>avg/person</small>$620</span>
                                <h4 class="box-title">Paris<small>Oneway flight</small></h4>
                                <div class="time">
                                    <div class="take-off">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">Take off</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                    <div class="landing">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">landing</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                </div>
                                <p class="duration fourty-space"><span class="skin-color">Total Time</span> 13 Hour, 40 minutes</p>
                                <div class="action">
                                    <a class="button btn-small full-width" href="flight-detailed.html">SELECT NOW</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown">
                                <span><img alt="" src="http://placehold.it/270x160"></span>
                            </figure>
                            <div class="details">
                                <span class="price"><small>avg/person</small>$620</span>
                                <h4 class="box-title">Paris<small>Oneway flight</small></h4>
                                <div class="time">
                                    <div class="take-off">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">Take off</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                    <div class="landing">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">landing</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                </div>
                                <p class="duration fourty-space"><span class="skin-color">Total Time</span> 13 Hour, 40 minutes</p>
                                <div class="action">
                                    <a class="button btn-small full-width" href="flight-detailed.html">SELECT NOW</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown">
                                <span><img alt="" src="http://placehold.it/270x160"></span>
                            </figure>
                            <div class="details">
                                <span class="price"><small>avg/person</small>$620</span>
                                <h4 class="box-title">Paris<small>Oneway flight</small></h4>
                                <div class="time">
                                    <div class="take-off">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">Take off</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                    <div class="landing">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">landing</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                </div>
                                <p class="duration fourty-space"><span class="skin-color">Total Time</span> 13 Hour, 40 minutes</p>
                                <div class="action">
                                    <a class="button btn-small full-width" href="flight-detailed.html">SELECT NOW</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
			
			<div class="global-map-area section parallax" data-stellar-background-ratio="0.5" style="background-position: 50% -66.4063px;">
                <div class="container" id="testimonial">
                    <h1 class="text-center white-color">Testimonial Style 03</h1>
                    <div class="testimonial style3">
                        <ul class="slides ">
                            <li>
                                <div class="author"><a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a></div>
                                <blockquote class="description">We'd like to thank <em>Travelo</em> for making our honeymoon such a memorable experience as we were able to do everything on a single website.</blockquote>
                                <h2 class="name">Lisa Kimberly</h2>
                            </li>
                            <li>
                                <div class="author"><a href="#"><img src="http://placehold.it/270x270" alt="" width="74" height="74" /></a></div>
                                <blockquote class="description">We'd like to thank <em>Travelo</em> for making our honeymoon such a memorable experience as we were able to do everything on a single website.</blockquote>
                                <h2 class="name">Jessica Brown</h2>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
			
        </section>
        
        <footer id="footer">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h2>Discover</h2>
                            <ul class="discover triangle hover row">
                                <li><a href="#">Terms and Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>Travel News</h2>
                            <ul class="travel-news">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="http://placehold.it/63x63" alt="" width="63" height="63" />
                                        </a>
                                    </div>
                                    <div class="description">
                                        <h5 class="s-title"><a href="#">Amazing Places</a></h5>
                                        <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                        <span class="date">25 Sep, 2013</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="http://placehold.it/63x63" alt="" width="63" height="63" />
                                        </a>
                                    </div>
                                    <div class="description">
                                        <h5 class="s-title"><a href="#">Travel Insurance</a></h5>
                                        <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                        <span class="date">24 Sep, 2013</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>Mailing List</h2>
                            <p>Sign up for our mailing list to get latest updates and offers.</p>
                            <br />
                            <div class="icon-check">
                                <input type="text" class="input-text full-width" placeholder="your email" />
                            </div>
                            <br />
                            <span>We respect your privacy</span>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>About Memo's Travel</h2>
                            <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque.</p>
                            <br />
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                <br />
                                <a href="#" class="contact-email">help@travelo.com</a>
                            </address>
                            <ul class="social-icons clearfix">
                                <li class="twitter"><a title="twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                <li class="googleplus"><a title="googleplus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                <li class="facebook"><a title="facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                <li class="linkedin"><a title="linkedin" href="#" data-toggle="tooltip"><i class="soap-icon-linkedin"></i></a></li>
                                <li class="vimeo"><a title="vimeo" href="#" data-toggle="tooltip"><i class="soap-icon-vimeo"></i></a></li>
                                <li class="dribble"><a title="dribble" href="#" data-toggle="tooltip"><i class="soap-icon-dribble"></i></a></li>
                                <li class="flickr"><a title="flickr" href="#" data-toggle="tooltip"><i class="soap-icon-flickr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom gray-area">
                <div class="container">
                    <div class="logo pull-left">
                        <a href="index.html" title="Travelo - home">
                            <img src="{{URL::asset('images/logo.png')}}" alt="Travelo HTML5 Template" />
                        </a>
                    </div>
                    <div class="pull-right">
                        <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
                    </div>
                    <div class="copyright pull-right">
                        <p>&copy; 2018 Memo's Travel</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- Javascript -->
    <script type="text/javascript" src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery.noconflict.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/modernizr.2.7.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery.placeholder.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery-ui.1.10.4.min.js')}}"></script>
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>
    
    <!-- load revolution slider scripts -->
    <script type="text/javascript" src="{{URL::asset('components/revolution_slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('components/revolution_slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    
    <!-- load BXSlider scripts -->
    <script type="text/javascript" src="{{URL::asset('components/jquery.bxslider/jquery.bxslider.min.js')}}"></script>

    <!-- Flex Slider -->
    <script type="text/javascript" src="{{URL::asset('components/flexslider/jquery.flexslider-min.js')}}"></script>

    <!-- Google Map Api -->
    <script type='text/javascript' src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script type="text/javascript" src="{{URL::asset('js/gmap3.min.js')}}"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="{{URL::asset('js/jquery.stellar.min.js')}}"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="{{URL::asset('js/waypoints.min.js')}}"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="{{URL::asset('js/theme-scripts.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/scripts.js')}}"></script>
    
    <script type="text/javascript">
        tjq(document).ready(function() {
            tjq('.revolution-slider').revolution(
            {
                sliderType:"standard",
				sliderLayout:"auto",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
					onHoverStop:"on",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
					,
					arrows: {
						style:"default",
						enable:true,
						hide_onmobile:false,
						hide_onleave:false,
						tmp:'',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:20,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:20,
							v_offset:0
						}
					}
				},
				visibilityLevels:[1240,1024,778,480],
				gridwidth:1170,
				gridheight:646,
				lazyType:"none",
				shadow:0,
				spinner:"spinner4",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"off",
				autoHeight:"off",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
            });
        });
		
/*		//autocomplete
		$( function() {
    $.widget( "custom.catcomplete", $.ui.autocomplete, {
      _create: function() {
        this._super();
        this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
      },
      _renderMenu: function( ul, items ) {
        var that = this,
          currentCategory = "";
        $.each( items, function( index, item ) {
          var li;
          if ( item.category != currentCategory ) {
            ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
            currentCategory = item.category;
          }
          li = that._renderItemData( ul, item );
          if ( item.category ) {
            li.attr( "aria-label", item.category + " : " + item.label );
          }
        });
      }
    });
    var data = [
      { label: "anders", category: "" },
      { label: "andreas", category: "" },
      { label: "antal", category: "" },
      { label: "annhhx10", category: "Products" },
      { label: "annk K12", category: "Products" },
      { label: "annttop C13", category: "Products" },
      { label: "anders andersson", category: "People" },
      { label: "andreas andersson", category: "People" },
      { label: "andreas johnson", category: "People" }
    ];
 
    $( ".input-text" ).catcomplete({
      delay: 0,
      source: data
    });
  } ); */
    </script>
</body>
</html>

