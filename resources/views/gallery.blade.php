@extends('layout')
@section('container')
<!-- page title -->
   <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
<style>
.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    height: auto;
    padding: 30px 50px;
}

.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}

.tz-gallery {
    padding: 40px;
}

/* Override bootstrap column paddings */
.tz-gallery .row > div {
    padding: 2px;
}

.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 0;
    position: relative;
}

.tz-gallery .lightbox:before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    opacity: 0;
    color: #fff;
    font-size: 26px;
    font-family: 'Glyphicons Halflings';
    content: '\e003';
    pointer-events: none;
    z-index: 9000;
    transition: 0.4s;
}


.tz-gallery .lightbox:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(46, 132, 206, 0.7);
    content: '';
    transition: 0.4s;
}

.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

.baguetteBox-button {
    background-color: transparent !important;
}

@media(max-width: 768px) {
    body {
        padding: 0;
    }
}
</style>

 <!-- page title -->
    <section class="page-title" style="background-image: url(images/home/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"><h2>Gallery</h2></div>
                <ul class="bread-crumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Gallery</li> 
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

<div class="container gallery-container fluid">
    <div class="tz-gallery">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g1.jpg">
                    <img src="/images/gallery/g1.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g2.jpg">
                    <img src="/images/gallery/g2.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g3.jpg">
                    <img src="/images/gallery/g3.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g4.jpg">
                    <img src="/images/gallery/g4.jpg" alt="Bridge">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g5.jpg">
                    <img src="/images/gallery/g5.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g6.jpg">
                    <img src="/images/gallery/g6.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g7.jpg">
                    <img src="/images/gallery/g7.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g8.jpg">
                    <img src="/images/gallery/g8.jpg" alt="Bridge">
                </a>
            </div>
        </div>
                <div class="row">
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g9.jpg">
                    <img src="/images/gallery/g9.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g10.jpg">
                    <img src="/images/gallery/g10.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g11.jpg">
                    <img src="/images/gallery/g11.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g12.jpg">
                    <img src="/images/gallery/g12.jpg" alt="Bridge">
                </a>
            </div>
        </div>
                <div class="row">
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g13.jpg">
                    <img src="/images/gallery/g13.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g14.jpg">
                    <img src="/images/gallery/g14.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g15.jpg">
                    <img src="/images/gallery/g15.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g16.jpg">
                    <img src="/images/gallery/g16.jpg" alt="Bridge">
                </a>
            </div>
        </div>
                <div class="row">
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g17.jpg">
                    <img src="/images/gallery/g17.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g18.jpg">
                    <img src="/images/gallery/g18.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g19.jpg">
                    <img src="/images/gallery/g19.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g20.jpg">
                    <img src="/images/gallery/g20.jpg" alt="Bridge">
                </a>
            </div>
        </div>
                <div class="row">
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g21.jpg">
                    <img src="/images/gallery/g21.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g22.jpg">
                    <img src="/images/gallery/g22.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g23.jpg">
                    <img src="/images/gallery/g23.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g24.jpg">
                    <img src="/images/gallery/g24.jpg" alt="Bridge">
                </a>
            </div>
        </div>        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g25.jpg">
                    <img src="/images/gallery/g25.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g26.jpg">
                    <img src="/images/gallery/g26.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g27.jpg">
                    <img src="/images/gallery/g27.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="/images/gallery/g4.jpg">
                    <img src="/images/gallery/g4.jpg" alt="Bridge">
                </a>
            </div>
        </div>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>





@endsection