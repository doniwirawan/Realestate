@extends('layouts.admin.dashboard')
@section('title')
    Admin Dashboard
@endsection
@section('content')

<h1 class="fw-bold">Edit Data for real estate</h1>
<div class="col-lg-6 col-md-12">
    <form method="POST" action="/update" class="mt-4 py-5" enctype="multipart/form-data">
        {{ csrf_field() }}

        @foreach($realestate as $realestate)

        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="realestate name here" value="{{$realestate->name}}">

        <div class="form-group mt-2">
            <label for="exampleFormControlFile1">Images</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file" value="./img/{{$realestate->img}}" multiple>
        </div>

        <input type="text" class="form-control" name="id" id="id" placeholder="realestate name here" value="{{$realestate->id}}" hidden>

        <label for="feature">Surface</label>
        <input type="text" class="form-control" name="surface" id="feature" value="{{$realestate->size}}">



        <div class="form-group">
            <label for="exampleFormControlSelect1">Type</label>
            <select class="form-control" id="exampleFormControlSelect1" name="type">
                <option value="Land">Land</option>
                <option value="Villa">Villa</option>
                <option value="Hotel">Hotel</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description </label>
            <textarea class="form-control" id="description" name="desc">{{$realestate->desc}}</textarea>
        </div>



        <label for=" location_1">Location</label>
        <input type="text" class="form-control" name="location" placeholder="Location wide area" id="location_1" value="{{$realestate->location}}">

        <label for="price">Price</label>
        <input type="number" class="form-control" name="price_usd" placeholder="Price in USD" id="price" value="{{$realestate->price_usd}}">
        @endforeach
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
@endsection