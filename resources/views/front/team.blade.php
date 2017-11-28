@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="in_tit_all">
    <div class="w1160 clearfix">
      <h2><span>Expert team</span></h2>
      <p><span>专家团队</span></p> 
    </div>
  </div>

</div>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="team_in_list clearfix">
      @foreach( $teams as $team )
      <li>
        <a href="/team/{{$team->id}}">
          <img src="{{$team->photo}}">
          <div class="txt">
            <h2>{{$team->name}}</h2>
            <p>{{$team->title}}</p>
          </div>
        </a>
      </li>
      @endforeach
    </ul>
    <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="/team">首页</a></span>
          <span class="disabled"><a href="/team?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/team?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/team?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk80">&nbsp;</span>
</div>
<!-- footer -->
@endsection