<!DOCTYPE html>
<html lang="en">

<head>
    <title>Checkout plus - One Step Checkout</title>
    <!-- Required meta tags always come first -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Checkout - One Step Checkout , Responsive Bootstrap 4 template , bootstrap 4 starter template, bootstrap4 template, checkout template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" lang="en" content="Checkout Bootstrap 4 pricing template , Responsive and Modern HTML5 Template made from bootstrap 4.">
    <meta name="keywords" lang="en" content="pricing template, bootstrap 4 template,bootstrap 4 checkout template, responsive bootstrap 4 template, bootstrap 4, bootstraping, bootstrap4, oribitthemes">
    <meta name="robots" content="index, follow">

    <meta name="description" content="">
    <!--Font Awesome-->
    <link rel="stylesheet" href="{{ url ('assets/css/font-awesomecheck.min.css')}}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url ('assets/css/maincheck.min.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ url ('assets/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ url ('assets/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ url ('assets/css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ url ('assets/css/magnific-popup.css') }}">



    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ url ('assets/css/flexslider.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ url ('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url ('assets/css/owl.theme.default.min.css') }}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-datepicker.css') }}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ url('assets/fonts/flaticon/font/flaticon.css') }}">
<link rel="stylesheet" href="{{ url ('assets/css/reset.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ url ('assets/css/style.css') }}">

    <!-- Modernizr JS -->
    <!-- <script src="{{url ('assets/js/modernizr-2.6.2.min.js') }}"></script>
     --><!-- FOR IE9 below -->

    <!-- <script src="{{ url('assets/js/respond.min.js') }} "></script> -->

    <!-- css login -->

    <link rel="stylesheet" href="{{ url ('assets/css/style2.css')}}"> <!-- Resource style -->

    <link rel="stylesheet" href="{{ url ('assets/css/demo.css')}}"> <!-- Demo style -->

    <!--[if IE]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->
    <!--[if lt IE 9]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <![endif]-->
</head>

