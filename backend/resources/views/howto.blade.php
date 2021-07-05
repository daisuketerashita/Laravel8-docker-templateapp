@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/howto.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="howto-container">
    <div class="howto-innner">
        <h2>①『定型文を作成する』ボタンを押す</h2>
        <img src="{{ asset('images/01_howto.png') }}" alt="">
        <h2>②『タイトル』と『定型文』を登録する</h2>
        <img src="{{ asset('images/02_howto.png') }}" alt="">
        <h2>③『COPY』ボタンを押すと登録した定型文をコピーできる</h2>
        <img src="{{ asset('images/03_howto.png') }}" alt="">
    </div><!-- howto-innner -->
    <a href="{{ route('index') }}" class='btn btn-info btn-back'>さっそく使ってみる</a>
</div><!-- howto-container -->
@endsection