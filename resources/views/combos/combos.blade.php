<ul class="list-unstyled">
    @foreach ($combos as $combo)
        <li class="card col-md-12">
            <div class="card-body">
                <div class="card-header">
                    {!! nl2br(e($combo->fighter)) !!} &nbsp; &nbsp; Ver. {!! nl2br(e($combo->version)) !!}
                </div>
                <div class="row card-body py-1">
                    <div class="col-sm">
                        状況:{!! nl2br(e($combo->place)) !!}
                    </div>
                    <div class="col-sm">
                        始動:{!! nl2br(e($combo->starting)) !!}
                    </div>
                    <div class="col-sm">
                        {!! nl2br(e($combo->counter_hit)) !!}
                    </div>
                </div>
                <div class="row card-body py-1">
                    <div class="col-sm">
                        マジックサーキット{!! nl2br(e($combo->magic_circuit)) !!}本
                    </div>
                    <div class="col-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                        </svg>
                        &nbsp; {!! nl2br(e($combo->moon)) !!}
                    </div>
                    <div class="col-sm">
                        {!! nl2br(e($combo->damage)) !!}ダメージ
                    </div>
                </div>

            </div>
                    {{-- <p class="mb-0">{!! nl2br(e($combo->version)) !!}</p>
                    <p class="mb-0">{!! nl2br(e($combo->place)) !!}</p>
                    <p class="mb-0">{!! nl2br(e($combo->starting)) !!}</p>
                    <p class="mb-0">{!! nl2br(e($combo->counter_hit)) !!}</p>
                    <p class="mb-0">{!! nl2br(e($combo->magic_circuit)) !!}</p>
                    <p class="mb-0">{!! nl2br(e($combo->moon)) !!}</p>
                    <p class="mb-0">{!! nl2br(e($combo->damage)) !!}</p>
                    <p class="mb-0">{!! nl2br(e($combo->recipe)) !!}</p>
                    <p class="mb-0">{!! nl2br(e($combo->explain)) !!}</p> --}}
                <div class="user_info">
                    {!! link_to_route('users.show', $combo->user->name, ['id' => $combo->user->id], ['class' => 'link']) !!} <span class="text-muted">posted at {{ $combo->created_at }}</span>
                </div>
                <div class="d-flex">
                    <div>
                        @include("favorite_and_adopt.favorite_button")
                    </div>
                    <div>
                        @include("favorite_and_adopt.adopt_button")
                    </div>
                    <div>
                        @include("combos.combos_delete_button", ['user' => $user])
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $combos->links('pagination::bootstrap-4') }}