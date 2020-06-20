<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layouts.app')

@section('content')
 
<h1 class="yuza">ユーザー一覧</h1>

<div class="container">
<div class=" row justify-content-center">
  @foreach($users as $user)
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text">ユーザー名: {{ $user->name }}</p>
        <a href="#" class="btn btn-primary">詳細を見る</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>


@endsection


   
   

