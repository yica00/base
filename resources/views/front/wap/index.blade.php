@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back disnone">&nbsp;</span></a>
    <a href="/wap" class="col-xs-10"><span  class="logo">&nbsp;</span></a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
<!-- banner -->
@section('content')
<div class="banner_box">
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
          @foreach( $sliders as $slider )
            <div class="swiper-slide"><a href="{{$slider->link}}"><img src="{{$slider->thumbnail}}"></a></div>
          @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- item -->
<span class="bk20">&nbsp;</span>
<div class="ho_tit_all">
  <a href="/wap/item">
    <h2>口腔项目</h2>
    <p>Oral program</p>
  </a>
</div>
<span class="bk30">&nbsp;</span>
<ul class="item_icon clearfix">
  @foreach( $items as $k=>$item )
  <li>
    <a href="/wap/item/{{$item->id}}">
      <img src="/images/wap/icon_{{$k+1}}.png" alt="">
      <p>{{$item->title}}</p>
    </a>
  </li>
  @endforeach
</ul>
<span class="bk20">&nbsp;</span>
<div class="swiper-container-2">
  <div class="swiper-wrapper">

    @foreach( $items as $k=>$item )
      <div class="swiper-slide">  
        <a class="ho_it_dis" href="/wap/item/{{$item->id}}">
          <div class="p1">
            <h2>{{$item->title}}</h2>
          </div>
          <div class="p2">
            {{  mb_substr($item->introduce,0,50)."...." }}
          </div>
        </a>
        <a href="/wap/item/{{$item->id}}" class="ho_it_img" >
          <img src="{{$item->thumbnail}}">
        </a>
        <ul class="ho_it_list">
          @foreach( $item->articles as $arti )
          <li><a href="/wap/item_news/{{$arti->id}}">{{$arti->title}}</a></li>
          @endforeach
        </ul>
      </div>
    @endforeach

  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>
<!-- team -->
<span class="bk20">&nbsp;</span>
<div class="ho_tit_all">
  <a href="/wap/team">
    <h2>专家团队</h2>
    <p>Expert team</p>
  </a>
</div>
<span class="bk20">&nbsp;</span>
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
<!-- case -->
<span class="bk20">&nbsp;</span>
<div class="ho_tit_all">
  <a href="/wap/case">
    <h2>经典案例</h2>
    <p>Classic case</p>
  </a>
</div>
<span class="bk20">&nbsp;</span>
<ul class="case_out clearfix">
  @foreach( $cases as $case )
  <li>
    <a href="/wap/case/{{$case->id}}">
      <div class="p1 clearfix">
        <div class="pic fr">
          <img src="{{ $case->ims[1] }}">
          <span>after</span>
        </div>
        <div class="pic fl">
          <img src="{{ $case->ims[0] }}">
          <span>before</span>
        </div>
      </div>
      <div class="bot">
        <div class="p2 clearfix">
          <div class="txt fr">
            <h2>基本信息</h2>
            <p>{{ explode(',',$case->introduce)[0] }}</p>
          </div>
          <img src="/images/wap/case_btn.png" class="fl icon">
        </div>
        <h2 class="p3">治疗方案：{{$case->title}}</h2>
        <p class="p4">{{ explode(',',$case->introduce)[2] }}</p>
      </div>
    </a>
  </li>
  @endforeach
</ul>
<!--  -->
<span class="bk20">&nbsp;</span>
<div class="ho_tit_all">
  <a href="/wap/about/env">
    <h2>环境展示</h2>
    <p>Environmental display</p>
  </a>
</div>
<span class="bk20">&nbsp;</span>
<ul class="env_o_list clearfix">
  @foreach( $envs as $env )
  <li class="col-xs-6">
    <a >
      <div class="pic">
        <img src="{{$env->thumbnail}}">
      </div>
      <div class="txt">{{$env->title}}</div>
    </a>
  </li>
    @endforeach
</ul>
<!--  -->
<span class="bk20">&nbsp;</span>
<div class="ho_tit_all">
  <a href="/wap/equip">
    <h2>先进设备</h2>
    <p>Advanced equipment</p>
  </a>
</div>
<span class="bk20">&nbsp;</span>
<ul class="equip_o_list clearfix">
  @foreach( $equipments as $equipment )
  <li class="col-xs-4">
    <a href="/wap/equip/{{$equipment->id}}">
      <div class="pic">
        <img src="{{$equipment->thumbnail}}">
      </div>
      <div class="txt">{{$equipment->title}}</div>
    </a>
  </li>
  @endforeach
</ul>
<!--  -->
<span class="bk20">&nbsp;</span>
<div class="ho_tit_all">
  <a href="/wap/news">
    <h2>新闻中心</h2>
    <p>news center</p>
  </a>
</div>
<span class="bk20">&nbsp;</span>
<div class="swiper-container-3">
  <div class="swiper-wrapper">
    @foreach( $newss as $news )
      <div class="swiper-slide">
        <a href="/wap/news/{{$news->id}}" class="news_o_box">
          <img src="{{$news->thumbnail}}">
          <div class="txt">
            <h2>{{$news->title}}</h2>
            <div class="dis">
              {{$news->introduce}}
            </div>
          </div>
        </a>
      </div>
      @endforeach
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>
@endsection