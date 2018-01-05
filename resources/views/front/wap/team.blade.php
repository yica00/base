@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">专家团队</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>

@endsection
<!-- banner -->
@section('content')
<!-- start -->
<ul class="team_in_list clearfix">
  @foreach( $teams as $team )
  <li>
    <a href="/wap/team/{{$team->id}}">
      <img src="{{$team->photo}}">
      <div class="txt">
        <h2>{{$team->name}}</h2>
        <p>{{$team->title}}</p>
      </div>
    </a>
  </li>
    @endforeach
</ul>
{{$teams->links()}}
<!-- end -->
@endsection