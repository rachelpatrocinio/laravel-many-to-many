@extends('layouts.app')

@section('content')
<section class="projects my-5">
  <div class="container">
      <div class="row">
        <div class="logo-title d-flex justify-content-between align-items-center p-0">
          <img src="{{ Vite::asset('resources/img/my-projects.png')}}" alt="">
          <a href="{{ route('admin.projects.create')}}">
            <button class="bg-brown">Add New Project</button>
          </a>
        </div>
          <table class="table my-5">
              <thead>
                <tr>
                  <th scope="col">Project Title</th>
                  <th scope="col">Slug</th>
                  <th scope="col">Project Description</th>
                  <th scope="col">Github Url</th>
                  <th scope="col">Details</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
              @foreach($projects as $project)
                <tr>
                  <td>{{$project->project_title}}</td>
                  <td>{{$project->slug}}</td>
                  <td>{{$project->project_description}}</td>
                  <td><a target="_blank" href="{{ $project->github_url }}">{{$project->github_url}}</a></td>
                  <td><a href="{{ route('admin.projects.show', $project)}}">Details</a></td>
                  <td><a href="{{ route('admin.projects.edit', $project)}}">Edit</a></td>
                  <td>
                    <form action="{{ route('admin.projects.destroy', $project)}}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button class="btn delete-btn">
                        <img src="{{Vite::asset('resources/img/icons/bin.png')}}" alt="Delete">
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
      </div>
  </div>
</section>
@endsection