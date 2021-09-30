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
                        <img src="frontend/img/ceo_indonesiapropertyhub.jpeg" alt="" class="img-fluid">
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
                            Now CEO of Indonesia Property Hub, Pierre-Alain Masnada studied Business in
                            the USA before running companies in the yachting space for
                            10 years.
                            <br>
                            <br>
                            For the last 5 years, along with his team, he has been
                            specializing in materializing real estate projects in Bali and its
                            surrounding islands, valued at more than 13 million USD.
                            <br>
                            <br>
                            His fortes lie in the creation and development of high quality,
                            high return projects.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ About End /-->

@endsection
