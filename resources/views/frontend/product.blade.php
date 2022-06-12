@extends('layouts.frontend')

@section('title', 'Products')

@section('content')

    <div class="container products">

        <div class="row">
            @foreach ($medicine as $med)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="http://placehold.it/500x300" alt="">
                    <div class="caption">
                        <h4>{{  $med->generic_name   }}</h4>
                        <p>{{ Str::limit(strtolower($med->description),50) }}</p>
                        <p><strong>Price: </strong> Rp. {{ $med->price }}</p>
                        <p class="btn-holder"><a href="{{ url('add-to-cart/'.$med->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
            @endforeach
         </div>
    </div>

@endsection