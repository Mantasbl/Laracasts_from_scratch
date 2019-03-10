<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
    @foreach ($projects as $project)
      <li><a href="/projects/{{$project->id}}">{{ $project->title }}</a></li>
    @endforeach
    </ul>
  </body>
</html>
