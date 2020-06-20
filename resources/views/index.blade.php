@extends('layouts.app')

@section('content')
<div class="container">

    @foreach($protains as $protain)
    <div class="card">
      <div class="card-header">{{ $protain->user->name}}</div>
      <div class="card-body">部位: {{ $protain->name}}　　種目: {{ $protain->things}}　　重量: {{ $protain->weghts}}　　回数: {{ $protain->how_many}}　　セット数: {{ $protain->sets }}</div>
      <div class="card-body">メモ:  {{ $protain->body }}</div>


      @if(Auth::id() === $protain->user_id)
      <form method="POST" action="{{ route('protains.delete', $protain->id) }}">
      @csrf
      <button type="submit" class="btn btn-danger">削除</button>
      </form>
      @endif
    @endforeach
 </div>
@endsection