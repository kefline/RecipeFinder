<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Recipe Finder| Blog</title>
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
									<li ><a href="{{route('dashboard')}}">Home</a>
										
									</li>
									<li><a href="{{route('about')}}">About Us</a></li>
									<li><a href="{{route('recipe')}}">Recipes</a>
										
									</li>
									<li><a href="{{route('category')}}">Category</a></li>
									<li ><a href="{{route('blog')}}">Blog</a>
										
									</li>
									<li><a href="{{route('contact')}}">Contact us</a></li>
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
												<form method="post" action="{{route('recipe.search')}}">
													@csrf
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
								<li class="recipe"><a href="{{route('add')}}"><span class="fa fa-plus-circle"></span>&nbsp; Add Recipe</a></li>
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
                <div class="nav-logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"></div>
            </nav>
        </div>
    </header>
   
    <section class="page-title" style="background-image:url(/assets/images/background/14.jpg)">
    	<div class="auto-container">
			<h1>Blog List</h1>
        </div>
    </section>
   
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-list">
						@foreach ($recipes as $recipe)
						<div class="news-block">
							<div class="inner-box">
								<div class="image">
									<a href="blog-single.html"><img src="{{ $recipe->image_url ? asset('storage/' . $recipe->image_url) : asset('assets/images/default.jpg') }}"
										alt="Recipe Image" class="recipe-image" /></a>
								</div>
								<div class="lower-content" style="background-image:url(/assets/images/background/15.html)">
									<h3><a href="blog-single.html">40+ healthy vegetable and fruit soups <br> to eat this fall</a></h3>
									<ul class="post-info">
										<li>{{$recipe->created_at->format('Y-m-d')}}</li>
									</ul>
									<div class="text">Understanding our diet is vital for living a long healthy life. Many foods and drinks give us enough energy to keep working for a few hours but may also bring several problems,</div>
								</div>
							</div>
						</div>
						@endforeach
					
						
						
						
						<div class="styled-pagination">
							<ul class="clearfix">
								<li class="active"><a href="#">01</a></li>
								<li><a href="#">02</a></li>
								<li><a href="#">03</a></li>
								<li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>
							</ul>
						</div>
						
					</div>
				</div>
				
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">
						<div class="sidebar-inner">
							
							<div class="sidebar-widget next-post-widget">
								<div class="sidebar-title">
									<h3>Read Next</h3>
								</div>
								<div class="widget-content">
									@foreach ($recipes as $recipe)
									<div class="next-post">
										<div class="post-inner" style="background-image: url('{{ $recipe->image_url ? asset('storage/' . $recipe->image_url) : asset('assets/images/default.jpg') }}');">
											<h4><a href="#">{{$recipe->title}}</a></h4>
										</div>
									</div>
									@endforeach
									
									
								</div>
							</div>
							
							<div class="sidebar-widget categories-widget">
								<div class="sidebar-title">
									<h3>Categories</h3>
								</div>
								<div class="widget-content">
									<ul class="blog-cat">
										@foreach ($recipes as $recipe)
										<li><a href="#">{{$recipe->category}} <span>( 17 )</span></a></li>
											
										@endforeach
										
									</ul>
								</div>
							</div>
							
							<div class="sidebar-widget carousel-post-widget">
								<div class="widget-content">
									<div class="single-item-carousel owl-carousel owl-theme">
									
										<div class="post-block">
											<div class="block-inner">
												<div class="image">
													<img src="/assets/images/resource/post-5.jpg" alt="" />
												</div>
												<div class="lower-content">
													<div class="author-image">
														<img src="/assets/images/resource/author-9.jpg" alt="" />
													</div>
													<div class="category">mutton biryani</div>
													<h4><a href="#">Pressure-Cooker Beef Short Ribs with Chutney</a></h4>
												</div>
											</div>
										</div>
										
										<div class="post-block">
											<div class="block-inner">
												<div class="image">
													<img src="/assets/images/resource/post-5.jpg" alt="" />
												</div>
												<div class="lower-content">
													<div class="author-image">
														<img src="/assets/images/resource/author-9.jpg" alt="" />
													</div>
													<div class="category">mutton biryani</div>
													<h4><a href="#">Pressure-Cooker Beef Short Ribs with Chutney</a></h4>
												</div>
											</div>
										</div>
										
										<div class="post-block">
											<div class="block-inner">
												<div class="image">
													<img src="/assets/images/resource/post-5.jpg" alt="" />
												</div>
												<div class="lower-content">
													<div class="author-image">
														<img src="/assets/images/resource/author-9.jpg" alt="" />
													</div>
													<div class="category">mutton biryani</div>
													<h4><a href="#">Pressure-Cooker Beef Short Ribs with Chutney</a></h4>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							
						</div>
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	
	<section class="subscribe-section" style="background-image: url(/assets/images/background/9.png)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<h1>Subscribe to the best <br> recipes feed.</h1>
					<!-- Subscribe Form -->
					<div class="subscribe-form">
						<form method="post" action="https://gico.io/spcica/contact.html">
							<div class="form-group clearfix">
								<input type="email" name="email" value="" placeholder="Enter your email" required>
								<button type="submit" class="theme-btn send-btn flaticon-paper-plane-2"></button>
							</div>
						</form>
					</div>
					<div class="inbox">Get recipes, tips, and news delivered to your inbox.</div>
				</div>
				
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<h1>Visit our store</h1>
					<div class="bold-text">Here you’ll find a carefully chosen kitchen inventory.</div>
					<ul class="subscribe-list">
						<li>Taste of Home is America's #1 <br> cooking magazine</li>
						<li>Midnight Chocolate <br> Midnight Chocolate 2% <br> Very Berry Strawberry</li>
					</ul>
				</div>
				
			</div>
		</div>
	</section>

    <footer class="main-footer" style="background-image:url(images/background/5.png)">
		<div class="auto-container">
			<div class="logo">
				<a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
			</div>
			<ul class="footer-nav">
				<li><a href="{{route('dashboard')}}">Home</a></li>
				<li><a href="{{route('recipe')}}">Recipes</a></li>
				<li><a href="{{route('about')}}">About us</a></li>
				<li><a href="{{route('blog')}}">Blog</a></li>
				<li><a href="{{route('contact')}}">Contacts</a></li>
			</ul>
			<ul class="social-box">
				<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
				<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
				<li><a href="#"><span class="fa fa-instagram"></span></a></li>
				<li><a href="#"><span class="fa fa-twitter"></span></a></li>
				<li><a href="#"><span class="fa fa-youtube-play"></span></a></li>
			</ul>
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
<script src="/assets/js/jquery-ui.js"></script>
<script src="/assets/js/script.js"></script>

</body>

</html>