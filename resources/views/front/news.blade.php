@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="in_tit_all">
    <div class="w1160 clearfix">
      <h2><span>News center</span></h2>
      <p><span>新闻中心</span></p> 
    </div>
  </div>
  <ul class="sublist">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 3 )
        @foreach( $cate->articles as $art )
          <li  class="
              @if( $art->link )
          @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) on @endif
          @else
          @if( $art->id == $id ) on @endif
          @endif
                  ">
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif">{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="learn_list clearfix">
      @foreach( $articles as $article )
        <li>
          <a href="/news/{{$article->id}}">
            <span class="pic"><img src="{{$article->thumbnail}}" alt="{{$article->title}}"></span>
            <div class="txt">
              <h2>{{$article->title}}</h2>
              <p>{{$article->introduce}}</p>
              <span class="btns">more +</span>
            </div>
          </a>
        </li>
      @endforeach
    </ul>
    <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="/news/category/{{$id}}">首页</a></span>
          <span class="disabled"><a href="/news/category/{{$id}}?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/news/category/{{$id}}?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/news/category/{{$id}}?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
    <!-- end -->
  </div>
  <span class="bk80">&nbsp;</span>
</div>
<!-- footer -->
@endsection