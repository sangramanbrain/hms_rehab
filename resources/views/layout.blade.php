<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rehabilitation & Palliative Care</title>

    <!-- Stylesheets -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link rel="icon" href="{{asset('images/rehab-fav.png')}}" type="image/x-icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<!-- page wrapper -->
<body class="page-wrapper">
<!-- main header area -->
<header class="main-header">
    <!-- header upper -->
    <div class="header-middile">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo-box">
                        <a href="{{url('/')}}"><img src="images/web-logo.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="wrapper-box">
                        <div class="contact-info-two">
                            <div class="info-box">
                                <div class="icon-box"><span class="fa fa-phone"></span></div>
                                <h5>Make a call</h5>
                                <div class="text">+91 8926986203</div>
                            </div>
                            <div class="info-box">
                                <div class="icon-box"><span class="fa fa-phone"></span></div>
                                <h5>Toll Free</h5>
                                <div class="text">18008899311</div>
                            </div>
                            <div class="top-right">
                                <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn-one style-one">Enquiry
                                    Now</a>
                            </div>
                            @if(session()->has('message'))
                                <script>
                                    swal({
                                        title: "Message Sent!",
                                        text: "Thanks For Contacting Us!",
                                        icon: "success",
                                    });

                                </script>
                            @endif
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content homepage_modal">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Appointment Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                                    style="margin-top:-15px;">
            <span aria-hidden="true" style="font-size: 20px;
color: #000;
border: 1px solid #000;
padding: 4px;">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{url('/form/action')}}" method="post">
                                                @csrf
                                                <div class="col-md-6 form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" name="form_name"
                                                           placeholder="Enter your Name" maxlength="30" required/>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>E-mail</label>
                                                    <input type="email" class="form-control" name="form_email"
                                                           placeholder="Type your E-mail" maxlength="50" required/>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>Telephone no.</label>
                                                    <input type="text" class="form-control" name="form_phone"
                                                           placeholder="Contact Number" maxlength="12" required/>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>Subject</label>
                                                    <input type="text" class="form-control" name="form_subject"
                                                           placeholder="subject" required/>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label>Message</label>
                                                    <textarea placeholder="Leave comments" class="form-control"
                                                              name="form_message" required/></textarea><br/>
                                                    <button type="submit" class=" btn-succces btn-one style-one">
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div>
                            <a href="#" data-toggle="modal" data-target="#loginModal" class="btn-one style-one">Login
                                / Register</a>
                        </div>

                        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
                             aria-labelledby="loginModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content homepage_modal">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="logineModalLabel">Login Here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                                style="margin-top:-15px;">
                                            <span aria-hidden="true"
                                                  style="font-size: 20px;color: #000;border: 1px solid #000;padding: 4px;">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('login') }}" method="post">
                                            @csrf
                                            <div class="col-md-12 form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email"
                                                       placeholder="Enter your E-mail" maxlength="30" required/>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password"
                                                       placeholder="Enter your password" maxlength="50" required/>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <span>If Not Register<a href="#" data-toggle="modal"
                                                                                data-target="#RegisterModal"
                                                                                style="color: #9c34eb">Register here</a></span>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        @if (Route::has('password.request'))
                                                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                               href="{{ route('password.request') }}"
                                                               style="color: #9c34eb; float: right">
                                                                {{ __('Forgot your password?') }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group" style="margin-top: 10px">
                                                <button type="submit" class=" btn-success btn-one style-one">
                                                    {{ __('Log in') }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog"
                             aria-labelledby="RegisterModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content homepage_modal">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Register Here</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                                style="margin-top:-15px;">
                                            <span aria-hidden="true"
                                                  style="font-size: 20px;color: #000;border: 1px solid #000;padding: 4px;">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('register') }}" method="post">
                                            @csrf
                                            <div class="col-md-6 form-group">
                                                <label> <span style="color:red">*</span>Full Name</label>
                                                <input type="text" class="form-control" name="name"
                                                       placeholder="Enter your Name" maxlength="30" required/>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label> <span style="color:red">*</span> E-mail</label>
                                                <input type="email" class="form-control" name="email"
                                                       placeholder="Type your E-mail" maxlength="50" required/>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label> <span style="color:red">*</span>Age</label>
                                                <input type="text" class="form-control" name="age"
                                                       placeholder="Contact Number" maxlength="12" required/>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label> Contact no.</label>
                                                <input type="text" class="form-control" name="contact"
                                                       placeholder="Contact Number" maxlength="12" required/>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label> <span style="color:red">*</span>password</label>
                                                <input type="password" class="form-control" name="password"
                                                       placeholder="Enter Your Password" required/>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label> <span style="color:red">*</span>confirm password</label>
                                                <input type="text" class="form-control" name="password_confirmation"
                                                       placeholder="confirm password" required/>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label>Address(optional)</label>
                                                <textarea placeholder="type your address with PIN Number"
                                                          class="form-control" name="address" required/></textarea><br/>
                                                <button type="submit" class=" btn-success btn-one style-one">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- header lower -->
        <div class="header-lower theme_menu stricky">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="menu-bar">
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="{{url('/')}}">Home</a></li>
                                        <li class="dropdown"><a href="{{url('/about')}}">About</a>
                                            <ul class="submenu">
                                                <li><a href="{{url('/about')}}">Mission</a></li>
                                                <li><a href="{{url('/about')}}">Vision</a></li>
                                                <li><a href="{{url('/about')}}">Why choose us</a></li>
                                                <li><a href="{{url('/advisory')}}">Advisory Board</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="{{url('/services')}}">Services</a>
                                        </li>
                                        <li class=""><a href="{{url('/testimonial')}}">Testimonials</a></li>
                                        <li><a href="{{url('/gallery')}}">Gallery</a></li>

                                        <li><a href="{{url('/contact')}}">Contact</a></li>
                                    </ul>

                                    <!-- mobile menu -->
                                    <ul class="mobile-menu clearfix">
                                        <li class="current"><a href="{{url('/')}}">Home</a></li>
                                        <li class="dropdown"><a href="{{url('/about')}}">About</a>
                                            <ul class="submenu">
                                                <li><a href="{{url('/about')}}">Mission</a></li>
                                                <li><a href="{{url('/about')}}">Vision</a></li>
                                                <li><a href="{{url('/about')}}">Why choose us</a></li>
                                                <li><a href="{{url('/advisory')}}">Advisory Board</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="{{url('/services')}}">Services</a>
                                        </li>

                                        <li class=""><a href="{{url('/testimonial')}}">Testimonials</a>
                                        </li>

                                        <li><a href="{{url('/gallery')}}">Gallery</a></li>

                                        <li><a href="{{url('/contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>


