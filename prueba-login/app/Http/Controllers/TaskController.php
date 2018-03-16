<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tasks = Task::all();
      return view('tasks.index',compact('tasks',$tasks));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Almacene un recurso recién creado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'Codigo' => 'required|min:3',
          'Operador' => 'required',
          'Carroceria' => 'required',
          'Modelo' => 'required',
          'Motor' => 'required',
          'Tipologia' => 'required',
    ]);

    $task = Task::create(['Codigo' => $request->Codigo,'Operador' => $request->Operador,'Carroceria' => $request->Carroceria,
  'Modelo' => $request->Modelo,'Motor' => $request->Motor,'Tipologia' => $request->Tipologia]);
    return redirect('/tasks/'.$task->id); /**redirecciona  a la vista que muestra el dato insertado */
    }

    /**
     * Mostrar el recurso especificado.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('tasks.show',compact('task',$task));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task',$task));
    }

    /**
     * Actualice el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
      $task->Codigo = $request->Codigo;
      $task->Operador = $request->Operador;
      $task->Carroceria = $request->Carroceria;
      $task->Modelo = $request->Modelo;
      $task->Motor = $request->Motor;
      $task->Tipologia = $request->Tipologia;

      $task->save();
      $request->session()->flash('message', 'A Modificado exitosamente el Vehiculo!');
      return redirect('tasks/create');
    }

    /**
     * Elimine el recurso especificado del almacenamiento.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
      $task->delete();
      $request->session()->flash('message', 'A Borrado exitosamente el Vehiculo!');
      return redirect('tasks/delete');
    }
}
