@extends('layout')
@section('container')
<!-- page title -->

 <!-- page title -->
    <section class="page-title" style="background-image: url(images/home/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"><h2>Contact</h2></div>
                <ul class="bread-crumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Contact</li> 
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- contact info -->
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12 contact-colmun">
                    <div class="address-info">
                        <div class="title">Address Info</div>
                        <div class="single-info">
                            <h5>Head Office</h5>
                            <div class="single-item">
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <p>Raghunathpur Jali, P.O-KIIT P.S-Infosys, Bhubaneswar, Dist-khorda, Pin-751024</p>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <p>Call Free:  <span>+91 8926986203</span></p>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <p>Toll Free:  <span>18008899311</span></p>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="fa fa-envelope"></i></div>
                                <p>info@rehab-palliativehospital.com</p>
                            </div>
                        </div>
                        <div class="opening-hours">
                        <div class="title">OPD Hours</div>
                        <div class="shediul">
                            <div class="single-day">Monday - Friday<p>9.00 - 21.00</p></div>
                            <div class="single-day">Saturday<p>9.00 - 21.00</p></div>
                            <div class="single-day">Sunday<p>On
Call Facilities available for OPD</p></div> 
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-12 contact-colmun">
            <!-- contact area -->
    <section class="contact-area">
            <div class="contact-title">
                <div class="section-title"><h2>send us <span>message</span></h2></div>
            </div>
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 contact-colmun">
                    <div class="contact-form-area">
                    <form action="{{url('/form/action')}}" method="post">
                        @csrf
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="form_name" placeholder="Enter your Name" required="">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control" name="form_email"  placeholder="Type your E-mail" required>
                </div>
                <div class="form-group">
                    <label>Telephone no.</label>
                    <input type="text" class="form-control" name="form_phone"  placeholder="Contact Number" required>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" name="form_subject"  placeholder="subject" required>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea placeholder="" class="form-control" name="form_message" required=""></textarea>
                </div> 
                <button type="submit" class="btn-succcess btn-one style-one" name="send">Submit</button>
           </form>
                    </div>
                </div>
            </div>
        </section>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- contact info end -->
<section class="location-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d119694.01642246397!2d85.7584611!3d20.3648224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909b74ddc6b79%3A0x751da303e3312d6e!2sRehabilitation%20and%20Palliative%20Care!5e0!3m2!1sen!2sin!4v1633507487050!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>               
</section>

@endsection