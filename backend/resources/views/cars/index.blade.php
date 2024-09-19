@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($cars as $car)
                <div class="col-md-4">
                    <h2>
                        {{ $car['manufacturer'] }} {{$car['model']}}
                    </h2>

                    <p>{{$car['consumption']}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
