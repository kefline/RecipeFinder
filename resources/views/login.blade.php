<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>RecipeFinder Login</title>
<link href="/assets/css/bootstrap.css" rel="stylesheet">
<link href="/assets/css/main.css" rel="stylesheet">
<link href="/assets/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
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
									<li class="dropdown"><a href="#">Home</a>
										<ul>
											<li><a href="index.html">Home Page 01</a></li>
											<li><a href="index-2.html">Home Page 02</a></li>
										</ul>
									</li>
									<li><a href="about-us.html">About Us</a></li>
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
									<li><a href="category.html">Category</a></li>
									<li class="current dropdown"><a href="#">Blog</a>
										<ul>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-single.html">Blog Single</a></li>
											<li><a href="not-found.html">Not Found / 404</a></li>
											<li><a href="login.html">Login</a></li>
											<li><a href="signup.html">Sign Up</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact us</a></li>
								</ul>
							</div>
							
						</nav>
						
						<div class="outer-box">
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
        
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-remove"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="/assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"></div>
            </nav>
        </div>
		
    </header>
	
    <section class="page-title" style="background-image:url(/assets/images/background/17.png)">
    	<div class="auto-container">
			<h1>login</h1>
        </div>
    </section>
	
	<!-- Login Container -->
    <div class="login-container margin">
		<div class="top-layer" style="background-image:url(/assets/images/background/20.png)"></div>
		<div class="bottom-layer" style="background-image:url(/assets/images/background/21.png)"></div>
    	<div class="auto-container">
			<div class="inner-container">
				
				<div class="image">
					<img src="/assets/images/resource/login.jpg" alt="" />
					
					<!-- Login Form -->
					<div class="login-form">
						<div class="pattern-layer" style="background-image:url(/assets/images/background/18.png)"></div>
						<div class="pattern-layer-2" style="background-image:url(/assets/images/background/19.png)"></div>
						<a href="#" class="facebook-login"><span class="fa fa-facebook-f"></span>&nbsp; Login In with Facebook</a>
                       
                        
						<div class="fill">or fill the form</div>
						
						<!-- Register Form -->
						<form method="post">

							<div class="form-group">
								<input type="text" name="name" placeholder="User Name" required>
							</div>
							
							<div class="form-group">
								<input type="password" name="password" placeholder="Password" required>
							</div>
							
							<div class="form-group">
								<div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Remember me</label> <a href="#">Forgot password?</a></div>
							</div>
							
							<div class="form-group">
								<button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Login</span></button>
								Don't have an account? <a href="login.html">Sign Up</a>
							</div>

						</form>
							
					</div>
					<!-- End Register Form -->
					
				</div>
				
			</div>
		</div>
	</div>
	
    <footer class="main-footer" style="background-image:url(/assets/images/background/5.png)">
		<div class="auto-container">
			{{-- <div class="logo">
				<a href="index.html"><img src="/assets/images/footer-logo.png" alt="" /></a>
			</div> --}}
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

</html>