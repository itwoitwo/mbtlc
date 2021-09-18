<ul class="list-unstyled">
    @foreach ($combos as $combo)
        <li class="card mb-3 mt-2">
            <div class="card-header col-md">
                {!! nl2br(e($combo->fighter)) !!} &nbsp; &nbsp; Ver. {!! nl2br(e($combo->version)) !!}
            </div>
            <div class="row card-body py-1">
                <div class="col-md">
                    場所&nbsp;:&nbsp;{!! nl2br(e($combo->place)) !!}
                </div>
                <div class="col-md">
                    始動&nbsp;:&nbsp;{!! nl2br(e($combo->starting)) !!}
                </div>
                <div class="col-md">
                    {!! nl2br(e($combo->counter_hit)) !!}
                </div>
            </div>
            <div class="row card-body py-1">
                <div class="col-md">
                    マジックサーキット&nbsp;:&nbsp;{!! nl2br(e($combo->magic_circuit)) !!}本
                </div>
                @if ($combo->moon != 10)
                <div class="col-md">
                    <i class="fas fa-moon fa-flip-horizontal text-warning"></i>
                    :&nbsp;{!! nl2br(e($combo->moon)) !!}カウント
                </div>
                @else
                <div class="col-md">
                    <i class="fas fa-circle text-danger"></i>
                    :&nbsp;ムーンドライブ
                </div>
                @endif
                <div class="col-md">
                    ダメージ&nbsp;:&nbsp;{!! nl2br(e($combo->damage)) !!}
                </div>
            </div>
            <div class="card-body border-top border-bottom">
                {!! nl2br(e($combo->recipe)) !!}
            </div>
            <div class="card-hooter mt-0 pt-0 border-bottom">
                <div class="button-group mt-0 pt-0">
                    <div class="btn mt-0 pt-0">
                        @include("favorite_and_adopt.adopt_button")
                    </div>
                    <div class="btn mt-0 pt-0">
                        @include("favorite_and_adopt.favorite_button")
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