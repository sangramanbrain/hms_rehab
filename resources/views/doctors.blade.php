@extends('layout')
@section('container')
<!-- page title -->

 <!-- page title -->
    <section class="page-title" style="background-image: url(images/home/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"><h2>Doctors</h2></div>
                <ul class="bread-crumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Doctors</li> 
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- team section -->
    <section class="team-section sec-pad">
        <div class="container">
            <div class="team-title centered">
                <div class="section-title uppercase"><h2>dedicated <span>team</span></h2></div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="#"><figure><img src="images/team/1.jpg" alt=""></figure></a>
                            <ul class="list centered">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h5><a href="#">dr. Mark Zerberg</a></h5>
                            <span>Head Doctor</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="#"><figure><img src="images/team/2.jpg" alt=""></figure></a>
                            <ul class="list centered">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h5><a href="#">dr. charles kins</a></h5>
                            <span>Dental Care</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="#"><figure><img src="images/team/3.jpg" alt=""></figure></a>
                            <ul class="list centered">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h5><a href="doctors.html">dr. sophia lauren</a></h5>
                            <span>Tooth Surgeon</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 team-colmun">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="#"><figure><img src="images/team/4.jpg" alt=""></figure></a>
                            <ul class="list centered">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h5><a href="#">dr. John michael</a></h5>
                            <span>X-Ray Specialist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team section end -->

    
@endsection