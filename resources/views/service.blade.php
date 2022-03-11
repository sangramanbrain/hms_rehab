@extends('layout')
@section('container')
<!-- page title -->
<section class="page-title" style="background-image: url(images/home/page-title.jpg);">
   <div class="container">
      <div class="content-box">
         <div class="title">
            <h2>Services</h2>
         </div>
         <ul class="bread-crumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Services</li>
         </ul>
      </div>
   </div>
</section>
<!--End Page Title-->
<!-- contact info -->
<section class="service-style-two service-page sec-pad">
   <div class="container">
   <div class="service-title centered">
      <div class="section-title uppercase">
         <h2>Our <span>Popular Services</span></h2>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12 service-colmun">
         <div class="comment-box">
            <div class="row">
               <div class="col-md-3">
                  <div class="img-box">
                     <figure><img src="images/service/1.jpg" alt="" style="width:100%;"></figure>
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="comment-inner">
                     <div class="single-content">
                        <h5>Inpatient Rehab & Palliative care</h5>
                        <div class="text">
                           <p>We are providing the Inpatient Rehab palliative care in our hospital. We have our in house palliative care team made up of a variety of professionals who collaborate with the patient, family, and other doctors to provide medical, social, emotional, and practical support. The team is made up of palliative care and inpatient rehab specialists such as doctors and nurses, as well as social workers, nutritionists, and chaplains. The members of our p team are dedicated to each individual. </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
     </div>
         <div class="col-md-6 col-sm-6 col-xs-12 service-colmun">
                     <div class="comment-box">
            <div class="row">
               <div class="col-md-3">
                  <div class="img-box">
                     <figure><img src="images/service/1.jpg" alt="" style="width:100%;"></figure>
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="comment-inner">
                    <div class="single-content">
                            <h5>Pharmacy</h5>
                            <div class="text"><p>We have hospital pharmacy or other health care facility makes drugs, devices, and other materials available for the diagnosis, mitigation, prevention, and therapeutic interventions of injury, illness, and disease. Hospital Pharmacy purchases, stores, and disperses prescription drugs for dispensing, compounding, and distribution, as well as providing Pharmaceutical Care. From the perspective of a patient, hospital pharmacy services provide medicines, information, and advice to inpatients and outpatients, as well as health professionals and others who provide health care to patients.</p></div>
                        </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</section>
@endsection
