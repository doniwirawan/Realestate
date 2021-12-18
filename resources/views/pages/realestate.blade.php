@extends('layouts.app')
@section('title')
Real Estate
@endsection
@section('content')

{{-- search box --}}
    <div class="search-box position-relative text-light">
        <div class="container">
            <form method="POST" action="/search">
                <div class=" d-flex flex-row justify-content-around p-5">
                    <div class="form-group col-3">
                        <label for="" class="font-weight-bold">Type</label>
                        <select class="custom-select" id="">
                            <option selected>Choose...</option>
                            <option value="land">Land</option>
                            <option value="villa">Villa</option>
                            <option value="hotel">Hotel</option>
                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label for="" class="font-weight-bold">Status</label>
                        <select class="custom-select" id="">
                            <option selected>Choose...</option>
                            <option value="freehold">Freehold</option>
                            <option value="leasehold">Leasehold</option>
                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label for="" class="font-weight-bold">Price</label>
                        <br>
                        <input type="range" class="col-12 mt-3" min="0" max="999999999999" id="input-range">
                        <span id="input-range-output" class="input-range-output">0</span>
                    </div>
                    <div class="form-group col-3 pt-2">
                        <button type="submit" class="btn btn-search text-light mt-4"><i class="fas fa-search pr-2"></i>
                            Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- end search box --}}
<!--/ Intro Single star /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">

                    <h1 class="title-single">
                        Our Amazing Properties
                    </h1>
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
                                 @if ($item->sold >=1)
                                    <p class="sold-info">SOLD</p>
                                @endif
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
                                        <h4 class="card-info-title text-center"><i class="fas fa-ruler-horizontal mr-2"></i></h4>
                                        <span>{{$item->size}} m
                                            <sup>2</sup>
                                        </span>
                                    </li>
                                    <li>
                                        @if ($item->beds)
                                        <h4 class="card-info-title"><i class="fas fa-bed mr-2"></i></h4>
                                        <span>{{$item->beds}}</span>
                                        @endif

                                    </li>
                                    <li>
                                        @if ($item->baths)
                                        <h4 class="card-info-title"><i class="fas fa-bath mr-2"></i></h4>
                                        <span>{{$item->baths}}</span>
                                        @endif

                                    </li>
                                    <li>
                                        @if ($item->pools)
                                        <h4 class="card-info-title"><i class="fas fa-swimmer mr-2"></i></h4>
                                        <span>{{$item->pools}}</span>
                                        @endif

                                    </li>
                                    {{-- <li>
                                        <h4 class="card-info-title">Garages</h4>
                                        <span>1</span>
                                    </li> --}}
                                    <a href="https://wa.me/6282146333864?text=I'm%20interested%20to%20buy%20{{$item->name}}"
                                        target="_blank" rel="noopener noreferrer" class="btn bg-white text-primary btn-set-height"><i
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
@endsection
