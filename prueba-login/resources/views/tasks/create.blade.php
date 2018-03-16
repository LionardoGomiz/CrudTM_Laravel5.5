@extends('layout.layout')

@section('content')
<br>
<br>
<br>
<br>
    <h1>Agregar Nuevo Bus Abordado</h1>
    <hr>
    <div class="container">
     <form action="/tasks" method="post"> <!--redirije a la anterior vista-->
     {{ csrf_field() }}
      <div class="form-group">
        <label for="Codigo">Codigo</label>
        <input type="text" class="form-control" id="taskCodigo"  name="Codigo">
      </div>
      <div class="form-group">
        <label for="Operador">Operador</label>
        <input type="text" class="form-control" id="taskOperador" name="Operador">
      </div>
      <div class="form-group">
        <label for="Carroceria">Carroceria</label>
        <input type="text" class="form-control" id="taskCarroceria" name="Carroceria">
      </div>
      <div class="form-group">
        <label for="Modelo">Modelo</label>
        <input type="text" class="form-control" id="taskModelo" name="Modelo">
      </div>
      <div class="form-group">
        <label for="Motor">Motor</label>
        <input type="text" class="form-control" id="taskMotor" name="Motor">
      </div>
      <div class="form-group">
        <label for="Tipologia">Tipologia</label>
        <input type="text" class="form-control" id="taskTipologia" name="Tipologia">
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Agregar vehiculo</button>
    </form>
  </div>
@endsection
