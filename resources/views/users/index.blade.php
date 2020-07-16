<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layouts.app')
@section('content')
 <div class="see">
<h1 class="yuza">ユーザー一覧</h1>

<div class="container">
<div class=" row justify-content-center">
  @foreach($users as $user)
  <div class="col-md-6">
    <div class="card">
      <div class="jyp">
      <div class="card-body">
        <p class="card-text">ユーザー名: {{ $user->name }}</p>
        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">詳細を見る</a>
      </div>
    </div>
    </div>
  </div>
  @endforeach
</div>
</div>
</div>

@endsection


   
   

