@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <h2>优惠活动</h2>
</div>
<!-- wap_box -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- star -->
    <div class="txt_model_3">
      <div class="top">
        <h2 class="tit">{{$article->title}}</h2>
        <p class="protime">上传时间：<em>{{$article->created_at}}</em> <span class="pL10">来源：<i>名师教育</i></span></p>
      </div>
      <div class="p_style">
        {!! $article->comtent !!}
      </div>
      <div class="backpre clearfix">
        @if( $up_down['1'] )<a href="/news/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
        @if( $up_down['2'] ) <a href="/news/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
        <a href="/news">返回上级目录</a>
    </div>
    <!-- end -->
  </div>
</div>

  <span class="bk20">&nbsp;</span>
<!-- footer -->
@endsection