@if (Auth::user()->is_adopting($combo->id))
{!! Form::open(['route' => ['adopts.unadopt', $combo->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unadopt', ['class' => 'btn btn-danger btn-sm']) !!}
    {!! Form::close() !!}
@else
{!! Form::open(['route' => ['adopts.adopt', $combo->id], 'method' => 'post']) !!}
        {!! Form::submit('Adopt', ['class' => 'btn btn-success btn-sm']) !!}
    {!! Form::close() !!}
@endif