<body>




        <nav class="colorlib-nav" role="navigation" style="position: static; background-color: #2c2e3e">
            <div class="top-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="colorlib-logo"><a href="index.html">H</a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul class="js-signin-modal-trigger">
                                <li class=""><a href="/">Home</a></li>
                                <!-- <li class="has-dropdown">
                                    <a href="tours.html">Tours</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Destination</a></li>
                                        <li><a href="#">Cruises</a></li>
                                        <li><a href="#">Hotels</a></li>
                                        <li><a href="#">Booking</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="/tours">Tours</a></li>
                                <li><a href="/service">Services</a></li>
                                <!-- <li><a href="blog.html">Blog</a></li> -->
                                <li><a href="/about">About</a></li>
                                <li><a href="/contact">Contact</a></li>



                            </ul>



                        </div>
                    </div>


                </div>

            </div>

        </nav>




     <div class="cd-signin-modals js-signin-modal"> <!-- this is the entire modal form, including the background -->
                                <div class="cd-signin-modal__container "> <!-- this is the container wrapper -->




                                    <div class="cd-signin-modal__blocks js-signin-modal-block js-signin-modal-switcher js-signin-modal-trigger" data-type="signup"> <!-- sign up form -->
                                        <form class="cd-signin-modal__form" action ="/register/process" method="post" enctype="application/x-www-form-urlencoded">
                                        @csrf
                                            <p class="cd-signin-modal__fieldset" >
                                                <label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signup-username" >Username</label>
                                                <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-username" type="text" placeholder="Username" name="name">
                                                <span class="invalid-feedback d-block">{{$errors->first('name')}}</span>
                                            </p>

                                            <p class="cd-signin-modal__fieldset" >
                                                <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signup-email">E-mail</label>
                                                <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-email" type="email" placeholder="E-mail" name="email">
                                                <span class="invalid-feedback d-block">{{$errors->first('email')}}</span>
                                            </p>

                                            <p class="cd-signin-modal__fieldset">
                                                <label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signup-password">Password</label>
                                                <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-password" type="text" placeholder="Password" name="password">
                                                <a href="#0" class="cd-signin-modal__hide-password js-hide-password">Hide</a>
                                                <span class="invalid-feedback d-block">{{$errors->first('password')}}</span>
                                            </p>

                                            <p class="cd-signin-modal__fieldset">
                                                <input type="checkbox" id="accept-terms" class="cd-signin-modal__input ">
                                                <label for="accept-terms">I agree to the <a href="#0">terms and condition</a></label>
                                            </p>

                                            <p class="cd-signin-modal__fieldset">
                                                <button class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Create account">Create account</button>
                                            </p>
                                        </form>
                                    </div> <!-- cd-signin-modal__block -->

                                    <div class="cd-signin-modal__block js-signin-modal-block" data-type="reset"> <!-- reset password form -->
                                        <p class="cd-signin-modal__message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                                        <form class="cd-signin-modal__form">
                                            <p class="cd-signin-modal__fieldset">
                                                <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="reset-email">E-mail</label>
                                                <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="reset-email" type="email" placeholder="E-mail">
                                                <span class="cd-signin-modal__error">Error message here!</span>
                                            </p>

                                            <p class="cd-signin-modal__fieldset">
                                                <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Reset password">
                                            </p>
                                        </form>

                                        <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="login">Back to log-in</a></p>
                                    </div> <!-- cd-signin-modal__block -->
                                    <a href="#0" class="cd-signin-modal__close js-close">Close</a>
                                </div> <!-- cd-signin-modal__container -->
                            </div> <!-- cd-signin-modal -->

    <footer id="colorlib-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 colorlib-widget">
                        <h4>Tour Agency</h4>
                        <p>Sebuah agency tour yang menyediakan destinasi lokal di indonesia.</p>
                        <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                    </div>
                    <!-- <div class="col-md-2 colorlib-widget">
                        <h4>Book Now</h4>
                        <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#">Flight</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Tour</a></li>
                                <li><a href="#">Car Rent</a></li>
                                <li><a href="#">Beach &amp; Resorts</a></li>
                                <li><a href="#">Cruises</a></li>
                            </ul>
                        </p>
                    </div> -->
                    <!-- <div class="col-md-2 colorlib-widget">
                        <h4>Top Deals</h4>
                        <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#">Edina Hotel</a></li>
                                <li><a href="#">Quality Suites</a></li>
                                <li><a href="#">The Hotel Zephyr</a></li>
                                <li><a href="#">Da Vinci Villa</a></li>
                                <li><a href="#">Hotel Epikk</a></li>
                            </ul>
                        </p>
                    </div> -->
                    <!-- <div class="col-md-2">
                        <h4>Blog Post</h4>
                        <ul class="colorlib-footer-links">
                            <li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
                            <li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
                            <li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
                        </ul>
                    </div> -->

                    <div class="col-md-3 col-md-push-1">
                        <h4>Contact Information</h4>
                        <ul class="colorlib-footer-links">
                            <li>Sunib, Palang Merah <br> No. 111</li>
                            <li><a href="tel://1234567920">0812 1111 5555</a></li>
                            <li><a href="mailto:info@yoursite.com">holidayplanner@gmail.com</a></li>
                            <li><a href="#">www.holidayplanner.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Holiday Planner IT Division
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>

                        </p>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Footer -->

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="{{ url ('assets/js/jquery.min.js')}}"></script>
    <script src="{{ url ('assets/js/popper.min.js')}}" integrity=""></script>
    <script src="{{ url ('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ url ('assets/js/maincheck.min.js')}}"></script>
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ url('assets/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ url('assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ url('assets/js/jquery.flexslider-min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/js/magnific-popup-options.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ url('assets/js/bootstrap-datepicker.js') }}"></script>
    <!-- Stellar Parallax -->
    <script src="{{ url ('assets/js/jquery.stellar.min.js') }}"></script>
    <!-- Main -->
    <script src="{{ url('assets/js/main.js') }}"></script>

    <!-- js login -->
    <script src="{{ url ('assets/js/placeholders.min.js')}}"></script> <!-- polyfill for the HTML5 placeholder attribute -->
    <script src="{{ url ('assets/js/main2.js')}}"></script> <!-- Resource JavaScript -->
</body>

</html>
