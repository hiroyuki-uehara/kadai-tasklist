@extends('layouts.app')

@section('content')

  <h1> Edit Task</h1>
  <!--<h2>id = {{ $task->id }}</h2>-->
  
  <table class="table table-bordered table-sm">
    <tr>
        <th>id</th>
        <td>{{ $task->id }}</td>
    </tr>
    <tr>
        <th>Task</th>
        <td>{{ $task->content }}</td>
    </tr>
  </table>

  {!! link_to_route('tasks.edit', 'Edit', ['id' => $task->id], ['class' => 'btn btn-secondary']) !!}
  
  <p></p>
  
  {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
  {!! Form::close() !!}

@endsection