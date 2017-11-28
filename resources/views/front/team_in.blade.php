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
    <div class="team_in_dis clearfix">
      <div class="txt fr">
        <h2>{{$team->name}}<span>{{$team->title}}</span></h2>
        <h3>临床经验：<b>{{$team->work_age}}年</b></h3>
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
                  <a href="/item">{{$honor}}</a>
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
      <div class="pic fl"><img src="{{$team->photo}}"></div>
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="backpre clearfix">      
      {{--<a href="team_in.html" rel="next">上一篇</a>--}}
      {{--<a href="team_in.html" rel="prev">下一篇</a>--}}
      {{--<a href="team.html">返回上级目录</a>--}}
    </div>
    <!-- end -->
  </div>  
  <span class="bk80">&nbsp;</span>
</div>
<!-- footer -->
@endsection