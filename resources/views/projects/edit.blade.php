@extends('layout')

@section('content')
  <h1 class="title">Edit Project</h1>

  <form class="" action="/projects/{{$project->id}}" method="POST">
    @csrf

      <div class="field">
        <label for="title" class="label">Title</label>
        <div class="control">
          <input type="text" name="title" placeholder ="title" class="input" value="{{$project->title}}">
        </div>
      </div>


      <div class="field">
        <label for="description" class="label">Description</label>

        <div class="control">
          <textarea name="description" class="textarea">{{$project ->description}}</textarea>
        </div>
      </div>

      <div class="field is-grouped">
<div class="control">
<button type="submit" class="button is-link" name="_method" value="PATCH">



Update Project
</button>
</div>

<div class="control">

<button type="submit" class="button is-danger" name="_method" value="DELETE">



Delete Project
</button>
</div>
</div>

  </form>
@endsection
