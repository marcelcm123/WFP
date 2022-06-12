@extends('layouts.conquer')
@section('content')

<h1>Add New Medicine</h1>
<form method="post" action="{{url('medicine')}}">
    @csrf
<div>
    <label>Name</label>
    <input type="text" class="form-control" name="name">
</div>
<div>
<label>Address</label>
<textarea name="address" rows="5" cols="40" class="form-control"></textarea>
</div>
<div>
    {{ Form::select('cmbkat', $name) }}
</div>
<input type="submit" value="Submit" class="btn btn-primary">
<button>Cancel</button>
</form>
@endsection