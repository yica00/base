@extends('front.base')
@section('content')
<!-- bread -->
<div class="w1160 clearfix"> 
  <div class="bread">
    <h2>发展历程</h2>
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
    <ul class="hislist">
      @foreach( $articles as $article )
      <li>
        <dl>
          <dt>{{$article->title}}</dt>
          <dd class="clearfix">
            {!! $article->comtent !!}
          </dd>
        </dl>
      </li>
      @endforeach
    </ul>
  </div>
</div>
<!-- footer -->
@endsection('content')