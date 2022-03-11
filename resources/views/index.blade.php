@extends('layout')
@section('container')

    <!-- main-slider -->
    <section class="main-slider"> 
        <div class="main-slider-carousel owl-carousel owl-theme">    
        
         <div class="slide" style="background-image:url(images/slider/physiotherapy-camping-banner.jpg)">
                <div class="container">
                    <div class="content">
                        
                       <h1>Free Physiotherapy Camp In Bhubaneswar</h1>
                        <div class="tp-btn">
                            <a href="{{url('contact')}}" class="btn-two style-two">make an appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="slide" style="background-image:url(images/slider/pall-bg.jpg)">
                <div class="container">
                    <div class="content">
                        <div class="banner-title">WE TAKE CARE OF YOU</div>
                        <h1>Welcome to Rehabilitation and Palliative Care<br> In Bhubaneswar</h1>
                        <div class="tp-btn">
                            <a href="{{url('contact')}}" class="btn-two style-two">make an appointment</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="slide" style="background-image:url(images/slider/pall-bg1.jpg)">
                <div class="container">
                    <div class="content">
                        <div class="banner-title">We are more than just a Hospital </div>
                        <h1>We specialize in Palliative care</h1>
                        <div class="tp-btn">
                            <a href="{{url('services')}}" class="btn-two style-two">view services</a>
                        </div>
                    </div>
                </div>
            </div>
            
                        <div class="slide" style="background-image:url(images/slider/pall-bg2.jpg)">
                <div class="container">
                    <div class="content">
                        <div class="banner-title">We proudly serving the health care and helping professions </div>
                        <h1>Compassionate care for life's transitions</h1>
                        <div class="tp-btn">
                            
                            <a href="{{url('services')}}" class="btn-two style-two">view services</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- main-slider end -->


    <!-- intro section -->
    <section class="intro-section centered sec-pad">
        <div class="container">
            <div class="intro-title">
                <div class="section-title"><h2>Our team is dedicated to providing you with the highest level of service and comfort in Bhubaneswar, Odisha</h2></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 intro-colmun">
                    <div class="single-item">
                        <div class="icon-box">
                            <i class="flaticon-pair-of-molars"></i>
                        </div>
                        <div class="single-content">
                            <h5><a href="services.php">Patient Care</a></h5>
                            <div class="text">
                                <p>At Palliative Care Hospital, we value each patient's unique needs and values. Our patients are considered partners by us. We expect that observing Patients' Rights will encourage mutual cooperation and increase patient and hospital staff satisfaction.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 intro-colmun">
                    <div class="single-item">
                        <div class="icon-box">
                            <i class="flaticon-medical"></i>
                        </div>
                        <div class="single-content">
                            <h5><a href="services.php">Centre of Excellence</a></h5>
                            <div class="text">
                                <p>We have world-class healthcare professionals, world-class therapeutic approaches, and world-class outcome.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 intro-colmun">
                    <div class="single-item">
                        <div class="icon-box">
                            <i class="flaticon-credit-card"></i>
                        </div>
                        <div class="single-content">
                            <h5><a href="services.php">Best Palliative Care </a></h5>
                            <div class="text">
                                <p>Our dedicated and experienced team provides Patients with Appropriate and Effective Palliative care Services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro section end -->

    <!-- feature section -->
    <section class="feature-section sec-pad" style="background-image: url(images/home/feature-bg.jpg);">
        <div class="container">
            <div class="feature-title centered">
                <div class="section-title uppercase"><h2>WELCOME TO THE <span>REHABILITATION & PALLIATIVE CARE PVT. LTD</span></h2></div>
                <p>Rehabilitation & Palliative Care Center in Bhubaneswar, Odisha is the first specialized hospital for Palliative Care with 29 in-house bed amenities. </p>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12 feature-colmun">
                    <div class="img-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure><img src="images/home/feature.png" alt=""></figure>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-xs-12 feature-colmun">
                    <div class="feature-content">
                        
                        <div class="text">
                            <p>We at Rehabilitation and Palliative Care emphasize dignity, respect, courage, hope, compassion and care as priority to each individual we interact with. We also assure to help our sickness recovering fraternity and their families by coordinating our care to involve all decision makers in the family, including counseling, spiritual support and access to our team of professionals. Thus we are there with you at every stage, adapting our treatment economically without compromising on the comfort from assistance starting with medicine to beyond it. And we ensure top quality services, with a home away from home experience at minimal expense.</p></div>
                        
                        <div class="button">
                            <a href="aboutus.php" class="btn-one style-one">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature section end -->

    <!-- service style two -->
    <section class="service-style-two service-page sec-pad">
        <div class="container">
            <div class="service-title centered">
                <div class="section-title uppercase"><h2>Our <span>Popular Services</span></h2></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item overlay-item">
                        <div class="inner-box img-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/service/1.jpg" alt=""></figure>
                               
                            </div>
                        </div>
                        <div class="single-content">
                            <h5><a href="services.php">Inpatient Rehab & Palliative care</a></h5>
                            <div class="text"><p>We are providing the Inpatient Rehab palliative care in our hospital. We have our in house palliative care team made up of a variety of professionals who collaborate with the patient, family, and other doctors to provide medical, social, emotional, and practical support. </p></div>
                            <div class="button"><a href="services.php">read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item overlay-item">
                        <div class="inner-box img-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/service/2.jpg" alt=""></figure>
                            </div>
                        </div>
                        <div class="single-content">
                            <h5><a href="services.php">Pharmacy</a></h5>
                            <div class="text"><p>We have hospital pharmacy or other health care facility makes drugs, devices, and other materials available for the diagnosis, mitigation, prevention, and therapeutic interventions of injury, illness, and disease.</p></div>
                            <div class="button"><a href="services.php">read more</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item overlay-item">
                        <div class="inner-box img-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/service/3.jpg" alt=""></figure>
                            </div>
                        </div>
                        <div class="single-content">
                            <h5><a href="services.php">OPD</a></h5>
                            <div class="text"><p>we provide OPD facilities for treatment that involves the administration of a specific diagnosis and treatment of a specific type of illness on the advice of a medical professional.</p></div>
                            <div class="button"><a href="services.php">read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item overlay-item">
                        <div class="inner-box img-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/service/5.jpg" alt=""></figure>
                                
                            </div>
                        </div>
                        <div class="single-content">
                            <h5><a href="services.php">Dental Care</a></h5>
                            <div class="text"><p>We are one of the finest and most advanced Dental Care in Bhubaneswar. We not only provide individualized care to our patients, but we also maintain proper hygiene and sanitation in the clinic. </p></div>
                            <div class="button"><a href="services.php">read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item overlay-item">
                        <div class="inner-box img-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/service/pediatric.jpg" alt=""></figure>
                            </div>
                        </div>
                        <div class="single-content">
                            <h5><a href="services.php">Pediatric Neurology</a></h5>
                            <div class="text"><p>Our Pediatric Neurology team is made up of highly skilled and experienced neurologists who provide compassionate, all-inclusive neurology care to children and adolescents suffering from nervous system diseases.</p></div>
                            <div class="button"><a href="services.php">read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item overlay-item">
                        <div class="inner-box img-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/service/6.jpg" alt=""></figure>
                            </div>
                        </div>
                        <div class="single-content">
                            <h5><a href="services.php">Sports Rehabilitation</a></h5>
                            <div class="text"><p>
