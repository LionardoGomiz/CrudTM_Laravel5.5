
@extends('layout.layout')

@section('content')
<br>
<br>
<br>
    <h1>Editar Vehiculo</h1>
    <hr>
     <form action="{{url('tasks', [$task->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
            <div class="form-group">
              <label for="Codigo">Codigo</label>
              <input type="text" value="{{$task->Codigo}}" class="form-control" id="taskCodigo"  name="Codigo">
            </div>
            <div class="form-group">
              <label for="Operador">Operador</label>
              <input type="text" value="{{$task->Operador}}" class="form-control" id="taskOperador" name="Operador">
            </div>
            <div class="form-group">
              <label for="Carroceria">Carroceria</label>
              <input type="text" value="{{$task->Carroceria}}" class="form-control" id="taskCarroceria" name="Carroceria">
            </div>
            <div class="form-group">
              <label for="Modelo">Modelo</label>
              <input type="text" value="{{$task->Modelo}}" class="form-control" id="taskModelo" name="Modelo">
            </div>
            <div class="form-group">
              <label for="Motor">Motor</label>
              <input type="text" value="{{$task->Motor}}" class="form-control" id="taskMotor" name="Motor">
            </div>
            <div class="form-group">
              <label for="Tipologia">Tipologia</label>
              <input type="text" value="{{$task->Tipologia}}" class="form-control" id="taskTipologia" name="Tipologia">
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
      <button type="submit" class="btn btn-primary">Modificar Movil</button>
    </form>
@endsection
