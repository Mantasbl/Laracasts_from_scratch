<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
    <form action="/projects" method="POST">
      {{csrf_field()}}
      <div class="">
            <input type="text" name="title" placeholder="Project Title" value="{{old('title')}}" required>
      </div>

      <div class="">
        <textarea name="description" placeholder="Project Description" value="{{old('title')}}" required></textarea>
      </div>

      <div class="">
        <button type="submit" name="button">Create Project</button>
      </div>
    </form>
    @if ($errors->any())
    <div class="notification is-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </body>

</html>
