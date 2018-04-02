@extends('front.base')
@section('content')
  <link rel="stylesheet" href="/css/swiper.min.css">
  <link rel="stylesheet" href="/css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="/css/touchTouch.css">


  <!-- bread -->
<div class="w1160 clearfix"> 
  <div class="bread">
    <h2>仓区环境</h2>
    <p class="p1">我们以科技和自然能源为起点，通过产品与服务，让阳光更灿烂，让空气更清新，让环境更健康。</p>
    <p class="p2">about us</p>
  </div>
  <!-- sub-menu -->
  <ul class="sub-menu-con clearfix">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 2 )
        @foreach( $cate->articles as $art )
          <li class=" @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) active @endif">
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<!-- 内容 -->
<div class="w1160 clearfix">
  <div class="txt_demo_1">
    <div class="exc1 clearfix">
      @foreach( $articles as $article )
      <a href="{{$article->thumbnail}}"><img src="{{$article->thumbnail}}"><span>{{$article->title}}</span></a>
      @endforeach
    </div>
    <script src="/js/touchTouch.jquery.js"></script>
    <script>
      $(function(){
          $(".exc1 a").touchTouch();
          $(".exc2 .list").each(function(){
              $(this).find("a").touchTouch();
          });
      });
    </script>
  </div>
</div>
<!-- footer -->
@endsection('content')