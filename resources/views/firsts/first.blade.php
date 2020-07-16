<div id="home" class="big-bg">
@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.css') }}"
@section('content')

 <div class="head"> <a href="{{ route('register') }}" >新規登録</a></div>
<div style="text-align: center;margin-top:180px">
  <h1 class="g">We can Make Your Parfect Body</h1>
  <p class="k">自分の理想的な体に近づけませんか？！みんなで楽しくフィットネスを記録しよう</p>
  <a class="button" href="{{ route('login') }}" >ログインする</a>
  <div>

  
@endsection
</div><!--/#home -->