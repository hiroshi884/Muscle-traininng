
@extends('layouts.app')

@section('content')
<div style=text-align:center;font-size:30px>
<a href="http://127.0.0.1:8000/calendars/{{$lastMonth}}">&lt;</a>
<span>{{$month}}</span>
<a href="http://127.0.0.1:8000/calendars/{{$nextMonth}}">&gt;</a>
</div>
<table class="table table-bordered" style="width:unset;margin:auto">
  <colgroup span="7" style="height:50px;" >
      <col span="1" style="background-color:#FF3333;"/>
      <col span="1" style="background-color:white;"/> 
      <col span="1" style="background-color:white;"/> 
      <col span="1" style="background-color:white;"/> 
      <col span="1" style="background-color:white;"/> 
      <col span="1" style="background-color:white;"/> 
      <col span="1" style="background-color:#136FFF;"/> 
</colgroup>
  <thead>
    <tr>
      <th style="width:60px">日</th>
      <th>月</th>
      <th>火</th>
      <th>水</th>
      <th>木</th>
      <th>金</th>
      <th>土</th>
    </tr>
  </thead>
   <tbody>
    
    @foreach ($weeks as $week)
 
 <tr>  
<div>
 
   
    @foreach($week as $date => $day)
   <td style="width: 60px;">
   {{$day}}
   
    @foreach($protains->get($date) ?? [] as $protain)
      {{$protain->name}}
    @endforeach
  </td>

  @endforeach

</div>
</tr>
@endforeach

   </tbody>
</table>

@endsection
