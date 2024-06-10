<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::all();
        return view('admin.technologies.index', compact('technologies'));
    }


    public function create()
    {
        return view('admin.technologies.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Technology $technology)
    {
        //
    }

 
    public function edit(Technology $technology)
    {
        //
    }


    public function update(Request $request, Technology $technology)
    {
        //
    }


    public function destroy(Technology $technology)
    {
        //
    }
}
