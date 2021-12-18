@extends('layouts.app')
@section('title')
Investment Guide
@endsection
@section('content')
<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Investment Guide</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Investment Guide
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->


  <!--/ Team Star /-->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap ">
            <div class="title-box">
              <h2 class="title-a text-center">Download Our Ebook Below</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 p-5">
          <img class="w-100" src="{{url('./frontend/img/ebookeng.jpg')}}" alt="emasestate ebook english version">
          <a href="" class="btn btn-primary btn-lg btn-block mt-4" download>Download Ebook in English</a>
        </div>
        
        <div class="col-md-6 p-5 mt-md-5 mt-lg-0">
          <img class="w-100" src="{{url('./frontend/img/ebookfr.jpg')}}" alt="emasestate ebook france version">
          <a href="" class="btn btn-primary btn-lg btn-block mt-4" download>Download Ebook in France</a>
        </div>
      </div>
    </div>
  </section>
  <!--/ Team End /-->


@endsection
