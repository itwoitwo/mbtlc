@if (Auth::user()->is_favoring($combo->id))
{!! Form::open(['route' => ['favorites.unfavorite', $combo->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => 'btn btn-danger btn-sm']) !!}
    {!! Form::close() !!}
@else
{!! Form::open(['route' => ['favorites.favorite', $combo->id], 'method' => 'post']) !!}
        {!! Form::submit('Favorite', ['class' => 'btn btn-success btn-sm']) !!}
    {!! Form::close() !!}
@endif
