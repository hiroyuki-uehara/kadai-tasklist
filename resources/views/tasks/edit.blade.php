@extends('layouts.app')

@section('content')

  
  <h1> Edit Task {{ $task->id }}</h1>
  
  <div class="row">
      <div class="col-6">
          {!! Form::model($task, ['route' => ['tasks.update',$task->id], 'method' => 'put']) !!}
          
            <div class="form-group row">
              <label class="col-sm-2 col-form-label text-right">
                {!! Form::label('content', 'Task:') !!}
              </label>
              <div class="col-sm-10">
              {!! Form::text('content', null, ['class' => 'form-control']) !!}
              </div>
            </div>
            
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
          
          {!! Form::close() !!}
      </div>
  </div>

@endsection