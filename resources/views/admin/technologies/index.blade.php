@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="logo-title d-flex justify-content-between align-items-center">
            <img src="{{Vite::asset('resources/img/techs.png')}}" alt="Technologies">
            <a class="mt-3" href="{{ route('admin.technologies.create')}}">
                <button class="bg-brown">Add Technology</button>
            </a>
        </div>
        <div class="mt-5">
            <ul class="technologies-list">
            @foreach($technologies as $technology)
            <li>
                <h4><a href="{{ route('admin.technologies.show', $technology)}}">{{ $technology->name }}</a></h4>
                <p>{{ $technology->description }}</p>
            </li>
            @endforeach
        </ul>
        </div>
        
    </div>
</div>
@endsection