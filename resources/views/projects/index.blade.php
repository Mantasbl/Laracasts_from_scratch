<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($projects as $project)
      <li>{{ $project->title }}</li>
    @endforeach
  </body>
</html>
