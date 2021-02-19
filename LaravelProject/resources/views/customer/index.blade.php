<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    @extends('app')

    @section('title', 'Customers' )


    @section('content')
        <h1>Welcome To Customers</h1>
    @endsection
</div>

<div>
    <a href="/customers/create">Add New Customer</a>
    @forelse($customers as $customer)
        <p><strong>
                <a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
            </strong>({{$customer->email}})</p>
    @empty
        <p>No customers</p>
    @endforelse
</div>
</body>
</html>

