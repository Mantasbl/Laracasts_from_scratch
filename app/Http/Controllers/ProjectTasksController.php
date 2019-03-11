<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\project;
class ProjectTasksController extends Controller
{

  public function store(project $project)
  {
    $attributes = request()->validate(['description'=>'required']);

    $project->addTask(request($attributes));


//    Task::create([
//      'project_id'=> $project->id,
//      'description'=> request('description')
//    ]);
    return back();
  }

  public function update(Task $task) {
    $task->complete(request()->has('completed'));
  //$task->update([
  //    'completed' => request()->has('completed')
  //  ]);

    $method = request()->has('completed') ? 'complete' : 'incomplete';

    $task->$method();
  return back();
  }

}
