
@extends('layouts.app')
<div style="background-color: #0bd">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
@section('content')
  <div class="container">

    @foreach($user->protains as $protain)
    <div class="card">
      <div class="card-header">
        @if ($user->file)
        <img src=" {{ asset('storage/uploads/' .$user->file)}}" class="rounded-circle" width="50" height="50">
        @else
        <img src=" {{ asset('storage/default.png' .$user->file)}}" class="rounded-circle" width="50" height="50">
        @endif
        {{ $user->name}}
        
        @if(Auth::id() === $protain->user_id )
        <div class="dropdown">
        <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <i class="fa fa-ellipsis-h" style="float:right;" ></i></a>
      
        <div  class="dropdown-menu" style="right:0;" aria-labelledby="navbarDropdown"  >
          <a href="{{route('protains.edit', $protain->id) }}" class="dropdown-item">編集</a>
          
          <form method="POST" action="{{ route('protains.delete', $protain->id) }}">
          @csrf
         <button type="submit" class="btn btn-danger">削除</button>
          </form>
          
          
        </div>
        </div>
        @endif</div>
    <div class="card-body">部位: {{ $protain->name}}　　種目: {{ $protain->things}}　　重量: {{ $protain->weghts}}　　回数: {{ $protain->how_many}}　　セット数: {{ $protain->sets }}　　日付: {{$protain->date}}</div>
      <div class="card-body">メモ:  {{ $protain->body }}</div>

      
      
      
      <div class="card-footer py-1 d-flex justify-content-end bg-white" >
        

        <p class="card-text" ><a href="{{ route('protains.show', $protain->id) }}"><i class="fa fa-comment-o" style="font-size: 20px;"></i></a>
        <p class="mb-0 text-secondary">{{ count($protain->replies) }}</p>
    
      <div style="margin-left: 20px">
        @if($protain->is_liked_by_auth_user())
          <a href="{{ route('protains.unlike', ['id' => $protain->id]) }}" ><i class="fa fa-heart" style="color:red;font-size:30px"></i></a>
        @else
          <a href="{{ route('protains.like', ['id' => $protain->id]) }}" ><i class="fa fa-heart-o" style="font-size:20px;"></i> </a>
        @endif
      </div>
      <p class="mb-0 text-secondary">{{ count($protain->likes) }}</p>
  </div>
    

    @endforeach
      @forelse($user->protains as $protain)
          @empty
            投稿がございません。
   @endforelse
    </div>
  </div>
@endsection
</div>

