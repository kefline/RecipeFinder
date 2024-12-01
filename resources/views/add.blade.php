<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RecipeFinder | Recipes</title>
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
                                                            <!-- Search Input Field -->
                                                            <input type="search" name="search" value="{{ request('search') }}" placeholder="Search Recipes" required autocomplete="off">
                                                    
                                                            <!-- Search Button -->
                                                            <button type="submit" class="search-btn">
                                                                <span class="fa fa-search"></span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                    
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="login-info">
                                    <li><a href="{{ route('auth.login') }}"><span
                                                class="icon fa fa-user"></span>Login</a></li>
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

        <section class="page-title" style="background-image:url(/assets/images/background/10.jpg)">
            <div class="auto-container">
                <h1>Add recipe</h1>
            </div>
        </section>

        <section class="add-recipe-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="add-recipe-col">
                            <h4>Please fill up all fields for submit a recipe</h4>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>

                                </div>

                            @endif
                            <form method="POST" action="{{ route('recipe.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-4">
                                    <label>Recipe Title</label>
                                    <input type="text" class="form-control" name="title"
                                        placeholder="Example: Hamburger Steak with Onions" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label>Recipe Description</label>
                                    <textarea class="form-control" name="description" rows="4" placeholder="Write Here..." required></textarea>
                                </div>

                                <div class="form-group mb-4">
                                    <label>Add an image</label>
                                    <input type="file" class="form-control-file" name="image" id="imageUpload">
                                    <small class="form-text text-muted">Allowed formats: JPEG, PNG, JPG, GIF. Max size:
                                        5MB</small>
                                </div>

                                <div class="form-group mb-4">
                                    <label>Tags</label>
                                    <input type="text" class="form-control" name="tags"
                                        placeholder="Example: Pizza, Burger, Fried Rice" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label>Video URL</label>
                                    <input type="text" class="form-control" name="video_url"
                                        placeholder="For example: https://www.youtube.com/embed/sv3TXMSv6Lw" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label>Directions</label>
                                    <div id="directions-container">
                                        <textarea class="form-control direction-item" name="directions[]" rows="3" placeholder="Write here..."
                                            required></textarea>
                                    </div>
                                    <button type="button" class="btn btn-secondary" id="addDirection">Add Another
                                        Direction</button>
                                </div>
                                <div class="form-group">
                                    <label for="ingredients">Ingredients</label>
                                    <div id="ingredients">
                                        <div class="ingredient-item">
                                            <input type="text" name="ingredients[0][name]"
                                                placeholder="Ingredient Name" class="form-control" required>
                                            <input type="text" name="ingredients[0][amount]" placeholder="Amount"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <button type="button" id="add-ingredient" class="btn btn-secondary">Add More
                                        Ingredients</button>
                                </div>


                                <div class="form-group">
                                    <label for="nutritions">Nutritions</label>
                                    <div id="nutritions">
                                        <div class="nutrition-item">
                                            <input type="text" name="nutritions[0][name]"
                                                placeholder="Nutrition Name" class="form-control" required>
                                            <input type="text" name="nutritions[0][amount]" placeholder="Amount"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <button type="button" id="add-nutrition" class="btn btn-secondary">Add More
                                        Nutritions</button>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Category</label>

                                    <select name="category" id="selectcategory" class="form-control" required>
                                        <option value="select category">Select the category</option>
                                        @foreach ($recipes as $recipe)
                                        <option value="{{$recipe->category}}">{{$recipe->category}}</option>
                                            
                                        @endforeach
                                    </select>
                                    {{-- <input type="text" class="form-control" name="category"
                                        placeholder="Enter category" required> --}}
                                </div>


                                <div class="form-group mb-4">
                                    <label>Peoples</label>
                                    <input type="number" class="form-control" name="peoples" min="1"
                                        max="100" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label>Cook Time (Minutes)</label>
                                    <input type="number" class="form-control" name="cook_time" min="1"
                                        max="300" required>
                                </div>

                                <button type="submit" class="btn btn-secondary">Submit Recipe</button>
                            </form>

                        </div>
                    </div>
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
                                    <input type="email" name="email" value=""
                                        placeholder="Enter your email" required>
                                    <button type="submit" class="theme-btn send-btn flaticon-paper-plane-2"
                                        placeholder="Enter your email"></button>
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
    <script src="/assets/js/jquery.simpleLoadMore.min.js"></script>
    <script src="/assets/js/script.js"></script>

    <script>
        let ingredientCount = 1;
        document.getElementById('add-ingredient').addEventListener('click', function() {
            const newIngredient = document.createElement('div');
            newIngredient.classList.add('ingredient-item');
            newIngredient.innerHTML = `
            <input type="text" name="ingredients[${ingredientCount}][name]" placeholder="Ingredient Name" class="form-control" required>
            <input type="text" name="ingredients[${ingredientCount}][amount]" placeholder="Amount" class="form-control" required>
        `;
            document.getElementById('ingredients').appendChild(newIngredient);
            ingredientCount++;
        });

        document.getElementById('addDirection').addEventListener('click', function() {
            var newTextarea = document.createElement('textarea');
            newTextarea.classList.add('form-control');
            newTextarea.classList.add('direction-item');
            newTextarea.setAttribute('name', 'directions[]');
            newTextarea.setAttribute('rows', '3');
            newTextarea.setAttribute('placeholder', 'Write here...');
            newTextarea.required = true; // Make it required
            document.getElementById('directions-container').appendChild(newTextarea);
        });


        let nutritionCount = 1;
        document.getElementById('add-nutrition').addEventListener('click', function() {
            const newNutrition = document.createElement('div');
            newNutrition.classList.add('nutrition-item');

            newNutrition.innerHTML = `
            <input type="text" name="nutritions[${nutritionCount}][name]" placeholder="Nutrition Name" class="form-control" required>
            <input type="text" name="nutritions[${nutritionCount}][amount]" placeholder="Amount" class="form-control" required>
        `;

            document.getElementById('nutritions').appendChild(newNutrition);
            nutritionCount++;
        });

        document.getElementById('imageUpload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];

            if (!allowedTypes.includes(file.type)) {
                alert('Invalid file type. Please upload an image (JPEG, PNG, JPG, GIF).');
                e.target.value = ''; // Clear the input
                return;
            }

            if (file.size > 5 * 1024 * 1024) { // 5MB limit
                alert('File size exceeds 5MB. Please choose a smaller file.');
                e.target.value = ''; // Clear the input
            }
        });
    </script>
    <script>
        $('.loadmore').simpleLoadMore({
            item: '.load-item',
            count: 1,
            itemsToLoad: 1,
        });
    </script>

</body>

</html>
