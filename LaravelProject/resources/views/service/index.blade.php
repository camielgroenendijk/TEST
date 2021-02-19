@extends('app')

@section('title', 'Services' )


@section('content')
    <h1>Welcome To Services</h1>

    <form action="/service" method="post">
        <input type="text" name="name">
        @csrf
        <button>add service</button>
    </form>
    {{--The name field is required--}}
     <p style="color: red">@error('name'){{ $message }} @enderror</p>

    <ul>
        @foreach($services as $services)
            <li style="color: red">{{$services->name}}</li>

        @endforeach
    </ul>
@endsection
