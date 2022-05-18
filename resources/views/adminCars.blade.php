@extends('layouts.admin')


@section('content')
    @foreach($cars as $car)
        <div>
            <h1>{{$car->model}}</h1>
            <div>
                <ul>
                    <li>Price: {{$car->price_by_day}}</li>
                    <li>Year: {{$car->year}}</li>
                    <li>Transmission: {{$car->transmission}}</li>
                    <li>Body type: {{$car->body_type}}</li>
                </ul>
            </div>
        </div>
    @endforeach
@endsection
