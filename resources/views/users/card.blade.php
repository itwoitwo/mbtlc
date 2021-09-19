<div class="card">
    <div class="card-header">
        {{ $user->name }}
    </div>
    <div class="card-body pb-1">
        <p>メインキャラ:{{ $user->main_character }}</p>
        <p>{!! nl2br(e($user->platform)) !!}</p>
    </div>
    @if (Auth::user()->id === $user->id)
    <div class="card-footer pb-1">
        <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="link">編集</a>
    </div>
    @endif
</div>