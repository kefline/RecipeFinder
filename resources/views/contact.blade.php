<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>RecipeFinder | Contact Us</title>
<link href="/assets/css/bootstrap.css" rel="stylesheet">
<link href="/assets/css/main.css" rel="stylesheet">
<link href="/assets/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


</head>

<body>

<div class="page-wrapper">
 	
    <div class="preloader"></div>
 	
    <header class="main-header header-style-one">
    	
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>
					
                   	<div class="nav-outer clearfix">
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="{{route('dashboard')}}">Home</a>
										
									</li>
									<li><a href="{{route('about')}}">About Us</a></li>
									<li class="dropdown"><a href="#">Recipes</a>
										<ul>
											<li><a href="recipes.html">Recipes 01</a></li>
											<li><a href="recipes-2.html">Recipes 02</a></li>
											<li><a href="recipes-3.html">Recipes 03</a></li>
											<li><a href="recipes-video.html">Recipes Video</a></li>
											<li><a href="recipes-detail.html">Recipes Detail 01</a></li>
											<li><a href="recipes-detail-2.html">Recipes Detail 02</a></li>
										</ul>
									</li>
									<li><a href="{{route('category')}}">Category</a></li>
									<li class="dropdown"><a href="#">Blog</a>
										<ul>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-single.html">Blog Single</a></li>
											<li><a href="not-found.html">Not Found / 404</a></li>
											<li><a href="login.html">Login</a></li>
											<li><a href="signup.html">Sign Up</a></li>
										</ul>
									</li>
									<li class="current"><a href="{{route('contact')}}">Contact us</a></li>
								</ul>
							</div>
							
						</nav>
						
						<!-- Outer Box -->
						<div class="outer-box">
							<!-- Search Box -->
							<div class="search-box-outer">
								<div class="dropdown">
									<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
									<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
										<li class="panel-outer">
											<div class="form-container">
												<form method="post" action="https://gico.io/spcica/blog.html">
													<div class="form-group">
														<input type="search" name="field-name" value="" placeholder="Search Here" required>
														<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
													</div>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<ul class="login-info">
								<li><a href="login.html"><span class="icon fa fa-user"></span>Login</a></li>
								<li class="recipe"><a href="add-recipe.html"><span class="fa fa-plus-circle"></span>&nbsp; Add Recipe</a></li>
							</ul>
						</div>
						
					</div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-remove"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
		
    </header>
    <!--End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(/assets/images/background/14.jpg)">
    	<div class="auto-container">
			<h1>Contact us</h1>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Page Container -->
    <div class="contact-page-container">
		<div class="pattern-layer" style="background-image:url(/assets/images/background/16.png)"></div>
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<h2>Get in touch <br> and let us know how <br> we can help.</h2>
							<div class="text">Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</div>
						</div>
						<ul class="contact-info-list">
							<li>Address : 58 Howard Street #2 San Francisco, CA 941</li>
							<li>Email : youwebsite@gamil.com</li>
							<li>Phone : (+68)1221 09876</li>
						</ul>
						<div class="map">
							<img src="/assets/images/icons/map.png" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner-column">
						
						<!-- Contact Form -->
						<div class="contact-form">
								
							<!-- Contact Form -->
							<form method="post" action="https://gico.io/spcica/sendemail.php" id="contact-form">

								<div class="form-group">
									<input type="text" name="subject" placeholder="Subject" required>
								</div>
								
								<div class="form-group">
									<input type="text" name="username" placeholder="Name" required>
								</div>
								
								<div class="form-group">
									<input type="email" name="email" placeholder="Email" required>
								</div>
								
								<div class="form-group">
									<textarea class="darma" name="message" placeholder="Type Your Message"></textarea>
								</div>
								
								<div class="form-group text-center">
									<button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Submit</span></button>
								</div>

							</form>
								
						</div>
						<!-- End Contact Form -->
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<!-- Instagram Section -->
	<section class="instagram-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<div class="profile"><span class="fa fa-pinterest"></span> Follow On Pinterest </div>
			</div>
		</div>
		
		<div class="instagram-carousel owl-carousel owl-theme">
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="/assets/images/resource/instagram-1.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="/assets/images/resource/instagram-1.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="/assets/images/resource/instagram-2.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="/assets/images/resource/instagram-2.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="/assets/images/resource/instagram-3.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="/assets/images/resource/instagram-3.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="/assets/images/resource/instagram-4.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="/assets/images/resource/instagram-4.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="/assets/images/resource/instagram-5.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="/assets/images/resource/instagram-5.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="/assets/images/resource/instagram-6.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="/assets/images/resource/instagram-6.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="/assets/images/resource/instagram-1.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="/assets/images/resource/instagram-1.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="/assets/images/resource/instagram-2.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="/assets/images/resource/instagram-2.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="/assets/images/resource/instagram-3.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="/assets/images/resource/instagram-3.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="/assets/images/resource/instagram-4.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="/assets/images/resource/instagram-4.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="/assets/images/resource/instagram-5.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="/assets/images/resource/instagram-5.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Instagram Block -->
			<div class="instagram-block">
				<div class="inner-box">
					<figure class="image-box"><img src="/assets/images/resource/instagram-6.jpg" alt=""></figure>
					<!--Overlay Box-->
					<div class="overlay-box">
						<div class="overlay-inner">
							<div class="content">
								<a href="/assets/images/resource/instagram-6.jpg" data-fancybox="instagram" data-caption="" class="lightbox-image option-btn" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
	</section>
	<!-- End Instagram Section -->
	
	<!-- Main Footer -->
    <footer class="main-footer" style="background-image:url(/assets/images/background/5.png)">
		<div class="auto-container">
			<div class="logo">
				<a href="index.html"><img src="/assets/images/footer-logo.png" alt="" /></a>
			</div>
			<ul class="footer-nav">
				<li><a href="#">Home</a></li>
				<li><a href="#">Recipes</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Events</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contacts</a></li>
			</ul>
			<ul class="social-box">
				<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
				<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
				<li><a href="#"><span class="fa fa-instagram"></span></a></li>
				<li><a href="#"><span class="fa fa-twitter"></span></a></li>
				<li><a href="#"><span class="fa fa-youtube-play"></span></a></li>
			</ul>
			<div class="copyright">&copy; All Right Reserved 2020</div>
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/assets/js/jquery.fancybox.js"></script>
<script src="/assets/js/appear.js"></script>
<script src="/assets/js/owl.js"></script>
<script src="/assets/js/wow.js"></script>
<script src="/assets/js/validate.js"></script>
<script src="/assets/js/jquery-ui.js"></script>
<script src="/assets/js/script.js"></script>

</body>

<!-- Mirrored from gico.io/spcica/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2024 20:01:16 GMT -->
</html>