<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RecipeFinder reset</title>
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



        <section class="page-title" style="background-image:url(/assets/images/background/17.png)">
            <div class="auto-container">
                <h1>Reset Password</h1>
            </div>
        </section>

        <div class="login-container margin">
            <div class="auto-container">
                <div class="inner-container">

                    <div class="image">
                        <img src="/assets/images/resource/login.jpg" alt="" />

                        <div class="login-form">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{route('password.update')}}">

                                @csrf
                               bn 

                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Email" required value="{{old('email')}}">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" placeholder="Password"
                                        required>
                                </div>.
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="confirm_password"  placeholder="confirm password"  required>
                                </div>




                                <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                            class="txt">Reset</span></button>
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
