@extends('layouts.admin.dashboard')
@section('title')
    Email
@endsection
@section('content')
<h1 class="fw-bold">Email Subscribers</h1>
<table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
        <p class="d-hidden" hidden>{{$angka=1}}</p>
        @foreach($emails as $email)
        <tr>
            <th scope="row">{{$angka++}}</th>
            <td>{{$email->email}}</td>

            {{-- <td> --}}
                {{-- @if ($realestate->sold == 0)
                <form method="GET" action="/realestate/sold/{{$realestate->id}}"  class="m-1"><button type="submit" class="btn btn-outline-success" id="sold">mark as sold</button></form>
                @else
                    <p class="bg-success text-center text-light rounded">SOLD</p>
                    <form method="GET" action="/realestate/unsold/{{$realestate->id}}"  class="m-1"><button type="submit" class="btn btn-outline-danger" id="sold">mark as unsold</button></form>
                @endif --}}

            {{-- </td> --}}
            
            <td>
                <a href="mailto:{{$email->email}}"  class="btn btn-success" target="_blank" rel="noopener noreferrer">Send Email</a>
                <form method="GET" action="/email/edit/{{$email->id}}"  class="m-1" name="myForm"><button type="submit" class="btn btn-primary" id="edit">Edit</button></form>

                 <form method="GET" action="/email/delete/{{$email->id}}" class="m-1" name="myForm"><button type="submit" class="btn btn-danger" id="delete">Delete</button></form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</main>
<!--Container Main end-->
@endsection