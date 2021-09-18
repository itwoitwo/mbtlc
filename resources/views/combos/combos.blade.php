<ul class="list-unstyled">
    @foreach ($combos as $combo)
        <li class="card mb-2 mt-2">
            <div class="card-header">
                {!! nl2br(e($combo->fighter)) !!} &nbsp; &nbsp; Ver. {!! nl2br(e($combo->version)) !!}
            </div>
            <div class="row card-body py-1">
                <div class="col-sm">
                    場所:{!! nl2br(e($combo->place)) !!}
                </div>
                <div class="col-sm">
                    始動&nbsp;:&nbsp;{!! nl2br(e($combo->starting)) !!}
                </div>
                <div class="col-sm">
                    {!! nl2br(e($combo->counter_hit)) !!}
                </div>
            </div>
            <div class="row card-body py-1">
                <div class="col-sm">
                    マジックサーキット&nbsp;:&nbsp;{!! nl2br(e($combo->magic_circuit)) !!}本
                </div>
                <div class="col-sm">
                    <i class="fas fa-moon fa-flip-horizontal text-warning"></i>
                    :&nbsp;{!! nl2br(e($combo->moon)) !!}
                </div>
                <div class="col-sm">
                    ダメージ&nbsp;:&nbsp;{!! nl2br(e($combo->damage)) !!}
                </div>
            </div>
            <div class="card-body border-top border-bottom">
                {!! nl2br(e($combo->recipe)) !!}
            </div>
            <div class="card-hooter mt-0 pt-0">
                <div class="button-group mt-0 pt-0">
                    <div class="btn mt-0 pt-0">
                        @include("favorite_and_adopt.favorite_button")
                    </div>
                    <div class="btn mt-0 pt-0">
                        @include("favorite_and_adopt.adopt_button")
                    </div>
                    <div class="btn mt-0 pt-0">
                        @include("combos.combos_delete_button", ['user' => $user])
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $combos->links('pagination::bootstrap-4') }}