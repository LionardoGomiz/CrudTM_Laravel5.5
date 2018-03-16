@extends('layout.layout')

@section('content')



@endsection

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ver Buses Insertados</title>
  <h1>Showing Task {{ $task->id }}</h1>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


  <br>
  <br>
  <h2>Bordered Table</h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th><strong>Codigo</strong></th>
        <th><strong>Operador</strong></th>
        <th><strong>Carroceria:</strong></th>
        <th><strong>Modelo:</strong></th>
        <th><strong>Motor:</strong></th>
        <th><strong>Tipologia:</strong></th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $task->Codigo }}<br></td>
        <td>{{ $task->Operador }}<br></td>
        <td>{{ $task->Carroceria }}<br></td>
        <td>{{ $task->Modelo }}<br></td>
        <td>{{ $task->Motor }}<br></td>
        <td>{{ $task->Tipologia }}<br></td>
      </tr>
      <tr>

        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>

        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr>

        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr>

        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr>

        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html
