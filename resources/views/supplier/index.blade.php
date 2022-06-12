@extends('layouts.conquer')
@section('content')
<div class="page-bar">
    <ul class="page-breadcrumb">
</ul>

<div class="page-toolbar">
    <a href="{{url('suppliers/create')}}" class='btn btn-info' type="button" > + Supplier baru</a>
    <a href="#modalCreate" class='btn btn-info' data-toggle='modal'>+ Supplier Baru (modal)</a>
</div>
<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" 
                    data-dismiss="modal" aria-hidden="true"></button>
                  <h4 class="modal-title">Add New Supplier</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method='POST' action="{{url('suppliers')}}">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id='name' name='name'>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" id='address' name='address'></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="{{url('suppliers')}}" class="btn btn-default" data-dismiss="modal">Cancel</a>
                </div>
              </div>
            </div>
          </div>

</div>
<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modalContent">

        </div>
    </div>
</div>
@section('javascript')
<script>
function getEditForm(id) {
    $.ajax({
        type:'POST',
        url:'{{route("supplier.getEditForm")}}',
        data:{'_token':'<?php echo csrf_token() ?>','id':id},
        success: function(data){
            $('#modalContent').html(data.msg)
        }
    });
}

function getEditForm2(id) {
    $.ajax({
        type:'POST',
        url:'{{route("supplier.getEditForm2")}}',
        data:{'_token':'<?php echo csrf_token() ?>','id':id},
        success: function(data){
            $('#modalContent').html(data.msg)
        }
    });
}

function saveDataUpdateTD(id) {
    var eName = $('#eName').val();
    var eAddress = $('#eAddress').val();
    $.ajax({
        type:'POST',
        url:'{{route("supplier.saveData")}}',
        data:{'_token':'<?php echo csrf_token() ?>',
        'id':id,'name':eName,'address':eAddress},
        success: function(data){
            if(data.status=='ok'){
                alert(data.msg)
                $('#td_name_'+id).html(eName);
                $('#td_address_'+id).html(eAddress);
            }
        }
    });
}

function deleteDataRemoveTR(id){
    $.ajax({
        type:'POST',
        url:'{{route("supplier.deleteData")}}',
        data:{'_token':'<?php echo csrf_token() ?>','id':id},
        success: function(data){
            if(data.status=='ok'){
                alert(data.msg)
                $('#tr_'+id).remove();
            }
            else{
                alert(data.msg)
            }
        }
    });
}
</script>
@endsection


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error')}}
</div>
@endif
<h2>List Supplier</h2>
    <p>Semua Daftar Supplier</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $li)
            <tr id='tr_{{$li->id}}'>
                <td>{{$li->id}}</td>
                <td id='td_name_{{$li->id}}'>{{$li->name}}</td>
                <td id='td_address_{{$li->id}}'>{{$li->address}}</td>
                <td><a href="{{ url('suppliers/'.$li->id.'/edit')}}" class='btn btn-xs btn-info'>edit</a>
                <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' onclick="getEditForm({{$li->id}})">+ Edit A</a>
                <a href ="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' onclick="getEditForm2({{$li->id}})">+ Edit B</a>
                </td>
                <form method="post" action="{{ url('suppliers/'.$li->id)}}">
                    @csrf
                    @method("DELETE")<td>
                    <input type="submit" value="delete" class='btn btn-danger btn-xs' onclick="if(!confirm('are you sure to delete this record ?')) return false;"/>
                    <a class='btn btn-danger btm-xs' onclick="if(confirm('are you sure to delete this record ?'))deleteDataRemoveTR({{$li->id}})">Delete 2</a><td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection