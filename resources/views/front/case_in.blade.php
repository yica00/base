@extends('front.base')
@section('content')
<!-- bread -->
<div class="w1160 clearfix"> 
  <div class="bread">
    <h2>工程案例</h2>
    <p class="p1">我们以科技和自然能源为起点，通过产品与服务，让阳光更灿烂，让空气更清新，让环境更健康。</p>
    <p class="p2">Engineering case</p>
  </div>
</div>
<!-- 内容 -->
<div class="w1160 clearfix">
  <div class="txt_demo_2">
    <div class="tit">{{$article->title}}</div>
    <div class="box">
      <div class="bt"><span>项目简介</span></div>
      <div class="dis">
        {!! $article->comtent !!}
      </div>
    </div>
    {{--<ul class="exc1_case clearfix">--}}
      {{--<li><a href="images/case1.jpg"><img src="images/case1.jpg" alt="" /></a></li>--}}
      {{--<li><a href="images/case2.jpg"><img src="images/case2.jpg" alt="" /></a></li>--}}
      {{--<li><a href="images/case3.jpg"><img src="images/case3.jpg" alt="" /></a></li>--}}
      {{--<li><a href="images/case4.jpg"><img src="images/case4.jpg" alt="" /></a></li>--}}
      {{--<li><a href="images/case5.jpg"><img src="images/case5.jpg" alt="" /></a></li>--}}
      {{--<li><a href="images/case6.jpg"><img src="images/case6.jpg" alt="" /></a></li>--}}
    {{--</ul>--}}
    {{--<script src="js/touchTouch.jquery.js"></script>--}}
    {{--<script>--}}
      {{--$(function(){--}}
          {{--$(".exc1_case a").touchTouch();--}}
          {{--$(".exc2 .list").each(function(){--}}
              {{--$(this).find("a").touchTouch();--}}
          {{--});--}}
      {{--});--}}
    {{--</script>--}}
    <div class="backpre clearfix">
      @if( $up_down['1'] )<a href="/case/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
      @if( $up_down['2'] ) <a href="/case/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
      <a href="/cases">返回上级目录</a>
    </div>
  </div>
</div>
<!-- footer -->
@endsection('content')