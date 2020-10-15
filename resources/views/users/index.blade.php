<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
@extends('layouts.app')
@section('content')
 <div class="see">
<h1 class="yuza">ユーザー一覧</h1>


<div class="container">
  @foreach($users as $user)
  <div class="col-md-7 col-md-offset-4">
    <div class="card">
      <div class="jyp">
      <div class="card-body">
        <p class="card-text">
          @if ($user->file)
          <img src=" {{ asset('storage/uploads/' .$user->file)}}" class="rounded-circle" width="100" height="100">
          @else
          <img src=" {{ asset('storage/default.png' .$user->file)}}" class="rounded-circle" width="100" height="100">
          @endif
          ユーザー名: 
          
          {{ $user->name }}</p>
        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">詳細を見る</a>
      </div>
    </div>
    </div>
  </div>
  @endforeach

</div>
</div>

@endsection


   
   