In Sport Rehabilitation we assist people who are suffering from musculoskeletal pain, injury, or illness. We use exercise, movement, and manual-based therapeutic interventions to help people of all ages maintain their health and fitness recover from and prevent injury, and reduce pain.
</p></div>
                            <div class="button"><a href="services.php">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service style two end -->

        <!-- testimonial style two -->
    <section class="testimonial-style-two centered" style="background-image: url(images/testimonial/bg.jpg);padding:45px 0px;">
        <div class="container">
                <div class="testimonials-title centered">
                <div class="section-title uppercase"><h2><span> What our Service Receivers say about us</span></h2></div>
                
            </div>
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
<!-- service style two -->
    <section class="service-style-two service-page sec-pad">
        <div class="container">
            <div class="service-title centered">
                <div class="section-title uppercase"><h2>Specialities<span> &</span>  facilities</h2></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item overlay-item">
                        <div class="inner-box img-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/aftercare.jpg" class="img-circle" alt=""></figure> 
                            </div>
                        </div>
                        <div class="single-content">
                            <h5 class="text-center">After Hospital Care</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item overlay-item">
                        <div class="inner-box img-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/personalcare.jpg" class="img-circle" alt=""></figure>
                            </div>
                        </div>
                        <div class="single-content">
                            <h5 class="text-center">Personal Care</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item overlay-item">
                        <div class="inner-box img-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/respitecare.jpg" class="img-circle" alt=""></figure>
                            </div>
                        </div>
                        <div class="single-content">
                            <h5 class="text-center">Respite Care</h5>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item overlay-item">
                        <div class="inner-box img-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/nursingcare.jpg" alt="" class="img-circle"></figure>   
                            </div>
                        </div>
                        <div class="single-content">
                            <h5 class="text-center">Nursing Care</h5>   
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item overlay-item">
                        <div class="inner-box img-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/agedhomecare.jpg" class="img-circle" alt=""></figure>
                            </div>
                        </div>
                        <div class="single-content">
                            <h5 class="text-center">Aged Home Care</h5>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-colmun">
                    <div class="single-item overlay-item">
                        <div class="inner-box img-box">
                            <div class="image-box">
                                <figure class="image"><img src="images/spiritual-healing.jpg" class="img-circle" alt=""></figure>
                            </div>
                        </div>
                        <div class="single-content">
                            <h5 class="text-center">Spiritual Healing</h5>                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service style two end -->

    <!-- call section -->
