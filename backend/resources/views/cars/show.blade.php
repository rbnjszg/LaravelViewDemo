@extends('layouts.main')

@section('title', $title)



@section('content')
    <div class="container">
        <div class="row">
            <h1>{{ $title }}</h1>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3> {{ $car['manufacturer'] }} {{ $car['model'] }}</h3>
                        </div>
                        <p class="card-text">
                        <ul>
                            <img src="{{asset("img/$car[image]")}}" class="card-img-top">
                            <li>
                               Fogyasztás: {{ $car['consumption'] }}

                            </li>
                            <li>
                                Szín: {{ $car['color'] }}
                            </li>
                        </ul>
                        </p>
                        <a href="{{route("home")}}" class="btn btn-primary">Főoldal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
