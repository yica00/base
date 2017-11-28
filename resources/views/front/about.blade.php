@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="in_tit_all">
    <div class="w1160 clearfix">
      <h2><span>Brand center</span></h2>
      <p><span>品牌中心</span></p> 
    </div>
  </div>
  <ul class="sublist">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 2 )
        @foreach( $cate->articles as $art )
          <li  class="
              @if( $art->link )
          @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) on @endif
          @else
          @if( $art->id == $pid ) on @endif
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
    {!! $article->comtent !!}
    <!-- end -->
  </div>  
  <span class="bk80">&nbsp;</span>
</div>
<!-- footer -->
@endsection