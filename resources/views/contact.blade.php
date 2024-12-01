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
                                        <li><a href="{{ route('recipe') }}">Recipes</a>

                                        </li>
                                        <li><a href="{{ route('category') }}">Category</a></li>
                                        <li><a href="{{ route('blog') }}">Blog</a>

                                        </li>
                                        <li><a href="{{ route('contact') }}">Contact us</a></li>
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
                                                    <form method="post" action="{{ route('recipe.search') }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input type="search" name="field-name" value=""
                                                                placeholder="Search Here" required>
                                                            <button type="submit" class="search-btn"><span
                                                                    class="fa fa-search"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="login-info">
                                    <li><a href="login.html"><span class="icon fa fa-user"></span>Login</a></li>
                                    <li class="recipe"><a href="{{ route('add') }}"><span
                                                class="fa fa-plus-circle"></span>&nbsp; Add Recipe</a></li>
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
                    <div class="menu-outer"></div>
                </nav>
            </div>

        </header>

        <section class="page-title" style="background-image:url(/assets/images/background/14.jpg)">
            <div class="auto-container">
                <h1>Contact us</h1>
            </div>
        </section>

        <div class="contact-page-container">
            <div class="pattern-layer" style="background-image:url(/assets/images/background/16.png)"></div>
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <h2>Get in touch <br> and let us know how <br> we can help.</h2>
                                <div class="text">We’d love to hear from you! Whether you have questions, feedback,
                                    or need assistance, feel free to reach out to us.</div>
                            </div>
                            <ul class="contact-info-list">
                                <li>Address: Makumbusho, Dar es Salaam, Tanzania</li>
                                <li>Email: priscaephraim690@gmail.com</li>
                                <li>Phone: (+255) 0766 144 617</li>
                            </ul>
                            <div class="map">
                                <img src="/assets/images/icons/map.png" alt="Location Map" />
                            </div>
                        </div>

                    </div>

                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <div class="contact-form">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>

                                    </div>
                                @endif
                                    @include('_messages')
                                <form method="post" action="{{ route('contact.store') }}" id="contact-form">
                                    @csrf

                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="full_name" placeholder="Name" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>

                                    <div class="form-group">
                                        <textarea class="darma" name="message" placeholder="Type Your Message"></textarea>
                                    </div>

                                    <div class="form-group text-center">
                                        <button class="theme-btn btn-style-one" type="submit"
                                            name="submit-form"><span class="txt">Submit</span></button>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section class="subscribe-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <h1>Subscribe to the best <br> recipes feed.</h1>
                        <!-- Subscribe Form -->
                        <div class="subscribe-form">
                            <form method="post" action="">
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
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <li><a href="{{ route('recipe') }}">Recipes</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contacts</a></li>
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
    <script src="/assets/js/validate.js"></script>
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/script.js"></script>

</body>

</html>
