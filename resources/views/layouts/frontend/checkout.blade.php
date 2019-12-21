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
        



     
 
        
    
    <main id="main" role="main">
       
        <section id="checkout-container">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Paket Tour</span>
                            
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Labuan Bajo</h6>
                                    <small class="text-muted">12 orang</small>
                                </div>
                                <span class="text-muted">Rp. 5.000.000(Uang DP)</span>
                            </li>
                            
                           <!--  <li class="list-group-item d-flex justify-content-between bg-light">
                                <div class="text-success">
                                    <h6 class="my-0">Promo code</h6>
                                    <small>EXAMPLECODE</small>
                                </div>
                                <span class="text-success">-$5</span>
                            </li> -->
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (Rupiah)</span>
                                <strong>Rp. 5.000.000</strong>
                            </li>
                        </ul>
                        <!-- <form class="card p-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">Redeem</button>
                                </div>
                            </div>
                        </form> -->
                        <!-- <div class="payment-methods">
                            <p class="pt-4 mb-2">Payment Options</p>
                            <hr>
                            <ul class="list-inline d-flex">
                                <li class="mx-1 text-info">
                                    <i class="fa-2x fa fa-cc-visa"></i>
                                </li>
                                <li class="mx-1 text-info">
                                    <i class="fa-2x fa fa-cc-stripe"></i>
                                </li>
                                <li class="mx-1 text-info">
                                    <i class="fa-2x fa fa-cc-paypal"></i>
                                </li>
                                <li class="mx-1 text-info">
                                    <i class="fa-2x fa fa-cc-jcb"></i>
                                </li>
                                <li class="mx-1 text-info">
                                    <i class="fa-2x fa fa-cc-discover"></i>
                                </li>
                                <li class="mx-1 text-info">
                                    <i class="fa-2x fa fa-cc-amex"></i>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Billing address</h4>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Nama Depan</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid first name is required.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Nama Belakang</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>

                           

                            <div class="mb-3">
                                <label for="email">Email
                                    <span class="text-muted">(Optional)</span>
                                </label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Alamat Penjemputan</label>
                                <input type="text" class="form-control" id="address" placeholder="Bandar Udara Umbu" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                           

                            
                           
                            <hr class="mb-4">

                            <h4 class="mb-3">Pembayaran</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="credit">Transfer via Bank(1234567890 a/n Jodhy)</label>
                                </div>
                              <!--   <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="debit">Debit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Nama rekening</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    <small class="text-muted">Nama lengkap di rekening anda</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                               
                            </div>
                          
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">
                                 Continue to checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    
       
    </main>
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