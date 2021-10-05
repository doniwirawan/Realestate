@extends('layouts.admin.dashboard')
@section('title')
    Admin Dashboard
@endsection
@section('content')
<h1 class="fw-bold">Real Estate</h1>
<table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Images</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Sold?</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
        <p class="d-hidden" hidden>{{$angka=1}}</p>
        @foreach($realestate as $realestate)
        <tr>
            <th scope="row">{{$angka++}}</th>
            <td>{{$realestate->name}}</td>
            <td>
                @foreach(explode(',', $realestate->img) as $f)
                <img src="{{URL::asset("storage/img/{$f}")}}" alt="" class="img-fluid table-img rounded">
                @endforeach
            </td>
            <td>@money($realestate->price_usd)</td>
            <td>{{$realestate->type}}</td>

            <td>
                @if ($realestate->sold == 0)
                <form method="GET" action="/realestate/sold/{{$realestate->id}}"  class="m-1"><button type="submit" class="btn btn-outline-success" id="sold">mark as sold</button></form>
                @else
                    <p class="bg-success text-center text-light rounded">SOLD</p>
                @endif
            </td>
           
            <td>
                <form method="GET" action="/realestate/edit/{{$realestate->id}}"  class="m-1" name="myForm"><button type="submit" class="btn btn-primary" id="edit">Edit</button></form>

                 <form method="GET" action="/realestate/delete/{{$realestate->id}}" class="m-1" name="myForm"><button type="submit" class="btn btn-danger" id="delete">Delete</button></form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</main>
<!--Container Main end-->
@endsection