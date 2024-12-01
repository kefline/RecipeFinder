<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <title>RecipeFinder|Dashboard</title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">


    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10793544805"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10793544805');
    </script>

</head>

<body>

    <div class="page-wrapper">

        <div class="preloader"></div>

        <header class="main-header header-style-one">

            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-box">
                            <div class="logo"><a href="index.html"><img src="images/logo.png" alt=""
                                        title=""></a></div>
                        </div>

                        <div class="nav-outer clearfix">
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{ route('dashboard') }}">Home</a>

                                        </li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li ><a href="{{route('recipe')}}">Recipes</a>
                                           
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
                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="fa fa-search"></span></button>
                                        <ul class="dropdown-menu pull-right search-panel"
                                            aria-labelledby="dropdownMenu3">
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
                                    <li>
                                        <a href="{{ route('auth.login') }}">
                                            <span class="icon fa fa-user"></span> Login
                                        </a>
                                    </li>
                                    <li class="recipe">
                                        <a href="{{route('add')}}">
                                            <span class="fa fa-plus-circle"></span> Add Recipe
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ route('auth.logout') }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            <a href=""
                                                onclick="event.preventDefault(); this.closest('form').submit();"
                                                class="link-light" title="Logout">
                                                <span class="icon fa fa-arrow-right"></span> Logout
                                            </a>
                                        </form>
                                    </li>
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
                    <div class="nav-logo"><a href="index.html"><img src="images/logo-2.png" alt=""
                                title=""></a></div>
                    <div class="menu-outer">
                    </div>
                </nav>
            </div>
        </header>
        
        <section class="banner-section">
            <div class="banner-carousel owl-theme owl-carousel">
                @foreach ($recipes as $recipe)
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(/assets/images/main-slider/1.jpg)"></div>

                    <div class="auto-container">
                        <div class="content-box">
                            <div class="author-image">
                                <img src="{{ $recipe->image_url ? asset('storage/' . $recipe->image_url) : asset('assets/images/default.jpg') }}" 
                                alt="Recipe Image" 
                                class="img-fluid recipe-image" 
                                style="max-width: 100%; height: auto; max-width: 150px; max-width: 250px;" />
                           
                            </div>
                            <div class="info-list clearfix">
                                <div class="sales">{{$recipe->title}}</div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half-o"></span>&ensp;
                                    8 Reviews
                                </div>
                                <!-- Author Name -->
                                
                            </div>
                            <h1>{{$recipe->title}}</h1>
                            <div class="text">{{Str::limit($recipe->description)}}</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>{{$recipe->cook_time}} Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>{{$recipe->peoples}}People</li>
                            </ul>
                        </div>
                    </div>
                    
                </div> 
                @endforeach
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
   
        <section class="categories-section">
            <div class="auto-container">

                <div class="sec-title centered">
                    <h2>Explore Tanzanian Recipe Categories</h2>
                    <div class="text">From the spicy coastal dishes to hearty inland meals, Tanzanian cuisine offers a rich variety of flavors that cater to every taste. Explore these categories to discover traditional recipes, street food, and festive meals enjoyed across the country.</div>
                </div>
                

                <div class="categories-tab">

                    <div class="tab-btns-box">
                        <!--Tabs Header-->
                        <div class="tabs-header">
                            <ul class="product-tab-btns clearfix">
                                @foreach ($recipes as $recipe)
                                <li class="p-tab-btn active-btn" data-tab="#p-tab-1">{{$recipe->category}} </li> 
                                @endforeach
                                
                                
                            </ul>
                        </div>
                    </div>

                    <div class="p-tabs-content">

                        <div class="p-tab active-tab" id="p-tab-1">
                            <div class="project-carousel owl-theme owl-carousel">

								@foreach ($recipes as $recipe)
								<div class="category-block">
                                    <div class="inner-box">
                                        <div class="image">
											<img src="{{ $recipe->image_url ? asset('storage/' . $recipe->image_url) : asset('assets/images/default.jpg') }}"
											alt="Recipe Image" class="recipe-image" />
                                        </div>
                                        <div class="lower-content">
                                            <h4><a href="#">{{$recipe->title}}</a></h4>
                                            <div class="text">{{ Str::limit($recipe->description, 150) }}</div>
                                        </div>
                                    </div>
                                </div>
								@endforeach

                              
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>
     
        <section class="trending-section">
            <div class="auto-container">
                <div class="layer-one" style="background-image: url(/assets/images/resource/category-pattern-1.png)">
                </div>
                <div class="layer-two" style="background-image: url(/assets/images/resource/category-pattern-1.png)">
                </div>
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title">TRENDING</div>
                                <h2>Standing Rib Roast</h2>
                                <div class="text">Preheat oven to 325°. In a small bowl, mix the first 5 ingredients.
                                    Place roast in a roasting pan, fat side up; rub with seasoning mixture.Roast 2-1/4
                                    to 2-3/4 hours or until meat reaches desired doneness (for medium-rare, a
                                    thermometer should read 135°; medium, 140°; medium-well, 145°). Remove roast from
                                    oven; tent with foil. Let stand 15 minutes before carving.</div>
                            </div>
                            <div class="bold-text">To separate the fat from the drippings with ease, try this tool from
                                OXO ($14).</div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="/assets/images/resource/category.png" alt="" />
                                <div class="mints">15 Min</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
      
        <section class="popular-recipes-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h2>Populer Recipes Posts</h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt
                                ut</div>
                        </div>
                        <div class="pull-right">
                            <a href="{{route('recipe')}}" class="theme-btn btn-style-one"><span class="txt">See all
                                    Post</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="outer-container">
                <div class="row clearfix">
                    @foreach ($recipes as $recipe)
                    <!-- Recipes Block -->
                    <div class="recipes-block col-lg-3 col-md-6 col-sm-12">
                       
                        <div class="inner-box">
                            
                            <div class="image">
                                <a href=""> <img src="{{ $recipe->image_url ? asset('storage/' . $recipe->image_url) : asset('assets/images/default.jpg') }}"
                                    alt="Recipe Image" class="recipe-image" />
                            </div>
                            <div class="lower-content">
                                
                                <div class="category">{{$recipe->category}}</div>
                                <h4><a href="recipes-detail.html">{{$recipe->title}}</a></h4>
                                <div class="text">{{Str::limit($recipe->description,150)}}</div>
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                    <li><span class="icon flaticon-clock-3"></span>{{$recipe->cook_time}}Min</li>
                                    <li><span class="icon flaticon-business-and-finance"></span>{{$recipe->peoples}} People</li>
                                </ul>
                            </div>
                        </div>  
                           
                       
                    </div>

                   
                    @endforeach
                </div>
            </div>
        </section>
      
        {{-- <section class="trending-recipes-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h2>Trending Recipes</h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt
                                ut</div>
                        </div>
                        <div class="pull-right">
                            <a href="recipes.html" class="theme-btn btn-style-one"><span class="txt">See all
                                    Post</span></a>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">

                    <!-- Recipes Block -->
                    <div class="recipes-block style-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="/assets/images/resource/recipe-5.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="author-image"><a href="author-details.html"><img
                                            src="/assets/images/resource/author-3.jpg" alt="" /></a></div>
                                <div class="category">CHICKEN</div>
                                <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a>
                                </h4>
                                <div class="text">Discover a sleighload of tasty snacks that are just right for
                                    holiday feasting.</div>
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                    <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                    <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Recipes Block -->
                    <div class="recipes-block style-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="/assets/images/resource/recipe-6.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="author-image"><a href="author-details.html"><img
                                            src="/assets/images/resource/author-3.jpg" alt="" /></a></div>
                                <div class="category">CHICKEN</div>
                                <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a>
                                </h4>
                                <div class="text">Discover a sleighload of tasty snacks that are just right for
                                    holiday feasting.</div>
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                    <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                    <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Recipes Block -->
                    <div class="recipes-block style-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="/assets/images/resource/recipe-7.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="author-image"><a href="author-details.html"><img
                                            src="/assets/images/resource/author-3.jpg" alt="" /></a></div>
                                <div class="category">CHICKEN</div>
                                <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a>
                                </h4>
                                <div class="text">Discover a sleighload of tasty snacks that are just right for
                                    holiday feasting.</div>
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                    <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                    <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
       
        <section class="call-to-action-section" style="background-image:url(/assets/images/background/2.jpg)">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <div class="title">Pizza</div>
                            <h2>Your Complete Christmas <br> Dinner Planning Guide</h2>
                            <div class="text">Special occasions call for extraordinary food. Whether your gathering
                                is big or small, casual or formal, here's everything you need to create a crowd-pleasing
                                holiday feast</div>
                        </div>
                        <a href="#" class="theme-btn btn-style-two"><span class="txt">Check
                                Recipe</span></a>
                    </div>

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <div class="title">Breakfast</div>
                            <h2>How to Meal Prep Breakfast Sandwiches for the <br> Week Ahead</h2>
                            <div class="text">Special occasions call for extraordinary food. Whether your gathering
                                is big or small, casual or formal, here's everything you need to create a crowd-pleasing
                                holiday feast</div>
                        </div>
                        <a href="#" class="theme-btn btn-style-two"><span class="txt">Check
                                Recipe</span></a>
                    </div>

                </div>
            </div>
        </section>
     
        {{-- <section class="video-section">
            <div class="auto-container">
                <div class="row clearfix">
        
                    @foreach ($recipes as $recipe)
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <div class="video-box">
                            <div class="image">
                                <h4>{{ $recipe->title }}</h4>
                                <img src="{{ $recipe->image_url ? asset('storage/' . $recipe->image_url) : asset('assets/images/default.jpg') }}" 
                                     alt="{{ $recipe->title }}" />
                                
                                @php
                                    $videoId = '';
                                    if (str_contains($recipe->video_url, 'youtube.com') || str_contains($recipe->video_url, 'youtu.be')) {
                                        $videoId = Str::after($recipe->video_url, 'v=');
                                    } elseif (str_contains($recipe->video_url, 'youtu.be')) {
                                        $videoId = Str::afterLast($recipe->video_url, '/');
                                    }
                                @endphp
                                
                                @if ($videoId)
                                    <div class="video-container">
                                        <iframe 
                                            src="https://www.youtube.com/embed/{{ $videoId }}" 
                                            frameborder="0" 
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                @else
                                    <a href="{{ asset('storage/' . $recipe->video_url) }}" class="lightbox-image overlay-box">
                                        <span class="flaticon-media-play-symbol">
                                            <i class="ripple"></i>
                                        </span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                
        
                </div>
            </div>
        </section> --}}
        
{{--     
        <section class="entertaining-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2>Entertaining</h2>
                </div>

                <div class="row clearfix">

                    <!-- Entertaining Block -->
                    <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="/assets/images/resource/entertaining-1.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="icon "></span>21 Jan ,2020</li>
                                    <li><span class="icon flaticon-comment"></span>4</li>
                                    <li><span class="icon flaticon-heart"></span>5</li>
                                </ul>
                                <h4><a href="recipes-detail.html">Pop-Tarts Dropping New Pretzel Flavors Nationwide</a>
                                </h4>
                                <a href="recipes-detail.html" class="theme-btn read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Entertaining Block -->
                    <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="/assets/images/resource/entertaining-2.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="icon "></span>21 Jan ,2020</li>
                                    <li><span class="icon flaticon-comment"></span>4</li>
                                    <li><span class="icon flaticon-heart"></span>5</li>
                                </ul>
                                <h4><a href="recipes-detail.html">The Cosmic Crisp Apple Is Here and We’re Already
                                        Obsessed</a></h4>
                                <a href="recipes-detail.html" class="theme-btn read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Entertaining Block -->
                    <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="/assets/images/resource/entertaining-3.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="icon "></span>21 Jan ,2020</li>
                                    <li><span class="icon flaticon-comment"></span>4</li>
                                    <li><span class="icon flaticon-heart"></span>5</li>
                                </ul>
                                <h4><a href="recipes-detail.html">Good Grief! 9 Ideas for a Charlie Brown Christmas
                                        Party</a></h4>
                                <a href="recipes-detail.html" class="theme-btn read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Entertaining Block -->
                    <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="/assets/images/resource/entertaining-4.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="icon "></span>21 Jan ,2020</li>
                                    <li><span class="icon flaticon-comment"></span>4</li>
                                    <li><span class="icon flaticon-heart"></span>5</li>
                                </ul>
                                <h4><a href="recipes-detail.html">How to Remove Sulfites from Wine the Easy Way</a>
                                </h4>
                                <a href="recipes-detail.html" class="theme-btn read-more">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
 
        {{-- <section class="treats-section">
            <div class="layer-one" style="background-image: url(/assets/images/background/3.png)"></div>
            <div class="layer-two" style="background-image: url(/assets/images/background/4.png)"></div>
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h2>Winter Wonderland Treats</h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt
                                ut</div>
                        </div>
                        <div class="pull-right">
                            <a href="recipes.html" class="theme-btn btn-style-one"><span class="txt">See all
                                    Treats</span></a>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">

                    <!-- Treat Block -->
                    <div class="treat-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="/assets/images/resource/treat-1.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h4><a href="recipes-detail.html">Brownie Butte scotch Trifles</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Treat Block -->
                    <div class="treat-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="/assets/images/resource/treat-2.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h4><a href="recipes-detail.html">Brownie Butte scotch Trifles</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Treat Block -->
                    <div class="treat-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="/assets/images/resource/treat-3.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h4><a href="recipes-detail.html">Brownie Butte scotch Trifles</a></h4>
                            </div>
                        </div>
                    </div>

                    <!-- Treat Block -->
                    <div class="treat-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="recipes-detail.html"><img src="/assets/images/resource/treat-4.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h4><a href="recipes-detail.html">Brownie Butte scotch Trifles</a></h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
         --}}

       
        <section class="subscribe-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <h1>Subscribe to the best <br> recipes feed.</h1>
                        <!-- Subscribe Form -->
                        <div class="subscribe-form">
                            <form method="post" action="{{route('contact.store')}}">
                                @csrf
                                <div class="form-group clearfix">
                                    <input type="email" name="email" value=""
                                        placeholder="Enter your email" required>
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
  
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span>
    </div>

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
