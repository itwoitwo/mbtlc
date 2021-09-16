@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'combos.store']) !!}
    <div class="form-group">
        {!! Form::label('fighter', 'キャラクター') !!}
        {!! Form::textarea('fighter', old('fighter'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::label('damage', 'ダメージ') !!}
        {!! Form::textarea('damage', old('damage'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::label('version', 'バージョン') !!}
        {!! Form::textarea('version', old('version'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::label('starting', '始動技') !!}
        {!! Form::textarea('starting', old('starting'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::label('place', '場所') !!}
        {!! Form::textarea('place', old('place'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::label('magic_circuit', 'マジックサーキット') !!}
        {!! Form::textarea('magic_circuit', old('magic_circuit'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::label('moon', 'ムーンアイコン') !!}
        {!! Form::textarea('moon', old('moon'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::label('recipe', 'コンボレシピ') !!}
        {!! Form::textarea('recipe', old('recipe'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::label('explain', '備考') !!}
        {!! Form::textarea('explain', old('explain'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::label('video', '動画URL') !!}
        {!! Form::textarea('video', old('video'), ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}
@endsection