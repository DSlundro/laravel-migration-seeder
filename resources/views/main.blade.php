@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($boobs as $e)
            <div class="col d-flex">
                <div class="card text-white bg-primary">
                    <img class="card-img-top" src="{{$e->img}}" alt="Title">
                    <div class="card-body">
                        <h2 class="card-title">{{$e->titolo_viaggio}}</h2>
                        <p class="card-text">{{$e->descrizione}}</p>
                        <p class="card-text">{{$e->localita}}</p>
                        <p class="card-text">{{$e->trasporto}}</p>
                        <p class="card-text">{{$e->data_partenza}}</p>
                        <p class="card-text">{{$e->data_ritorno}}</p>
                        <p class="card-text">{{$e->price}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop