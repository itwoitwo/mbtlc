<ul class="nav nav-tabs nav-justified mb-3">
    <li class="nav-item"><a href="{{ route('adopts.adopts_index', ['id' => $user->id]) }}" class="nav-link {{ request()->route()->named('adopts*') ? 'active' : '' }}">採用コンボ</a></li>
    <li class="nav-item"><a href="{{ route('favorites.favorites_index', ['id' => $user->id]) }}" class="nav-link {{ request()->route()->named('favorites*') ? 'active' : '' }}">お気に入り</a></li>
    <li class="nav-item"><a href="{{ route('mycombos.mycombos_index', ['id' => $user->id]) }}" class="nav-link {{ request()->route()->named('mycombos*') ? 'active' : '' }}">投稿したコンボ</a></li>
</ul>