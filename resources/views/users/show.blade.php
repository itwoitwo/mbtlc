@extends('layouts.app')

@section('content')
<div class="container low">
    <aside class="col-md-2">
        <div class="card">
            <div class="card-body">
                {{ $user->name }}
            </div>
        </div>
    </aside>
    <div class="accordion col-md" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <a class="btn btn-link" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseOne">
                自作コンボ
                </a>
            </div>
            <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parament="#accordionExample">
                <div class="card-body">
                    @if (count($combos) > 0)
                        @include('combos.combos', ['combos' => $combos])
                    @endif
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <a class="btn btn-link collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                採用コンボ
                </a>
            </div>
            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parament="#accordionExample">
                <div class="card-body">
                    @if (count($adopts) > 0)
                        @include('combos.combos', ['combos' => $adopts])
                    @endif
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <a class="btn btn-link collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                お気に入り
                </a>
            </div>
            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parament="#accordionExample">
                <div class="card-body">
                    @if (count($favorites) > 0)
                        @include('combos.combos', ['combos' => $favorites])
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection