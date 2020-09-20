@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
      <div class="col-md-3">
          コンテンツA
          @include('sidebar_links')
      </div>

      <div class="col-md-6 ">
        @include('public_timeline')

        <div class="border border-gray-300 rounded-ig" style="margin-top:50px">
            <div>
              @include('public_seeing')
            </div>
        </div>
      </div>

      <div class="bouder">

    

      <div class="col-md-4 ">
          コンテンツC
      </div>
  </div>
</div>
@endsection