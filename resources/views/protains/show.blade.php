@extends('layouts.app')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
      @if ($protain->user->file)
        <img src=" {{ asset('storage/uploads/' .$protain->user->file)}}" class="rounded-circle" width="50" height="50">
        @else
        <img src=" {{ asset('storage/default.png' .$protain->user->file)}}" class="rounded-circle" width="50" height="50">
        @endif
      
      {{ $protain->user->name }}
      
    </div>
    <div class="card-body">
      <div class="card-body">部位: {{ $protain->name}}　　種目: {{ $protain->things}}　　重量: {{ $protain->weghts}}　　回数: {{ $protain->how_many}}　　セット数: {{ $protain->sets }}      日付:{{$protain->date}}</div>
      <div class="card-body">メモ:  {{ $protain->body }}</div>
    </div>
  </div>
</div>

  <div class="container mt-4">
    @foreach($protain->replies as $reply)
      <div class="card">
        <div class="card-header">
          @if ($reply->user->file)
        <img src=" {{ asset('storage/uploads/' .$reply->user->file)}}" class="rounded-circle" width="50" height="50">
        @else
        <img src=" {{ asset('storage/default.png' .$reply->user->file)}}" class="rounded-circle" width="50" height="50">
        @endif
          {{ $reply->user->name }}

          @if(Auth::id() == $reply->user_id )
          <div class="dropdown">
          <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          <i class="fa fa-ellipsis-h" style="float:right;" ></i></a>
        
          <div  class="dropdown-menu" style="right:0;" aria-labelledby="navbarDropdown"  >
            
            <form method="POST" action="{{ route('protains.delet', $reply->id) }}">
            @csrf
           <button type="submit" class="btn btn-danger">削除</button>
            </form>
            
            
          </div>
          </div>
          @endif
          
          
        </div>
        <div class="card-body">
          <p class="card-text">{{ $reply->body }}</p>
        </div>
      </div>
    @endforeach

    @auth
      <div class="card">
        <div class="card-header">
          <img src=" {{ asset('storage/uploads/' .Auth::user()['file'])}}" class="rounded-circle" width="50" height="50">
          {{ Auth::user()->name }}</div>
          <div class="card-body">
            <form method="POST" action="{{ route('protains.reply', $protain->id) }}">
              @csrf
              <div class="form-group">
                <textarea name="body" class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">返信する</button>
            </form>
          </div>
        </div>
      </div>
    @endauth
  </div>
@endsection