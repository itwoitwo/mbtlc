@extends('layouts.app')

@section('content')
<div class="col-md-12">
    @include('users.navtabs', ['user' => $user])
    @include('combos.combos', ['combos' => $adopts])
    @include('combos.combo_annotation')
</div>
@endsection