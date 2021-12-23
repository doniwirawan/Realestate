@extends('layouts.admin.dashboard')
@section('title')
    Contact Form
@endsection
@section('content')
<h1 class="fw-bold">Contact Form</h1>
<table class="table table-striped" id="myTable">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
        <p class="d-hidden" hidden>{{$angka=1}}</p>
        @foreach($contacts as $contact)
        <tr>
            <th scope="row">{{$angka++}}</th>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->subject}}</td>
            <td>{{$contact->message}}</td>

            {{-- <td> --}}
                {{-- @if ($realestate->sold == 0)
                <form method="GET" action="/realestate/sold/{{$realestate->id}}"  class="m-1"><button type="submit" class="btn btn-outline-success" id="sold">mark as sold</button></form>
                @else
                    <p class="bg-success text-center text-light rounded">SOLD</p>
                    <form method="GET" action="/realestate/unsold/{{$realestate->id}}"  class="m-1"><button type="submit" class="btn btn-outline-danger" id="sold">mark as unsold</button></form>
                @endif --}}

            {{-- </td> --}}
            
            <td>
                <a href="mailto:{{$contact->email}}"  class="btn btn-primary" target="_blank" rel="noopener noreferrer">Send Email</a>

                 <form method="GET" action="/contact/delete/{{$contact->id}}" class="m-1" name="myForm"><button type="submit" class="btn btn-danger" id="delete">Delete</button></form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</main>
<!--Container Main end-->
@endsection