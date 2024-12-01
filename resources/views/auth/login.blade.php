<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RecipeFinder Login</title>
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <div class="page-wrapper">
        <div class="preloader"></div>

        <section class="page-title" style="background-image:url(/assets/images/background/17.png)">
            <div class="auto-container">
                <h1>Login</h1>
            </div>
        </section>

        <!-- Login Container -->
        <div class="login-container margin">
            <div class="top-layer" style="background-image:url(/assets/images/background/20.png)"></div>
            <div class="bottom-layer" style="background-image:url(/assets/images/background/21.png)"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="image">
                        <img src="/assets/images/resource/login.jpg" alt="Login Image" />
                        <div class="login-form">
                            <div class="pattern-layer" style="background-image:url(/assets/images/background/18.png)">
                            </div>
                            <div class="pattern-layer-2" style="background-image:url(/assets/images/background/19.png)">
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <a href="{{ route('auth.facebook') }}" class="btn btn-secondary">
                                            <span class="fa fa-facebook-f"></span> Login with Facebook
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{ route('auth.google') }}" class="btn btn-success">
                                            <span class="fa fa-google"></span> Login with Google
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center my-4">
                                <div class="divider">
                                    <span class="divider-text">or fill the form</span>
                                </div>
                            </div>

                            @if (session('status'))
                                <div class="alert alert-info">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('auth.login.submit') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>

                                <div class="form-group">
                                    <div class="check-box">
                                        <input type="checkbox" name="remember" id="account-option">
                                        &ensp; <label for="account-option" style="font-size: 16px">Remember me</label>
                                        <a href="{{ route('password.request') }}" style="font-size: 16px">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                                        <span class="txt">Login</span>
                                    </button>
                                    <p style="font-size: 16px">Don't have an account?
                                        <a href="{{ route('auth.register') }}" class="register-link" style="font-size: 16px">Register</a>
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="main-footer" style="background-image:url(/assets/images/background/5.png)">
            <div class="auto-container">
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
