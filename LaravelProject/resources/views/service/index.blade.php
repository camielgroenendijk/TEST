@extends('app')
@section('title', 'Services' )
@section('content')
    <h1>Welcome To Services</h1>
    <h2>Add here a new service!</h2>

    <form action="/service" method="post">
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
            @csrf
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" id="button-addon2">Button</button>
            </div>
        </div>
    </form>


    <ul class="list-group">
        @foreach($services as $services)
        <li class="list-group-item active">{{$services->name}}</li>
        @endforeach
    </ul>



@endsection
