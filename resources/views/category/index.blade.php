@extends('layouts.conquer')

@section('content')
<h2>List Categories</h2>
    <p>The .table-hover class enables a hover state on table rows:</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $li)
            <tr>
                <td>{{$li->name}}</td>
                <td>{{$li->description}}</td>
                <td>{{$li->created_at}}</td>
                <td>{{$li->updated_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

<a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>

<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">DISCLAIMER</h4>
        </div>
        <div class="modal-body">
          Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
   </div>
</div>


<li>
     <a href="#" onClick="showInfo()">Welcome</a>
     <i class="icon-bulb"></a></i>
  </li>
</ul>
</div>   		
<div id='showinfo'></div>

@section('javascript')
<script>
function showInfo()
{
  $.ajax({
    type:'POST',
    url:'{{route("showInfo")}}',
    data:'_token=<?php echo csrf_token() ?>',
    success: function(data){
       $('#showinfo').html(data.msg)
    }
  });
}
</script>
@endsection


@endsection