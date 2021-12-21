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
                    <h1 class="title-single">Meet Our Amazing Team</h1>
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
{{-- <section class="section-about">
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
</section> --}}
<!--/ About End /-->

<!--/ Team Star /-->
<section class="section-agents section-t8">
    <div class="container">
        {{-- <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Meet Our Team</h2>
            </div>
          </div>
        </div>
      </div> --}}
        <div class="row">
            <div class="col-md-6">
                <div class="card-box-d">
                    <div class="card-img-d">
                        <img src="{{url('./frontend/img/ceo_indonesiapropertyhub.jpeg')}}" alt=""
                            class="img-d img-fluid">
                    </div>
                    <div class="card-overlay card-overlay-hover">
                        <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                                <h3 class="title-d">
                                    <a href="agent-single.html" class="link-two">Pierre Masnada
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body-d">
                            <p class="content-d color-text-a text-white">
                                Pierre-Alain Masnada studied Business in the USA before running companies in the
                                yachting space for 10 years.
                                <br><br>
                                For the last 5 years, he has specialized in materializing unique real estate projects in
                                Bali and its surrounding islands, representing more than 13+ million USD.
                                <br><br>
                                Main skills: Properties due diligence - Land and villas sourcing - Construction.
                            </p>
                            <div class="info-agents color-a">
                                {{-- <p>
                                    <strong>Phone: </strong> +54 356 945234</p> --}}
                                <p>
                                    <strong>Email: </strong> pierremasnada@sdsbali.com</p>
                            </div>
                        </div>
                        <div class="card-footer-d">
                            <div class="socials-footer d-flex justify-content-center">
                                <ul class="list-inline">
                                    {{-- <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li> --}}
                                    {{-- <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                    </li> --}}
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-box-d">
                    <div class="card-img-d">
                        <img src="{{url('./frontend/img/ceo_tropic_invest.jpeg')}}" alt="" class="img-d img-fluid">
                    </div>
                    <div class="card-overlay card-overlay-hover">
                        <div class="card-header-d">
                            <div class="card-title-d align-self-center">
                                <h3 class="title-d">
                                    <a href="agent-single.html" class="link-two">Matthieu Chauveau </a>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body-d">
                            <p class="content-d color-text-a text-white">
                                “Sail away from the safe harbor. Explore. Dream. Discover.”
                                <br><br>
                                Matthieu is a French serial entrepreneur living in Bali. He is passionate about surfing
                                and about connecting people to create meaningful and sustainable relationships and
                                projects.
                                <br><br>
                                He holds an MBA from INSEAD, voted best MBA in the world in 2021, and previously worked
                                for 8 years for AccorHotels in finance, development, and operations.
                                <br><br>
                                Main skills: Financial analysis and modeling – Projects development – Legal and
                                compliance.
                            </p>
                            <div class="info-agents color-a">
                                {{-- <p>
                                    <strong>Phone: </strong> +54 356 945234</p> --}}
                                <p>
                                    <strong>Email: </strong> matthieu@tropicinvest.com</p>
                            </div>
                        </div>
                        <div class="card-footer-d">
                            <div class="socials-footer d-flex justify-content-center">
                                <ul class="list-inline">
                                    {{-- <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                                        </a>
                                    </li> --}}
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="link-one">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Team End /-->


@endsection