<section class="call-section" style="background-image: url(images/home/call-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 call-calmun">
                    <div class="call-content">
                        <div class="img-box"><figure><img src="images/home/call.png" alt=""></figure></div>
                        <div class="title">For Specialized Care Please Contact</div>
                        <h5>Get quick help when you need it the most !</h5>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 call-calmun">
                    <div class="call-us centered">
                        <div class="text"><a href="tel:+918926986203">Call us: +91 8926986203</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call section -->
    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

$(document).ready(function(){

   Swal.fire({
           widthAuto: false,
            showCloseButton: true,
          showCancelButton: false,
          showConfirmButton: false,
           html: '<div class="">'
           + '<div class="col-md-7">'
           +"<form action='{{url("/form/action")}}' method='post'>" +
           '@csrf'+
           '<div class="form-group">'+
           '<h4>Welcome to Rehabilitation & Palliative Care Pvt. Ltd.</h4>'+
           '</div>' +
           '<div class="form-group">'+
           '<input type="text" class="form-control popup_form" name="form_name" placeholder="Enter your Name *" maxlength="30" required />'+
           '</div>' +
           '<div class="form-group">'+
           '<input type="email" class="form-control popup_form" name="form_email"  placeholder="Type your E-mail *" maxlength="50" required />'+
           '</div>' +
           '<div class="form-group">'+
           '<input type="text" class="form-control popup_form" name="form_phone"  placeholder="Contact Number *" maxlength="12" required />'+
           '</div>' +
           '<div class="form-group">'+
           '<input type="text" class="form-control popup_form" name="form_subject"  placeholder="Subject *" required />'+
           '</div>' +
           '<div class="form-group">'+
           '<textarea placeholder="Leave comments" class="form-control" name="form_message" required /></textarea><br/>'+
           '<button type="submit" class=" btn-succces btn-one style-one">Submit</button>'+
           '</div>' +
           '</form>'
           +'</div>'
            +'<div class="col-md-5" style="margin-top:50px;">'
           + '<img src="images/popup.jpg" alt="covid-img" style="width:100%;">'
           +'</div>'
           +'<div class="clearfix">'
           +'</div>'
            });
      
      
});
      
</script>
@endsection