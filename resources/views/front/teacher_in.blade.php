@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <h2>师资团队</h2>
</div>
<!-- wap_box -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- star -->
    <div class="team_dis clearfix">
      <div class="pic fl">
        <img src="{{$team->photo}}">
      </div>
      <div class="txt fr">
        <h2 class="clearfix">{{$team->name}}</h2>
        <dl class="clearfix">
          <dt>年级</dt>
          <dd>{{$team->title}}</dd>
        </dl>
        <dl class="clearfix">
          <dt>科目</dt>
          <dd>{{$team->honor}}</dd>
        </dl>
        <dl class="clearfix">
          <dt>教学理念</dt>
          <dd>{{$team->good_at}}</dd>
        </dl>
        <dl class="big clearfix">
          <dt>简介</dt>
          <dd>
            {{$team->introduce}}
          </dd>
        </dl>
      </div>
  </div>
    <!-- end -->
  </div>
</div>


<!-- footer -->
@endsection