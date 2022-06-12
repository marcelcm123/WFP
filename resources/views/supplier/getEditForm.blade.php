<form role="form" method="post" action="{{url('suppliers/'.$data->id)}}">
    <div class="modal-header">
        <buton type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4>Edit Supplier</h4>
    </div>
    <div class="modal-body">
    @csrf
    @method("PUT")
    <div class="form-body">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address" rows="5" cols="40" class="form-control" id="address">{{$data->address}}</textarea>
        </div>
    </div>
</div>
<input type="submit" value="Submit" class="btn btn-primary">
<button>Cancel</button>
</form>