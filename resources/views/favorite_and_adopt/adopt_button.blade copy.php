@if (Auth::id() != $user->id)
    @if (Auth::user()->is_adopting($user->id))
        {!! Form::open(['route' => ['user.unadopt', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unadopt', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.adopts', $user->id]]) !!}
            {!! Form::submit('Adopt', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif