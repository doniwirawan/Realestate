@extends('layouts.admin.dashboard')
@section('title')
Admin Dashboard
@endsection
@section('content')
<h1 class="fw-bold">Input Data for real estate</h1>
<div class="col-lg-6 col-md-12">
    <form method="POST" action="/add" class="mt-4 py-5" enctype="multipart/form-data">
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


        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Realestate Name Here" required>
        <div class="form-group mt-2">
            <label for="exampleFormControlFile1">Images</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file" multiple required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Type</label>
            <select class="form-control" id="exampleFormControlSelect1" name="type" required>
                <option value="" selected disabled hidden>Choose here</option>
                <option value="Land">Land</option>
                <option value="Villa">Villa</option>
                <option value="Hotel">Hotel</option>
            </select>
        </div>
        <label for="area">Area</label>
        <input type="text" class="form-control" name="area" placeholder="Ubud" id="area" required>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Status</label>
            <select class="form-control" id="exampleFormControlSelect2" name="status" required>
                <option value="" selected disabled hidden>Choose here</option>
                <option value="freehold">Freehold</option>
                <option value="leasehold">Leasehold</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description </label>
            <textarea class="form-control" id="description" name="desc" required></textarea>
        </div>
        <label for="feature">Surface Area</label>
        <input type="number" class="form-control" name="size" placeholder="in SQM" id="feature" required>
        <label for="beds">Beds</label>
        <input type="text" class="form-control" name="beds" id="beds" placeholder="1">
        <label for="baths">Baths</label>
        <input type="text" class="form-control" name="baths" id="baths" placeholder="1">
        <label for="pools">Pools</label>
        <input type="text" class="form-control" name="pools" id="pools" placeholder="1">
        <label for="location_1">Location</label>
        <input type="text" class="form-control" name="location" placeholder="-8.5947,115.1974" id="location_1" required>
        <label for="price">Price</label>
        <input type="number" class="form-control" name="price_usd" placeholder="Price in USD" id="price" required>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
@endsection
