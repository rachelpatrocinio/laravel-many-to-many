@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-5">
        <div class="card mb-3">
            <h2>{{ $type->name }}</h2>
            <p>{{ $type->description }}</p>
        </div>
        <div class="d-flex justify-content-between p-0">
            <a href="{{ route('admin.types.index')}}">
                <button class="bg-brown">Go Back</button>
            </a>
            <a href="{{ route('admin.types.edit', $type)}}">
                <button class="bg-lightbrown">Edit</button>
            </a>
        </div>
    </div>
</div>
@endsection