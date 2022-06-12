@extends('layouts.conquer')
@section('content')

<h1>Add New Supplier</h1>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
</div>
@endif
<form method="post" action="{{url('suppliers')}}">
    @csrf
<div>
    <label>Name</label>
    <input type="text" class="form-control" name="name" id="name">
</div>
<div>
<label>Address</label>
<textarea name="address" rows="5" cols="40" class="form-control" id="address"></textarea>
</div>
<input type="submit" value="Submit" class="btn btn-primary">
<button>Cancel</button>
</form>
@endsection