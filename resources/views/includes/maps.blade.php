@extends('layouts.maps2')



{{-- card --}}
<section class="mt-5">
    <div class="container mt-5">
         <div class="row mt-5">
            <div class="col-md-12 mt-5">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Our Properties</h2>
                    </div>
                    <div class="title-link">
                        <a href="/maps">Maps View
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="/maps">
            <div id="map2"></div>
        </a>
    </div>
</section>