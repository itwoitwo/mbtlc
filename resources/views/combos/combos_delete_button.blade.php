@if (Auth::id() == $combo->user_id)
{!! Form::open(['route' => ['combos.destroy', $combo->id], 'method' => 'delete']) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
{!! Form::close() !!}
@endif