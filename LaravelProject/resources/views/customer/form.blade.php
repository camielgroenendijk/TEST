
<div>
    <label for="name">Name</label>
    <input type="text" name="name" autocomplete="off" value="{{old('name') ?? $customer->name}}">
    <p style="color: red">@error('name'){{ $message }} @enderror</p>
</div>

<div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>

<div>
    <label for="email">Email</label>
    <input type="text" name="email" autocomplete="off" value="{{old('email') ?? $customer->email}}">
    <p style="color: red">@error('email'){{ $message }} @enderror</p>

</div>

@csrf
