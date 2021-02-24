@extends('app')
@section('title', 'Customers' )
@section('content')
    <h1>Welcome To Customers</h1>
<<<<<<< Updated upstream
    <div class="container w-50">
        <a href="/customers/create">
            <button type="button" class="btn btn-primary">Add Customer</button>
        </a>
        <ul class="list-group">
            <li class="list-group-item">@forelse($customers as $customer)
                    <p><strong>
                            <a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
                        </strong>({{$customer->email}})</p>
                @empty
                    <p>No customers</p>
                @endforelse</li>
        </ul>
=======

    <div class="list-group">
        <a href="/customers/create" class="list-group-item list-group-item-action active">
            Add New Customer
        </a>
    </div>
    <div>
        @forelse($customers as $customer)
            <p><strong>
                    <a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
                </strong>({{$customer->email}})</p>
        @empty
            <p>No customers</p>
        @endforelse
>>>>>>> Stashed changes
    </div>
@endsection