@section('container')
@show






<!-- main footer area -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 footer-colmun">
                <div class="logo-widget footer-widget">
                    <div class="footer-logo">
                        <a href="{{url('/')}}">
                            <figure><img src="images/web-logo.jpg" alt="" style="width:100%;"></figure>
                        </a>
                    </div>
                    <div class="text">
                        <p>We offer compassionate comfort, palliative and hospice care to each individual in order to
                            alleviate the symptoms of physical and mental stress caused by a serious or life-limiting
                            illness.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12 footer-colmun">
                <div class="service-widget footer-widget">
                    <div class="footer-title"><h5>our services</h5></div>
                    <ul class="list">
                        <li><a href="{{url('/services')}}">Pharmacy</a></li>
                        <li><a href="{{url('/services')}}">Pathology</a></li>
                        <li><a href="{{url('/services')}}">Dental Care</a></li>
                        <li><a href="{{url('/services')}}">Physiotherapy</a></li>
                        <li><a href="{{url('/services')}}">Gynecology</a></li>
                        <li><a href="{{url('/services')}}">Neurology</a></li>
                        <li><a href="{{url('/services')}}">Pulmonology</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-colmun">
                <div class="shediul-widget footer-widget">
                    <div class="footer-title"><h5>OPD hours</h5></div>
                    <div class="single-item"><p>Monday - Friday : 9.00 - 21.00</p></div>
                    <div class="single-item"><p>Saturday : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 9.00 - 21.00</p>
                    </div>
                    <div class="single-item"><p>Sunday : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; On Call
                            Facilities available for OPD</p></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 footer-colmun">
                <div class="logo-widget footer-widget">
                    <div class="footer-title"><h5>Contact Us</h5></div>
                    <ul class="list">
                        <li><i class="fa fa-map-marker"></i>
                            <p>Raghunathpur Jali, P.O-KIIT P.S-Infosys, Bhubaneswar, Dist-khorda, Pin-751024</p></li>
                        <li><i class="fa fa-phone"></i>
                            <p>Call Free: <span>+91 8926986203</span></p></li>
                        <li><i class="fa fa-envelope"></i>
                            <p>info@rehab-palliativehospital.com</p></li>
                    </ul>
                </div>
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/rehabilitationpalliative/" target="_blank"
                           style="background: #3a589b;"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/palliative_bbsr?s=08" target="_blank" style="background: #5da9dd;"><i
                                class="fa fa-twitter"></i></a></li>

                    <li><a href="https://www.instagram.com/rehabilitationpalliativecare/" target="_blank"
                           style="background: #bc2a8d;"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UC7L2JkkYpHeL6aCr_9qBC3w" target="_blank"
                           style="background: #ff0000;"><i class="fa fa-youtube"></i></a></li>
                </ul>
                <br/>
                <span id="siteseal"><script async type="text/javascript"
                                            src="https://seal.godaddy.com/getSeal?sealID=bQfhfVqVmgI2cphQOPQaSvds1ZncBlbUodiad5DeifRN4MIkWYuCVMASm5BX"></script></span>
            </div>
        </div>
    </div>
</footer>
<!-- main footer area end -->

<!-- footer bottom -->
<section class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="copyright">Copyright © 2021 <a href="#">rehab-palliativehospital.com</a> All rights
                    reserved.
                </div>
            </div>


            <div class="col-md-6">
                <div class="anbrain pull-right">Powered by <a href="https://anbrain.in/" target="_blank"
                                                              style="color:#00ff00;">Anbrain Technologies</a></div>
            </div>
        </div>
    </div>
</section>
<!-- footer bottom end -->
<a href="https://api.whatsapp.com/send?phone=+918926986203" class="float" target="_blank"><i
        class="fa fa-whatsapp my-float"></i></a>
<!--End pagewrapper-->
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>

<script type="text/javascript" src="{{asset('js/jquery-2.1.4.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.mixitup.min.js')}}"></script>
<script src="{{asset('js/validation.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/SmoothScroll.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html>
<!-- end header area -->
