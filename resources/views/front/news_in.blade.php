@extends('front.base')
@section('content')
<!-- banner -->
  
<div class="bread">
  <span class="bk30">&nbsp;</span>
  <h2>Preferential activities</h2>
  <p class="p1">优惠活动</p>
  <p class="p2">&nbsp;</p>
</div>
<!--  -->
<div class="txt_demo_1">
  <div class="w1160 clearfix">
    <div class="txt_model_4">
      <div class="top">
        <h2 class="tit">{{$article->title}}</h2>
        <p class="protime">上传时间：<em>{{$article->created_at}}</em> <span class="pL10">来源：<i>慧尚教育</i></span></p>
      </div>
      <div class="p_style">
        {!! $article->comtent !!}
      </div>
      <div class="backpre clearfix">
        @if( $up_down['1'] )<a href="/news/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
        @if( $up_down['2'] ) <a href="/news/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
        <a href="/news/category/{{$pid}}">返回上级目录</a>
      </div>
    </div>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection