@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="logo-title">
            <img src="{{Vite::asset('resources/img/techs.png')}}" alt="Technologies">
        </div>
        <div class="my-5">
            @foreach($technologies as $technology)
            <h3>
                {{ $technology->name }}
            </h3>
            <p>{{ $technology->description }}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection