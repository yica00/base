@extends('front.base')
@section('content')
<!-- bread -->
<div class="w1160 clearfix"> 
  <div class="bread">
    <h2>团队展示</h2>
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
    <div class="mod18">
        <span id="prev" class="btns prev"></span>
        <span id="next" class="btns next"></span>
        <span id="prevTop" class="btns prev"></span>
        <span id="nextTop" class="btns next"></span>
        <div id="picBox" class="picBox">
            <ul class="cf">
                @foreach( $articles as $article )
                <li>
                    <img src="{{$article->thumbnail}}" alt="">
                    <p>{{$article->name}}</p>
                </li>
                @endforeach
            </ul>
        </div>
        <div id="listBox" class="listBox">
            <ul class="cf">
                @foreach( $articles as $article )
                <li><img src="{{$article->thumbnail}}" alt=""></li>
                @endforeach
            </ul>
        </div>
    </div>  
    <script type="text/javascript" src="/js/photo.js"></script>
  </div>
</div>
<!-- footer -->
@endsection('content')