@extends('layouts.app')

@section('content')

  <h1>New Task</h1>
  
  <div class="row">
    <div class="col-6">
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
          <div class="form-group row">
            <label class="col-sm-2 col-form-label text-right">
              {!! Form::label('content', 'Task:') !!} 
            </label>
            <div class="col-sm-10">
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
          </div>
          
          {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
          
        {!! Form::close() !!}
    </div>
  </div>

@endsection