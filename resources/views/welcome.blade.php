<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Blog</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
      <div class="container" id="app">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-header text-center py-4">Registros Mi Blog</h1>
          </div>
          <div class="col-md-7">
            <a href="#" class="btn btn-primary">Nuevo Blog</a><br><br>
          </div>
          <div class="col-md-12">
            <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Titulo</th>
                  <th>Contenido</th>
                  <th></th>
                </tr>
                <tr v-for="blogs in blogs">
                  <td>@{{ blogs.id }}</td>
                  <td>@{{ blogs.title }}</td>
                  <td>@{{ blogs.body }}</td>
                  <td>
                    <a href="#"><i class="far fa-eye"></i></a>
                    <a href="#" v-on:click.prevent="deleteBlog(blogs)"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
            </table>
          </div>
        </div>    
      </div>  




        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
