@extends('layouts.app')
@section('title')
Real Estate
@endsection
@section('content')
<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">

                    <h1 class="title-single">
                        Our Amazing Properties
                    </h1>
                    {{-- <span class="color-text-a">Grid Properties</span> --}}
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Real Estate
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</section>
<!--/ Intro Single End /-->

<!--/ Property Grid Star /-->
<section class="property-grid grid">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="grid-option">
                    {{-- <form>
                        <select class="custom-select">
                            <option selected>All</option>
                            <option value="1">New to Old</option>
                            <option value="2">For Rent</option>
                            <option value="3">For Sale</option>
                        </select>
                    </form> --}}
                    {{-- <form class="col-12">
                        <input type="name" class="col-12">
                    </form> --}}
                </div>
            </div>



            @foreach ($realestate as $item)
            {{-- one item --}}
            <div class="col-md-4">
                <div class="card-box-a card-shadow">
                    <div class="img-box-a">
                        <img src="/storage/img/{{$item->img}}" alt="{{$item->name}}" class="img-a img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-overlay-a-content">
                            <div class="card-header-a">
                                <h2 class="card-title-a">
                                    <a href="/realestate/{{$item->slug}}">{{$item->name}}</a>
                                </h2>
                            </div>
                            <div class="card-body-a">
                                <div class="price-box d-flex">
                                    <span class="price-a">{{$item->status}} | IDR @money($item->price_usd)</span>
                                </div>
                                <a href="/realestate/{{$item->slug}}" class="link-a">Click here to view
                                    <span class="ion-ios-arrow-forward"></span>
                                </a>
                            </div>
                            <div class="card-footer-a">
                                <ul class="card-info d-flex justify-content-around">
                                    <li>
                                        <h4 class="card-info-title">Area</h4>
                                        <span>{{$item->size}}m
                                            <sup>2</sup>
                                        </span>
                                    </li>
                                    <li>
                                        @if ($item->beds)
                                        <h4 class="card-info-title">Beds</h4>
                                        <span>{{$item->beds}}</span>
                                        @endif

                                    </li>
                                    <li>
                                        @if ($item->baths)
                                        <h4 class="card-info-title">Baths</h4>
                                        <span>{{$item->baths}}</span>
                                        @endif

                                    </li>
                                    {{-- <li>
                                        <h4 class="card-info-title">Garages</h4>
                                        <span>1</span>
                                    </li> --}}
                                    <a href="https://wa.me/6282146333864?text=I'm%20interested%20to%20buy%20{{$item->name}}"
                                        target="_blank" rel="noopener noreferrer" class="btn bg-white text-success btn-set-height"><i
                                            class="fa fa-whatsapp mr-2"></i>Contact Us</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- one item --}}
            @endforeach


            <div class="row">
                <div class="col-sm-12">
                    <nav class="pagination-a">
                        <ul class="pagination justify-content-end">
                            {{ $realestate->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
</section>
<!--/ Property Grid End /-->



{{-- cta --}}
<section class="call-to-action p-5 mt-5 bg-maps">
    <div class="container p-4">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <h2 class="title-a text-center">Maps</h2>
                <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores natus
                    eum tempora illum nostrum exercitationem rerum vero doloremque possimus dignissimos.</p>
            </div>
            <div class="col-12 d-flex justify-content-center" id="map">
                {{-- <a href="/realestate" class="btn btn-outline-success w-10 d-flex align-items-center justify-content-center mx-1">Card View</a> --}}
                <a href="/maps"
                    class="btn btn-success  d-flex align-items-center justify-content-center mx-1 p-2 h5">Check Our
                    Maps</a>
            </div>
        </div>
    </div>
</section>



@endsection
