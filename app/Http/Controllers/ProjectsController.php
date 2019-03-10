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

  public function show(Project $project) {
    //$project = Project::findorFail($id);
    return view('projects.show', compact('project'));
  }

  public function create() {

    return view('projects.create');

  }

  public function store() {
  $attributes = request()->validate([
    'title' => ['required', 'min:4'] ,
    'description' =>['required', 'min:4']
  ]);
  Project::create($attributes);
//    $project = new Project();
//    $project->title = request('title');
//    $project->description = request('description');
//    $project->save();

    return redirect('/projects');
  }

  public function edit(Project $project)
  {
    //$project = Project::findOrFail($id);
    return view('projects.edit', compact('project'));
  }

  public function update(Project $project) {

    //$project = Project::findOrFail($id);

    $project->update(request(['title', 'description']));
    $project->save();
    return redirect('/projects');
  }

  public function destroy(Project $project) {
    //Project::findorFail($id)->delete();
    $project->delete();
    return redirect('/projects');
  }
}
