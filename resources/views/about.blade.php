<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>RecipeFinder| About Us</title>
<link href="/assets/css/bootstrap.css" rel="stylesheet">
<link href="/assets/css/main.css" rel="stylesheet">
<link href="/assets/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/custom.css">

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
                <div class="nav-logo"><a href="index.html"><img src="/assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"></div>
            </nav>
        </div>
		
    </header>
	
    <section class="page-title" style="background-image:url(/assets/images/background/10.jpg)">
    	<div class="auto-container">
			<h1>About Recipe Finder</h1>
        </div>
    </section>
	
	<section class="product-form-section">
		<div class="auto-container">
			<div class="inner-container margin-top">
				
				<div class="default-form">
					<form method="post" action="{{ route('recipe.search') }}">
						@csrf
						<div class="clearfix">

							<div class="form-group col-lg-3 col-md-6 col-sm-12">
								<select class="custom-select-box" name="category">
									<option value="">Select category</option>
									@foreach ($recipes as $recipe)
										<option value="{{ $recipe->category }}">{{ $recipe->category }}</option>
									@endforeach
								</select>
							</div>

							<div class="form-group col-lg-7 col-md-6 col-sm-12">
								<input type="text" id="recipe-search" name="title"
									placeholder="Type a recipe..." autocomplete="off">
								<div id="search-results" class="search-results-container"></div>
							</div>

							<div class="form-group col-lg-2 col-md-12 col-sm-12">
								<button type="submit" class="theme-btn search-btn"><span class="fa fa-search">
										Search</span></button>
							</div>

						</div>
					</form>
				</div>
				
			</div>
		</div>
	</section>
	
	<section class="about-section">
		<div class="layer-one" style="background-image: url(/assets/images/resource/category-pattern-1.png)"></div>
		<div class="layer-two" style="background-image: url(/assets/images/resource/category-pattern-1.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="/assets/images/resource/about.png" alt="" />
						</div>
					</div>
				</div>
				
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<div class="title">About Us</div>
							<h2>Our Philosophy</h2>
						</div>
						<div class="bold-text">Welcome to Recipe Finder, where healthy, delicious meals come to life!</div>
						<div class="text">
							<p>At Recipe Finder, we believe that great meals are more than just food – they're about nourishing your body, mind, and soul. Our mission is simple: to help you find the perfect meal that aligns with your health goals, dietary preferences, and lifestyle. Whether you're looking to cook something quick and healthy for yourself or prepare a meal that will impress guests, we've got you covered.</p>
							<p>We understand that cooking can be a challenge, especially when you're juggling a busy life. That's why we offer a range of meal options, from easy-to-follow recipes to customized ingredient lists that make healthy cooking fun and accessible for everyone. Our focus is on wholesome, nutrient-dense meals that not only taste great but also support your well-being.</p>
							<p>From breakfast to dinner, vegan to gluten-free, our goal is to help you create meals that you'll love while keeping your health on track. Let us help you cook the best meal ever, every time!</p>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</section>
	
    <section class="founder-section">
    	<div class="auto-container">
			<div class="row clearfix">
				
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3>Meet the Founder of Recipe Finder</h3>
						<div class="bold-text">When I'm not busy developing new meal ideas or perfecting recipes, you’ll find me traveling, practicing yoga, reading, laughing, cooking, and giving back to the community through volunteering. I’m passionate about helping others – whether it’s through animal rescues, humanitarian outreach, or sharing a good meal with friends and family.</div>
						<div class="text">
							<p>I have a true love for food – it’s not just about eating, but about nourishing my body and soul. I believe that the right meals can transform how we feel every day. While I do have a soft spot for indulgent treats (yes, I’ll admit it – chocolate chip cookies are hard to resist!), I generally prefer foods that make me feel energized, healthy, and ready to take on the world.</p>
							<p>For me, these "happy dance" foods are the ones that fuel my body and give me that burst of energy. They’re the nutrient-packed meals that make my cells literally rejoice. From vibrant vegetables to wholesome grains, these foods are not just good for the body, but they’re delicious, too! My goal with Recipe Finder is to share these happy dance foods with you – meals that nourish your health while delighting your taste buds.</p>
						</div>
					</div>
					
				</div>
				
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="/assets/images/resource/founder.jpg" alt="" />
							<div class="year">15 <span>Years</span></div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<section class="call-to-action-section" style="background-image:url(/assets/images/background/2.jpg)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<div class="sec-title light">
						<div class="title">Pizza</div>
						<h2>Your Complete Christmas <br> Dinner Planning Guide</h2>
						<div class="text">Special occasions call for extraordinary food. Whether your gathering is big or small, casual or formal, here's everything you need to create a crowd-pleasing holiday feast</div>
					</div>
					<a href="{{route('recipe')}}" class="theme-btn btn-style-two"><span class="txt">Check Recipe</span></a>
				</div>
				
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<div class="sec-title light">
						<div class="title">Breakfast</div>
						<h2>How to Meal Prep Breakfast Sandwiches for the <br> Week Ahead</h2>
						<div class="text">Special occasions call for extraordinary food. Whether your gathering is big or small, casual or formal, here's everything you need to create a crowd-pleasing holiday feast</div>
					</div>
					<a href="{{route('recipe')}}" class="theme-btn btn-style-two"><span class="txt">Check Recipe</span></a>
				</div>
				
			</div>
		</div>
	</section>
	

	
	<section class="most-searched-recipes-section">
		<div class="auto-container">
			<div class="sec-title centered mt-10">
				<h2>Most Favourite Recipes</h2>
			</div>
	
			<div class="row clearfix">
				@foreach ($recipes as $recipe)
					<div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<a href="{{ route('recipe.show', $recipe->id) }}">
									<img src="{{ $recipe->image_url ? asset('storage/' . $recipe->image_url) : asset('assets/images/default.jpg') }}" alt="{{ $recipe->title }}" />
								</a>
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li><span class="icon"></span>{{ $recipe->created_at->format('d M, Y') }}</li>
									<li><span class="icon flaticon-search"></span>{{ $recipe->search_count }} Searches</li>
								</ul>
								<h4><a href="{{ route('recipe.show', $recipe->id) }}">{{ $recipe->title }}</a></h4>
								<a href="{{ route('recipe.show', $recipe->id) }}" class="theme-btn read-more">Read More</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	
	<section class="subscribe-section" style="background-image: url(/assets/images/background/9.png)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<h1>Subscribe to the best <br> recipes feed.</h1>
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
	

	
    <footer class="main-footer" style="background-image:url(/assets/images/background/5.png)">
		<div class="auto-container">
			
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
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const recipeSearchInput = document.getElementById('recipe-search');
		const searchResultsContainer = document.getElementById('search-results');

		// Listen for input event on the search field
		recipeSearchInput.addEventListener('input', function() {
			const query = recipeSearchInput.value.trim();

			if (query.length > 0) {
				// Fetch matching recipe titles based on user input
				fetch(`/recipe-live-search?title=${encodeURIComponent(query)}`)
					.then(response => response.json())
					.then(data => {
						// Clear previous results
						searchResultsContainer.innerHTML = '';

						if (data.length > 0) {
							// Display matching results
							data.forEach(recipe => {
								const resultItem = document.createElement('div');
								resultItem.className = 'search-result-item';
								resultItem.innerHTML = `<strong>${recipe.title}</strong>`;
								resultItem.addEventListener('click', () => {
									recipeSearchInput.value = recipe.title;
									searchResultsContainer.innerHTML =
										''; // Clear results after selecting
								});
								searchResultsContainer.appendChild(resultItem);
							});
						} else {
							searchResultsContainer.innerHTML = '<p>No results found</p>';
						}
					});
			} else {
				// Clear results if input is empty
				searchResultsContainer.innerHTML = '';
			}
		});
	});
</script>

</body>

</html>