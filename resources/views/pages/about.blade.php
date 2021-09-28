@extends('layouts.app')
@section('title')
About
@endsection
@section('content')
<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">We serve you the Best Properties in Bali</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            About
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ About Star /-->
<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="about-img-box">
                    <img src="frontend/img/slide-about-1.jpg" alt="" class="img-fluid">
                </div>
                <div class="sinse-box">
                    <h3 class="sinse-title">Soli Real Estate
                        <span></span>
                </div>
            </div>
            <div class="col-md-12 section-t8">
                <div class="row">
                    <div class="col-md-6 col-lg-5">
                        <img src="frontend/img/about-2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2  d-none d-lg-block">
                        <div class="title-vertical d-flex justify-content-start">
                            <span>Meet CEO of Indonesia Property Hub</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 section-md-t3">
                        <div class="title-box-d">
                            <h3 class="title-d">Pierre
                                <span class="color-d">Masnada</span> 
                                <br></h3>
                        </div>
                        <p class="color-text-a">
                            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia
                            eget
                            consectetur sed, convallis
                            at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                            neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                        </p>
                        <p class="color-text-a">
                            Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at
                            tellus.
                            Mauris blandit aliquet
                            elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed,
                            convallis at tellus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ About End /-->

{{-- cta --}}
<section class="call-to-action p-5 mt-5 bg-maps">
    <div class="container p-4">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <h2 class="title-a text-center">Maps</h2>
                <p class="text-center text-white">for those of you who prefer a map view, we have it for you..</p>
            </div>
            <div class="col-12 d-flex justify-content-center" id="map">
                <a href="/maps" class="btn btn-success  d-flex align-items-center justify-content-center mx-1 p-2 h5">Check Our Maps</a>
            </div>
        </div>
    </div>
</section>
@endsection