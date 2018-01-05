@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap/team" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">专家团队</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
<!-- banner -->
@section('content')
<!-- start -->
<div class="team_in_dis clearfix">
  <div class="pic"><img src="{{ $team->photo }}"></div>
  <div class="txt">
    <h2>{{ $team->name }}</h2>
    <p class="pt">{{ $team->title }}</p>
    <h3>临床经验：<b>{{ $team->work_age }}年</b></h3>
    @foreach( explode(',',$team->honor) as $honor )
      <p class="p1"><span>★</span>{{$honor}}</p>
    @endforeach
    <span class="bk20">&nbsp;</span>
    <dl>
        <dt>擅长项目</dt>
        <dd>
          <ul class="team_ser clearfix">
            @foreach( explode(',',$team->good_at) as $honor )
              <li>
                <a href="/wap/item">{{$honor}}</a>
              </li>
            @endforeach
          </ul>
        </dd>
    </dl>
    <dl>
      <dt>医师简介</dt>
      <dd>{{$team->introduce}}</dd>
    </dl>
  </div>
  
</div>
<!-- end -->
@endsection