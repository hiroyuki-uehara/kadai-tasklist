@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                <li class="nav-item"><a href="{{ route('users.show', ['id' => $user->id]) }}"  class="nav-link" {{ Request::is('users/' . $user->id) ? 'active' : '' }}">Time Line <span class="badge badge-secondary">{{ $count_tasks }}</span></a></li>
            </ul>
            @if (Auth::id() === $user->id)
                {!! Form::open(['route' => 'tasks.store']) !!}
                    <div class="form-group">
                            {!! Form::text('content', old('content'), ['class' => 'form-control') !!}
                            {!! Form::text('status', old('status'), ['class' => 'form-control']) !!}
                            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                {!! Form::close() !!}
            @endif
            @if (count($tasks) > 0 )
                @include('tasks.index', ['tasks' => $tasks])
            @endif
        </div>
    </div>
@endsection