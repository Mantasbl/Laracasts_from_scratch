<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
  protected $fillable = [
    'title', 'description'
  ];

  public function tasks() {
    return $this->hasMany(Task::class);
  }

  public function addTask($task)
  {
    $this->tasks()->create(compact($task));

//    return Task::create([
//      'project_id'=> $this->id,
//      'description' => $description
//    ]);
  }
}
