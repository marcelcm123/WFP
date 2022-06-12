@extends('layouts.conquer')
@section('content')

<h1>Edit Obat</h1>
    
<form method="post" action="{{url('medicine/'.$data->id)}}">
    @csrf
    @method("PUT")
<div>
    <label>Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}">
</div>
<div>
<label>Address</label>
<textarea name="address" rows="5" cols="40" class="form-control" id="address">{{$data->address}}</textarea>
</div>
<input type="submit" value="Submit" class="btn btn-primary">
<button>Cancel</button>
</form>
@endsection