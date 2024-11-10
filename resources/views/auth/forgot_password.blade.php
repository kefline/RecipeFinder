<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RecipeFinder Register</title>
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
                <h1>Forgot Password</h1>
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

                            <form method="POST" action="{{ route('password.request') }}" id="forgotpasswordform" class="p-4 border rounded">
                                @csrf
                            
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="email" >
                                </div>
                            
                                <div class="text-center my-3">
                                    <div class="divider">
                                        <p class="divider-text">or</p>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="phone number" >
                                </div>
                            
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('auth.login') }}" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                            

                        </div>

                    </div>

                </div>
            </div>
        </div>



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
    <script>
        document.getElementById('email').addEventListeners('input'function() {
            const email = document.getElementById('email');
            const phone = document.getElementById('phone');

            phone.disable = email.value.trim() !== "";
        });

        document.getElementById('phone').addEventListeners('input'function() {
            const email = document.getElementById('email');
            const phone = document.getElementById('phone');

            email.disable = phone.value.trim() !== "";
        });
    </script>
    <script>
        const phoneInputField = querySelector(#phone);
        const phoneInput = window.intlTelInput(phoneInputField, {
            initialcountry: "US",
            autoplaceholder: "polite",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"

        });
    </script>

</body>

</html>
