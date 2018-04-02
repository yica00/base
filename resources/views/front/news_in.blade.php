@extends('front.base')
@section('content')
<!-- bread -->
<div class="w1160 clearfix"> 
  <div class="bread">
    <h2>新闻中心</h2>
    <p class="p1">我们以科技和自然能源为起点，通过产品与服务，让阳光更灿烂，让空气更清新，让环境更健康。</p>
    <p class="p2">news case</p>
  </div>
  <!-- sub-menu -->
  <ul class="sub-menu-con clearfix">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 6 )
        @foreach( $cate->articles as $art )
          <li class=" @if( $art->id == $pid ) active @endif">
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<!-- 内容 -->
<div class="w1160 clearfix">
  <div class="txt_demo_3">
    <div class="top">
      <div class="tit">{{$article->title}}</div>
      <div class="time">发布时间：{{$article->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布者：迪歌电器</div>
    </div>
    <div class="dis">
      {!! $article->comtent !!}
    </div>
    <div class="backpre clearfix">
      @if( $up_down['1'] )<a href="/news/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
      @if( $up_down['2'] ) <a href="/news/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
      <a href="/news">返回上级目录</a>
    </div>
  </div>
</div>
<!-- footer -->
@endsection('content')