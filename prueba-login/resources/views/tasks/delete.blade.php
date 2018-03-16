>

       <div class="btn-group" role="group" aria-label="Basic example">
           <a href="{{ URL::to('tasks/' . $task->id . '/edit') }}">
            <button type="button" class="btn btn-warning">Editar</button>
           </a>&nbsp;
           <form action="{{url('tasks', [$task->id])}}" method="POST">
             <input type="hidden" name="_method" value="DELETE">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <input type="submit" class="btn btn-danger" value="Delete"/>
           </form>

       </div>
