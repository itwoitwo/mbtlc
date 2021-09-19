@extends('layouts.app')

@section('content')
<div class="low col-md card-group">
    <div class="col-md-3">
        @include('users.card')
    </div>
    <div class="col-md">
        @include('users.navtabs', ['user' => $user])
        @include('combos.combos', ['combos' => $combos])
        {!! Form::open(['method' => 'get','route' => ['mycombos.mycombos_serch', $user->id]]) !!}
        {!!Form::hidden('user_id', $user->id) !!}
        <div class="form-group">
            <div class="form-group row">
                <div class="col-md-6 mb-2">
                    {!! Form::select('キャラクター', [
                        '' => 'キャラクターを選択',
                        '遠野志貴' => '遠野志貴',
                        'アルクェイド' => 'アルクェイド・ブリュンスタッド',
                        '遠野秋葉' => '遠野秋葉',
                        'シエル' => 'シエル',
                        '翡翠' => '翡翠',
                        '琥珀' => '琥珀',
                        '軋間紅摩' => '軋間紅摩',
                        '有馬都古' => '有馬都古',
                        'ノエル' => 'ノエル',
                        'ロア' => 'ミハイル・ロア・バルダムヨォン',
                        'ヴローヴ' => 'ヴローヴ・アルハンゲリ',
                        ],'' ,['class' => 'form-control']) !!}
                </div>
                <div class="col-md-3 mb-2">
                    {!! Form::select('version', [
                        '' => 'バージョン指定無し',
                        '1.00' => 'Ver. 1.00',
                        '1.01' => 'Ver. 1.01',
                        ],'' ,['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-3 mb-2">
                    {!! Form::select('状況', [
                        '' => 'どこでも',
                        '中央限定' => '中央限定',
                        '端' => '端限定',
                        '端背負い限定' => '端背負い限定',
                        'その他' => 'その他',
                        ],'' ,['class' => 'form-control']) !!}
                </div>                
                <div class="col-md-3 mb-2">
                    {!! Form::select('始動技', [
                        '' => '始動技を選択',
                        'A系統' => 'A系統',
                        'B系統' => 'B系統',
                        'C系統' => 'C系統',
                        '必殺技' => '必殺技',
                        'その他' => 'その他',
                        ],'' ,['class' => 'form-control']) !!}
                </div>
                <div class="col-md-3 mb-2">
                    {!! Form::select('counter_hit', [
                        '' => 'ノーマルヒット',
                        'カウンター限定' => 'カウンター限定',
                        'フェイタル限定' => 'フェイタル限定',
                        ],'' ,['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-3 mb-2">
                    {!! Form::label('magic_circuit', 'マジックサーキット') !!}
                    {!! Form::select('magic_circuit', [
                        '' => 'ノーゲージ可',
                        1 => '1本',
                        2 => '2本',
                        3 => '3本',
                        4 => '4本',
                        ],'' ,['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-md-3 mb-2">
                    <i class="fas fa-moon fa-flip-horizontal text-warning"></i> {!! Form::label('moon', 'ムーンアイコン') !!}
                    {!! Form::select('moon', [
                        '' => 'ノーゲージ可',
                        1 => '1カウント',
                        2 => '2カウント',
                        3 => '3カウント',
                        10 => 'ムーンドライブ発動',
                        ],'' ,['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-md-3 mb-2">
                    {!! Form::label('serch', '　') !!}
                    {!! Form::submit('検索する', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
        @include('combos.combo_annotation')
    </div>
</div>
@endsection