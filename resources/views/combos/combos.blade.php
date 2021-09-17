<ul class="list-unstyled">
    @foreach ($combos as $combo)
        <li class="media mb-3">
            <div class="media-body">
                <div>
                    {!! link_to_route('users.show', $combo->user->name, ['id' => $combo->user->id]) !!} <span class="text-muted">posted at {{ $combo->created_at }}</span>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($combo->recipe)) !!}</p>
                </div>
                <div class="d-flex">
                    <div>
                        @if (Auth::user()->is_favoring($combo->id))
                            {!! Form::open(['route' => ['favorites.unfavorite', $combo->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('Unfavorite', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                        @else
                            {!! Form::open(['route' => ['favorites.favorite', $combo->id], 'method' => 'post']) !!}
                                    {!! Form::submit('Favorite', ['class' => 'btn btn-success btn-sm']) !!}
                                {!! Form::close() !!}
                        @endif
                    </div>
                    <div>
                        @if (Auth::user()->is_adopting($combo->id))
                            {!! Form::open(['route' => ['adopts.unadopt', $combo->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('Unadopt', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                        @else
                            {!! Form::open(['route' => ['adopts.adopt', $combo->id], 'method' => 'post']) !!}
                                    {!! Form::submit('Adopt', ['class' => 'btn btn-success btn-sm']) !!}
                                {!! Form::close() !!}
                        @endif
                    </div>
                    <div>
                        @if (Auth::id() == $combo->user_id)
                            {!! Form::open(['route' => ['combos.destroy', $combo->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
        </li>
    @endforeach
</ul>
{{ $combos->links('pagination::bootstrap-4') }}