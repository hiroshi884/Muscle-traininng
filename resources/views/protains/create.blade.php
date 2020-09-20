<div id="man" class="sub-sb">
@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.css') }}"

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-header">記録する</div>

  <form method="post" action="{{route('protains.store')}}">
    @csrf
    <label>部位:
    <select name="name">
    <option value="">---</option>
    <option value="胸">胸</option>
    <option value="肩">肩</option>
    <option value="背中">背中</option>
    <option value="腕">腕</option>
    <option value="腹">腹</option>
    <option value="足">足</option>
    <option value="その他">その他</option>
    </select>
    </label>

    <label>種目：<input name="things"  required type="text" value="" /></label>

    <label>重量:
    <select name="weights">
    <option value="">なし</option>
    <option value="10">10</option>
    <option value="20">20</option>
    <option value="30">30</option>
    <option value="40">40</option>
    <option value="50">50</option>
    <option value="60">60</option>
    <option value="71">70</option>
    <option value="80">80</option>
    <option value="90">90</option>
    <option value="100">100</option>
    </select>
    </label>

   <label>回数：<input name="how_many" required type="number" placeholder="（例）5"></label>
   <label>セット数：<input name="sets"required type="number" placeholder="（例）3"></label><br>
    <label>日付け<input name="date"  required type="date" ></label>
   <div class="row justify-content-center" >メモ：<br>
   <textarea name="body" rows="4" cols="40" required placeholder="今日のトレーニングの感想を記入しよう。
   "></textarea><br></div>

   <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
    <div class="div"><button type="submit">投稿する</button></dv>
    </div>
    </div>
  </form>
 </div>
@endsection
</div><!--/#home -->