<!doctype html>
<html lang="en">
  <head>
    <title>Crud Eloquent ORM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="alert alert-primary" role="alert">
                <strong>{{ $title }}</strong>
            </div>
            @if ($url=='http://127.0.0.1:8000')
            <form action="" method="post" >
                @csrf
                @else
                <form action="" method="post" >
                    @csrf
                    @method('put')
                @endif
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">Name:</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"
                  @if ($url=='http://127.0.0.1:8000')
                  value=""
                @else
                value="{{ $student->name }}"
                @endif>
                </div>
                <div class="mb-3">
                  <label for="age" class="form-label">Age:</label>
                  <input type="number" class="form-control" id="pwd" placeholder="Enter age" name="age"
                  @if ($url=='http://127.0.0.1:8000')
                    value=""
                  @else
                  value="{{ $student->age }}"
                  @endif>
                </div>
                <button type="submit" class="btn btn-success">{{ $btn }}</button>
              </form>
        </div>
        <div class="col-sm-6">
            <div class="alert alert-success" role="alert">
                <strong>List Student</strong>
            </div>
            <table class="table table-striped table-sm">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student )
                        <tr>
                            <td>{{ $student['id'] }}</td>
                            <td>{{ $student['name'] }}</td>
                            <td>{{ $student['age'] }}</td>
                            <td>
                                <a href="{{ url('edit', $student->id) }}">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </a>
                            <a href="{{ url('delete', $student->id) }}">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>

        </div>
    </div>
</div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
