@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{$title}}</h1>
        <div class="row">
            @foreach ($cars as $car)
                <div class="col-md-4">
                   <div class="card">
                        <div class="card-body">
                            <p class="card-title">
                                {{ $car['manufacturer'] }} {{$car['model']}}
                            </p>
                                <img src="{{asset("img/$car[image]")}}" class="card-img-top">
                            <p>Fogyasztás: {{$car['consumption']}}</p>

                            <a href="{{route("show",["id" => $car["id"]])}}" class="btn btn-primary">{{$car["manufacturer"]}} {{$car["model"]}}</a>
                        </div>
                   </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
