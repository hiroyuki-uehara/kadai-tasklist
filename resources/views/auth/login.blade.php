@extends('layouts.app')

@section('content')
  <div class="text-center">
    <h1>Log in</h1>
  </div>
  
  <div class="row">
    <div class="col-sm-6 offset-sm-3">
        
        {!! Form::open(['route' => 'login.post']) !!}
          <div class="form-group">
              {!! Form::label('email', 'Email') !!}
              {!! Form::email('email',old('email'),['class' => 'form-control']) !!}
          </div>
          
          <div class="form-group">
              {!! Form::label('password', 'Password') !!}
              {!! Form::password('password', ['class' => 'form-control']) !!}
          </div>
          {!! Form::submit('Log in', ['class' => 'mt-4 btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
        <p></p>
        <div class="row" >
        <p class="mt-3 ml-4">New user?</p>
        <p class="mt-2 ml-3">{!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-link']) !!}</p>
        </div>
    </div>
  </div>
@endsection