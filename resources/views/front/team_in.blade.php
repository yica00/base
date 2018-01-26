@extends('front.base')
@section('content')
<!-- banner -->
  
<div class="bread">
  <span class="bk30">&nbsp;</span>
  <h2>Famous teacher team</h2>
  <p class="p1">名师团队</p>
  <p class="p2">&nbsp;</p>
</div>
<!--  -->
<div class="txt_demo_3">
  <div class="w1160 clearfix">
    <div class="pic">
      <img src="{{$team->thumbnail}}">
    </div>
    <div class="bt">
      <h2>{{$team->title}}</h2>
      <p>{{$team->link}}</p>
    </div>
    <div class="nl">
      <h2>教学理念</h2>
      <p>{{$team->introduce}}</p>
    </div>
    <div class="dis">
      {!! $team->comtent !!}
    </div>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection