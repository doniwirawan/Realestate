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
                    <h1 class="title-single">Our Amazing Properties</h1>
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
        <form method="GET" action="/realestate/search" class="mt-4">
            @csrf
                <div class="form-group d-flex">
                    <label for="keyword"></label>
                    <input type="text" class="form-control mr-2" id="keyword" placeholder="Search..." >

                    <button class="btn btn-success" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
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
                </div>
            </div>


            @foreach ($realestate as $item)
            {{-- one item --}}
            <div class="col-md-4">
                <div class="card-box-a card-shadow">
                    <div class="img-box-a">
                        <img src="{{$item->img}}" alt="" class="img-a img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-overlay-a-content">
                            <div class="card-header-a">
                                <h2 class="card-title-a">
                                    <a href="#">{{$item->name}}</a>
                                </h2>
                            </div>
                            <div class="card-body-a">
                                <div class="price-box d-flex">
                                    <span class="price-a">{{$item->status}} | IDR @money($item->price_usd)</span>
                                </div>
                                <a href="realestate/{{$item->slug}}" class="link-a">Click here to view
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
                                        target="_blank" rel="noopener noreferrer" class="btn bg-white text-success"><i
                                            class="fa fa-whatsapp mr-2"></i>Buy</a>
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

@endsection
