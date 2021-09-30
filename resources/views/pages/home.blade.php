@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')
<!--/ Carousel Star /-->
<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
        @foreach ($realestate as $item)
        <div class="carousel-item-a intro-item bg-image" style="background-image: url('storage/img/{{$item->img}}')">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">{{$item->name}}</h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="/realestate/{{$item->slug}}"><span class="price-a">{{$item->status}} |
                                                IDR
                                                @money($item->price_usd)</span></a>
                                    </p>
                                    <br>
                                    <a href="/realestate/{{$item->slug}}" class="link-a ">Click here to view
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!--/ Carousel end /-->

<!--/ Services Star /-->
<section class="section-services section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Our Services</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="fa fa-shopping-cart"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Buy</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            We have a wide range option of villas and land. We do selection, verification, valuation,
                            neighborhood checking, and maintaining relationship with notary, lawyer, and other related
                            network to assured you a great and safe property investment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="fa fa-home"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Rent</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            Knowing and understanding the customer's needs, tastes, and plans for the future are the
                            keys to match our customers with the perfect property. We assist and help you in the entire
                            process right from the start until the property is in your hand.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="fa fa-usd"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Sell</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            Using our technology tools we can generate new requests every day, therefore we can match
                            your property with the right buyer. Sell your property with us to get your property sold out
                            at a great price with a simple, fast and stress-less process.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Services End /-->

<!--/ Property Star /-->
<section class="section-property section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Latest Properties</h2>
                    </div>
                    <div class="title-link">
                        <a href="/category/all">All Property
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="property-carousel" class="owl-carousel owl-theme">
            @foreach ($realestate as $item)
            <div class="carousel-item-b">
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
                                        <h4 class="card-info-title text-center"><i
                                                class="fas fa-ruler-horizontal mr-2"></i></h4>
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
                                    <a href="https://wa.me/6282146333864?text=I'm%20interested%20to%20buy%20{{$item->name}}"
                                        target="_blank" rel="noopener noreferrer"
                                        class="btn bg-white text-primary btn-set-height"><i
                                            class="fa fa-whatsapp mr-2"></i>Contact Us</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>
<!--/ Property End /-->

{{-- card --}}
<section class="mt-5">
    <div class="container mt-5">
         <div class="row mt-5">
            <div class="col-md-12 mt-5">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Properties based on Area</h2>
                    </div>
                    <div class="title-link">
                        <a href="/area/all">All Area
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/area/kuta">
                    <img src="https://cdn.pixabay.com/photo/2017/04/07/18/02/kuta-beach-2211524_960_720.jpg"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">Kuta</h2>
                </a>
            </div>
            
            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/area/ubud">
                    <img src="https://images.pexels.com/photos/5151206/pexels-photo-5151206.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">Ubud</h2>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/area/canggu">
                    <img src="https://cdn.pixabay.com/photo/2020/09/06/09/05/beach-5548446_960_720.jpg"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">Canggu</h2>
                </a>
            </div>
       
            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/area/nusa dua">
                    <img src="https://cdn.pixabay.com/photo/2020/12/29/01/22/bali-5869020_960_720.jpg"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">Nusa Dua</h2>
                </a>
            </div>
            
            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/area/jimbaran">
                    <img src="https://cdn.pixabay.com/photo/2018/04/02/10/08/sunset-3283437_960_720.jpg"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">Jimbaran</h2>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/area/sanur">
                    <img src="https://cdn.pixabay.com/photo/2013/10/29/08/27/sea-202214_960_720.jpg"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">Sanur</h2>
                </a>
            </div>
       
            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/area/nusa penida">
                    <img src="https://images.pexels.com/photos/2707756/pexels-photo-2707756.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">Nusa Penida</h2>
                </a>
            </div>
            
            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/area/north bali">
                    <img src="https://images.pexels.com/photos/2166553/pexels-photo-2166553.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">North Bali</h2>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/area/west bali">
                    <img src="https://cdn.pixabay.com/photo/2016/07/13/10/56/rice-1514141_960_720.jpg"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">West Bali</h2>
                </a>
            </div>
       
            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/area/east bali">
                    <img src="https://cdn.pixabay.com/photo/2017/03/24/11/17/bali-2170900_960_720.jpg"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">East Bali</h2>
                </a>
            </div>
            
        </div>
    </div>
</section>


{{-- card --}}
<section class="mt-5">
    <div class="container mt-5">
         <div class="row mt-5">
            <div class="col-md-12 mt-5">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Properties based on Type</h2>
                    </div>
                    <div class="title-link">
                        <a href="/area/all">All Type
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/category/land">
                    <img src="https://cdn.pixabay.com/photo/2020/05/02/13/53/field-5121505_960_720.jpg"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">Land</h2>
                </a>
            </div>
            
            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/category/hotel">
                    <img src="frontend/img/hotel.jpg"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">Hotel</h2>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 position-relative card-area ">
                <a href="/category/villa">
                    <img src="frontend/img/bali.jpg"
                    alt="" class="img-fluid">
                <h2 class="position-absolute text-absolute text-light">Villa</h2>
                </a>
            </div>
        </div>
    </div>
</section>



@include('includes.maps')

@endsection
