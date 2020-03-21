@extends('layouts.app')

@section('content')
  <h1>New Task</h1>
  <div class="row">
    <div class="col-6">
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
          <div class="form-group">
            <!--{!! Form::label('content', 'Task:') !!}-->
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
          </div>
          
          {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
          
        {!! Form::close() !!}
    </div>
  </div>

@endsection