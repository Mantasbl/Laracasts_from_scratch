<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\project;

class ProjectsController extends Controller
{
  public function index() {
    $projects = project::all();

    return view('projects.index', compact('projects'));
  }

  public function create() {

    return view('projects.create');

  }

  public function store() {
    $project = new Project();

    $project->title = request('title');
    $project->description = request('description');

    $project->save();

    return redirect('/projects');
  }

  public function edit($id)
  {
    $project = Project::find($id);
    return view('projects.edit');


  }
}
