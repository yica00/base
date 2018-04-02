@extends('front.base')
@section('content')
  <link rel="stylesheet" href="/css/paginate.css">
<!-- bread -->
<div class="w1160 clearfix"> 
  <div class="bread">
    <h2>产品中心</h2>
    <p class="p1">我们以科技和自然能源为起点，通过产品与服务，让阳光更灿烂，让空气更清新，让环境更健康。</p>
    <p class="p2">product center</p>
  </div>
  <!-- sub-menu -->
  <ul class="sub-menu-con clearfix">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 4 )
        @foreach( $cate->articles as $art )
          <li class=" @if( $art->id == $id ) active @endif">
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
    <ul class="prolist clearfix">
      @foreach( $articles as $article )
      <li>
        <a href="/product/{{$article->id}}">
          <div class="pic"><img src="{{$article->thumbnail}}" /></div>
          <div class="txt">{{$article->title}}</div>
        </a>
      </li>
      @endforeach
    </ul>

    {{$articles->links()}}
  </div>
</div>
<!-- footer -->
@endsection('content')