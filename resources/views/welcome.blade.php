@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                    </div>
                </div>
            </aside>
        </div>
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item inline-block">An item</li>
            <li class="list-group-item inline-block">A second item</li>
            <li class="list-group-item">A third item</li>
        </ul>
        <div class="container">
            <div class="row">
              <div class="col-sm">
                One of three columns
              </div>
              <div class="col-sm">
                One of three columns
              </div>
              <div class="col-sm">
                One of three columns
              </div>
            </div>
          </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the MBTLCombos</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection