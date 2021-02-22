@extends('app')
@section('title', 'Customers' )
@section('content')
    <h1>Welcome To Customers</h1>
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
@endsection
