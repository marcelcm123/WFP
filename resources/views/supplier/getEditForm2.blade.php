
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
            <input type="text" class="form-control" name="name" id="eName" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address" rows="5" cols="40" class="form-control" id="eAddress">{{$data->address}}</textarea>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-info" data-dismiss='modal' onclick="saveDataUpdateTD({{$data->id}})">Submit</button>
    <a class="btn btn-default" data-dismiss='modal'>Cancel</a>
</div>