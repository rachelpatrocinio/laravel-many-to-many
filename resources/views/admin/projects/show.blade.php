@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="card p-5">
            <div class="mb-3">
                <img src="{{Vite::asset('resources/img/project-title.png')}}" alt="Project Title">
                <h3 class="ms-5">{{$project->project_title}}</h3>
            </div>
            <div class="mb-3">
                <img src="{{Vite::asset('resources/img/slug.png')}}" alt="Project Title">
                <h3 class="ms-5">{{$project->slug}}</h3>
            </div>
            <div class="mb-3">
                <img src="{{Vite::asset('resources/img/github-url.png')}}" alt="Github Url">
                <p class="ms-5"><a href="#">{{$project->github_url}}</a></p>
            </div>
            <div class="mb-3">
                <img src="{{Vite::asset('resources/img/type.png')}}" alt="Github Url">
                @if($project->type)
                <p class="ms-5">{{$project->type->name}}</p>
                @endif
            </div>
            <div class="mb-3">
                <img src="{{Vite::asset('resources/img/project-description.png')}}" alt="Project Title">
                <p class="ms-5">{{$project->project_description}}</p>
            </div>
            <div class="mt-5">
                <img src="{{ Vite::asset('resources/img/related.png')}}" alt="Related Projects">
            </div>
            @foreach($project->type->projects as $project)
            <p class="ms-5 related"><a href="{{ route('admin.projects.show', $project)}}">{{$project->project_title}}</a></p>
            @endforeach
        </div>
        <div class="d-flex justify-content-between mt-3">
            <a href="{{ route('admin.projects.index', $project)}}">
                <button class="bg-lightbrown">Go Back to Projects</button>
            </a>
            <a href="{{ route('admin.projects.edit', $project)}}">
                <button class="bg-brown">Edit</button>
            </a>
        </div>
    </div>
</div>
@endsection