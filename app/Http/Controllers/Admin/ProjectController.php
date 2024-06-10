<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdateTypeRequest;
use App\Models\Technology;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }


    public function create()
    {
        $types = Type::all();
        $technologies = Technology::orderBy('name','asc')->get();
        return view('admin.projects.create', compact('types', 'technologies'));
    }

    public function store(StorePostRequest $request)
    {
        // $request->validate([
        //     'project_title'=>'required|max:255',
        //     'project_description'=>'required|max:255',
        //     'github_url'=>'required'
        // ]);
      

        $form_data= $request->all();

        $base_slug = Str::slug($form_data['project_title']);
        $slug = $base_slug;
        $n = 0;

        do {
            $find = Project::where('slug', $slug)->first();

            if ($find !== null) {
                $n++;
                $slug = $base_slug . '-' . $n;
            }
        } while ($find !== null);

        $form_data['slug'] = $slug;


        $new_project = Project::create($form_data);

        if ($request->has('technologies')) {
            $new_project->technologies()->sync($request->technologies);
        }
        //sync aggiunge alla tabella pivot quello che arriva dalla richiesta

        return to_route('admin.projects.show', $new_project);
    }


    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }


    public function edit(Project $project)
    {
        $types = Type::all();
        return view('admin.projects.edit', compact('project', 'types'));
    }


    public function update(UpdateTypeRequest $request, Project $project)
    {
        $form_data = $request->all();
        $base_slug = Str::slug($form_data['project_title']);
        $slug = $base_slug;
        $n = 0;

        do {
            $find = Project::where('slug', $slug)->first();

            if ($find !== null) {
                $n++;
                $slug = $base_slug . '-' . $n;
            }
        } while ($find !== null);
        $form_data['slug'] = $slug;
        $project->update($form_data);  

        return to_route('admin.projects.show', $project); 
    }


    public function destroy(Project $project)
    {
        $project->delete();
        return to_route('admin.projects.index');
    }
}
