<h1>Create new Customer</h1>

<form action="/customers/{{$customer->id}}" method="post">

    @method('PATCH')
    @include('customer.form')

    <button>Save Changes</button>
</form>
