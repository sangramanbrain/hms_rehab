@extends('layout')
@section('container')

 <!-- page title -->
    <section class="page-title" style="background-image: url(images/home/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"><h2>Testimonials</h2></div>
                <ul class="bread-crumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Testimonials</li> 
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <!-- testimonial style two -->
    <section class="testimonial-style-two centered" style="background-image: url(images/testimonial/bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 testimonial-colmun">
                    <div class="testimonial-slider">
                        <div class="testimonial-content">
                            <div class="text-info">
                                <!-- <h5>Medley offers quality services</h5> -->
                                <div class="text"> I recently spent nine days at Rehabilitation and palliative care Hospital and wish to convey how pleased I was with the quality of care I received from everybody. </div>
                            </div>
                            <div class="author">
                                <div class="author-info">
                                    <h5 style="color:#fff;">Ayush Behera</h5>
                                    <span>Patient</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="text-info">
                                <!-- <h5>Medley offers quality services</h5> -->
                                <div class="text">The best palliative care centre in Bhubaneswar, Odisha. </div>
                            </div>
                            <div class="author">
                                <div class="author-info">
                                    <h5 style="color:#fff;">Balaram Das</h5>
                                    <span>Patient</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial style two -->
@endsection