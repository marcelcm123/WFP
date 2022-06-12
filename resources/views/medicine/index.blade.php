@extends('layouts.conquer')
@section('content')
<div class="page-bar">
    <ul class="page-breadcrumb">
</ul>

<div class="page-toolbar">
    <a href="{{url('medicine/create')}}" class='btn btn-info' type="button" > + Obat baru</a>
</div>
</div>
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
<h2>List Obat</h2>
    <p>Semua Daftar Obat</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama Obat</th>
                <th>Formula</th>
                <th>Batasan Obat</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Faskes 1</th>
                <th>Faskes 2</th>
                <th>Faskes 3</th>
                <th>Kategori</th>

            </tr>
        </thead>
        <tbody>
            @foreach($list as $li)
            <tr>
                <td>{{$li->id}}</td>
                <td>{{$li->generic_name}}</td>
                <td>{{$li->form}}</td>
                <td>{{$li->restriction_formula}}</td>
                <td>{{$li->price}}</td>
                <td>{{$li->description}}</td>
                <td>{{$li->faskes1}}</td>
                <td>{{$li->faskes2}}</td>
                <td>{{$li->faskes3}}</td>
                <td>{{$li->name}}</td>
                <td><a href="{{ url('medicine/'.$li->id.'/edit')}}" class='btn btn-xs btn-info'>edit</a>
                <form method="post" action="{{ url('medicine/'.$li->id)}}">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="delete" class='btn btn-danger btn-xs' onclick="if(!confirm('are you sure to delete this record ?')) return false;"/>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection