@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="in_tit_all">
    <div class="w1160 clearfix">
      <h2><span>Advanced equipment</span></h2>
      <p><span>先进设备</span></p> 
    </div>
  </div>
</div>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="news_dis">
      <div class="top">
        <h3 class="tit">{{$article->title}}</h3>
      </div>
      <div class="p_style">
        {!! $article->comtent !!}
      </div>
      <div class="backpre clearfix">
        @if( $up_down['1'] )<a href="/equipment/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
        @if( $up_down['2'] ) <a href="/equipment/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
        <a href="/equipment">返回上级目录</a>
      </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk80">&nbsp;</span>
</div>
<!-- footer -->
@endsection