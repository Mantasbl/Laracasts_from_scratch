<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="/pro jects" method="POST">
      {{csrf_field()}}
      <div class="">
            <input type="text" name="title" placeholder="Project Title" value="">
      </div>

      <div class="">
        <textarea name="description" placeholder="Project Description"></textarea>
      </div>

      <div class="">
        <button type="submit" name="button">Create Project</button>
      </div>
    </form>

  </body>

</html>
