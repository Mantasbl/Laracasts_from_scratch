@extends('layout')

@section('content')
  <h1>Edit Project</h1>

  <form class="" action="index.html" method="post">
    <div class="field">
      <label for="title" class="label">Title</label>

      <div class="control">
        <input type="text" name="title" placeholder ="title" value="">
      </div>

      <div class="field">
        <label for="description" class="label">Description</label>

        <div class="control">
          <textarea name="description" class="textarea"></textarea>
        </div>
      </div>

      div

    </div>
  </form>
@endsection
