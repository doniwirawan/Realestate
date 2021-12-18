@extends('layouts.app')
@section('title')
@foreach ($single as $item)
{{$item->name}}
@endforeach
@endsection
@section('content')
@foreach ($single as $item)
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">{{$item->name}}</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/realestate">Real Estate</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{$item->name}}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ Property Single Star /-->
<section class="property-single nav-arrow-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                    <div class="carousel-item-b image-detail">
                        <img src="/storage/img/{{$item->img}}" alt="" class="rounded ">
                    </div>
                </div>
                <div class="row justify-content-between">

                    <div class="col-md-7 col-lg-7 section-md-t3">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">Property Description</h3>
                                </div>
                            </div>
                        </div>
                        <div class="property-description">
                            <p class="description color-text-a">
                                {{$item->desc}}
                                <br>
                                <br>
                                For sale a piece of vacant land on the coast of Klecung, Tabanan. With views of the sea,
                                rice fields and mountains, a safe, comfortable, and calm atmosphere. Very suitable for a
                                villa / investment or a place to rest
                                <br>
                                <br>
                                <br>


                                Specification:
                                <br>
                                <br>

                                - Area: 5400m2 / 54 are
                                <br>
                                - Ground contour: flat
                                <br>
                                - Freehold
                                <br>
                                - 700 m to the beach
                                <br>
                                - 200 m from the main road
                                <br>
                                - 27 km/1hour from W hotle seminyak
                                <br>
                                - 20 km/45 min from the center of Canggu
                                <br>
                                IDR 100,000,000

                            </p>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-4">
                        <div class="property-price d-flex justify-content-center foo">
                            <div class="card-header-c d-flex">
                                @if ($item->sold >=1)
                                <div class="card-box-ico card-box-ico--danger">
                                    <span class="ion-money text-danger">SOLD</span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h5 class="title-c text-danger"></h5>
                                </div>
                                @else
                                <div class="card-box-ico">
                                    <span class="ion-money">IDR</span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    {{-- <h5 class="title-c">@money($item->price_usd)</h5> --}}
                                    <h5 class="title-c">@money(356000000)</h5>
                                </div>
                                @endif

                            </div>
                        </div>
                        <div class="property-summary">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d section-t4">
                                        <h3 class="title-d">Quick Summary</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-list">
                                <ul class="list">
                                    <li class="d-flex justify-content-between">
                                        <strong>Property Code:</strong>
                                        {{-- <span>{{$item->id}}</span> --}}
                                        <span>UBD 001 FH</span>
                                    </li>
                                    @if ($item->type)
                                    <li class="d-flex justify-content-between">
                                        <strong>Property Type:</strong>
                                        <span>{{$item->type}}</span>
                                    </li>
                                    @endif
                                    @if ($item->status)
                                    <li class="d-flex justify-content-between">
                                        <strong>Status:</strong>
                                        <span>{{$item->status}}</span>
                                    </li>
                                    @endif

                                    <li class="d-flex justify-content-between">
                                        <strong>Area:</strong>
                                        <span>{{$item->size}}m
                                            <sup>2</sup>
                                        </span>
                                    </li>

                                    @if ($item->beds)
                                    <li class="d-flex justify-content-between">
                                        <strong>Beds:</strong>
                                        <span>{{$item->beds}}</span>
                                    </li>
                                    @endif

                                    @if ($item->baths)
                                    <li class="d-flex justify-content-between">
                                        <strong>Baths:</strong>
                                        <span>{{$item->baths}}</span>
                                    </li>
                                    @endif

                                    @if ($item->pools)
                                    <li class="d-flex justify-content-between">
                                        <strong>Pools:</strong>
                                        <span>{{$item->pools}}</span>
                                    </li>
                                    @endif
                                </ul>
                                <a href="https://wa.me/6282146333864?text=I'm%20interested%20to%20buy:%20{{$item->name}}"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-lg btn-block btn-primary h3 "><i
                                        class="fa fa-whatsapp pr-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/ Property Single End /-->
@endforeach

@endsection
