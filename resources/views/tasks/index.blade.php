@extends('layouts.app')

@section('content')

  <h1>Task List</h1>
  @if (Auth::check())
    @if (count($tasks) > 0)
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Task</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tasks as $task)
          <tr>
            <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
            <td>{{ $task->content }}</td>
            <td>{{ $task->status }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  @endif
  {{ $tasks->links('pagination::bootstrap-4') }}

  {!! link_to_route('tasks.create', 'New Task', [], ['class' => 'btn btn-primary']) !!}
  
@endsection