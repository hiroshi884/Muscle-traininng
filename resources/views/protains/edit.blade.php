<div id="man" class="sub-sb">
  @extends('layouts.app')
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"
  
  @section('content')
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
          
          @include('sidebar_links')
      </div>
  
    <div class="row justify-content-center">
      <div class="col-md-9">
        
        
        <div class="card">
          <div class="card-header">
            <img src=" {{ asset('storage/uploads/' .Auth::user()['file'])}}" class="rounded-circle" width="50" height="50">
            記録する
          </div>
         
  
    <form method="POST" action="{{route('protains.update',$protain->id)}}">
      @csrf
      <label>部位:
      <select name="name">
        
      <option value="">{{ $protain->name}}</option>
      <option value="胸">胸</option>
      <option value="肩">肩</option>
      <option value="背中">背中</option>
      <option value="腕">腕</option>
      <option value="腹">腹</option>
      <option value="足">足</option>
      <option value="その他">その他</option>
      </select>
      </label>
  
      <label>種目：<input name="things"  required type="text" value="{{ $protain->things}}" /></label>
  
      <label>重量:
      <select name="weights">
      <option value="">{{ $protain->weghts}}</option>
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
  
     <label>回数：<input name="how_many" required type="number" value="{{ $protain->how_many}}"></label>
     <label>セット数：<input name="sets"required type="number" value="{{ $protain->sets }}"></label>
      <label>日付け<input name="date"  required type="date" value="{{$protain->date}}"></label>
     <div class="row justify-content-center">メモ：<br>
     <textarea name="body" rows="4" cols="40" required >{{$protain->body}}</textarea><br></div>
  
     <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
      <div class="div"><button type="submit">更新する</button></dv>
      </div>
      </div>
    </form>
   </div>
   
  
  </div><!--/#home -->
  </div>
  </div>
  
  
  @endsection
  
  
  