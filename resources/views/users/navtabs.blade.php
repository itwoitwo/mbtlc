<ul class="nav nav-tabs nav-justified mb-3">
    <li class="nav-item"><a href="{{ route('users.show', ['id' => $user->id]) }}" class="nav-link {{ Request::is('users/' . $user->id) ? 'active' : '' }}">採用コンボ</a></li>
    <li class="nav-item"><a href="{{ route('users.favorites_index', ['id' => $user->id]) }}" class="nav-link {{ Request::is('users/*/favorites_index') ? 'active' : '' }}">お気に入り</a></li>
    <li class="nav-item"><a href="{{ route('users.mycombos', ['id' => $user->id]) }}" class="nav-link {{ Request::is('users/*/mycombos') ? 'active' : '' }}">投稿したコンボ</a></li>
</ul>