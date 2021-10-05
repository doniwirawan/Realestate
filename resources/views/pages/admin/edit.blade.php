@extends('layouts.admin.dashboard')
@section('title')
Admin Dashboard
@endsection
@section('content')
<h1 class="fw-bold">Edit Data for real estate</h1>
<div class="col-lg-6 col-md-12">
    <form method="POST" action="/update" class="mt-4 py-5" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{-- menampilkan error validasi --}}
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif

        @foreach($realestate as $realestate)
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="realestate name here"
            value="{{$realestate->name}}" required>
        <div class="form-group mt-2">
            <label for="exampleFormControlFile1">Images</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file"
                value="./storage/img/{{$realestate->img}}" multiple>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Type</label>
            <select class="form-control" id="exampleFormControlSelect1" name="type" value="{{$realestate->type}}"
                required>
                <option value="" selected disabled hidden>Choose here</option>
                <option value="hotel">Hotel</option>
                <option value="land">Land</option>
                <option value="villa">Villa</option>
            </select>
        </div>
        {{-- <label for="area">Area</label>
        <input type="text" class="form-control" name="area" placeholder="Ubud" id="area" value="{{$realestate->area}}"
        required> --}}
        {{-- area --}}
        <div class="form-group">
            <label for="area">Area</label>
            <select class="form-control" id="area" name="area" value="{{$realestate->area}}"
                required>
                <option value="" selected disabled hidden>Choose here</option>
                <option value="kuta">kuta</option>
                <option value="ubud">ubud</option>
                <option value="canggu">canggu</option>
                <option value="nusa dua">nusa dua</option>
                <option value="jimbaran">jimbaran</option>
                <option value="sanur">sanur</option>
                <option value="nusa penida">nusa penida</option>
                <option value="north bali">north bali</option>
                <option value="west bali">west bali</option>
                <option value="east bali">east bali</option>
            </select>
        </div>
        {{-- area end --}}
        <div class="form-group">
            <label for="exampleFormControlSelect2">Status</label>
            <select class="form-control" id="exampleFormControlSelect2" name="status" value="{{$realestate->status}}"
                required>
                <option value="" selected disabled hidden>Choose here</option>
                <option value="freehold">Freehold</option>
                <option value="leasehold">Leasehold</option>
            </select>
        </div>
        <input type="text" class="form-control" name="id" id="id" placeholder="realestate name here"
            value="{{$realestate->id}}" hidden>
        <label for="feature">Surface</label>
        <input type="text" class="form-control" name="size" id="feature" value="{{$realestate->size}}">
        <label for="beds">Beds</label>
        <input type="text" class="form-control" name="beds" id="beds" value="{{$realestate->beds}}">
        <label for="baths">Baths</label>
        <input type="text" class="form-control" name="baths" id="baths" value="{{$realestate->baths}}">
        <label for="pools">Pools</label>
        <input type="text" class="form-control" name="pools" id="pools" value="{{$realestate->pools}}">
        <div class="form-group">
            <label for="description">Description </label>
            <textarea class="form-control" id="description" name="desc" required>{{$realestate->desc}}</textarea>
        </div>
        <label for=" location_1">Location</label>
        <input type="text" class="form-control" name="location" placeholder="Location wide area" id="location_1"
            value="{{$realestate->location}}" required>
        <label for="price">Price</label>
        <input type="number" class="form-control" name="price_usd" placeholder="Price in USD" id="price"
            value="{{$realestate->price_usd}}" required>
        @endforeach
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
@endsection
