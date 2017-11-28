@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="in_tit_all">
    <div class="w1160 clearfix">
      <h2><span>Oral project</span></h2>
      <p><span>口腔项目</span></p> 
    </div>
  </div>
  <ul class="sublist">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 4 )
        @foreach( $cate->articles as $art )
          <li  class="
              @if( $art->link )
          @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) on @endif
          @else
          @if( $art->id == $id ) on @endif
          @endif
                  ">
            <a href="{{$cate->link}}/category/{{$art->id}}">{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <!-- 1 -->
    <div class="item_all_0 clearfix">
      <div class="txt fr">
        <h2>{{$article->title}}</h2>
        <p>{{$article->introduce}}</p>
      </div>
      <div class="pic fl">
        <img src="{{$article->thumbnail}}">
      </div>
    </div>
    <!-- 2 -->
    <div class="case_box_all">
      <!-- 2 -->
      <span class="bk20">&nbsp;</span>
      <div class="box_1">
        <h2 class="bt">项目详情</h2>
        <div class="box">
            {!! $article->comtent !!}
        </div>
      </div>
      <span class="bk20">&nbsp;</span>
      <div class="box_1">
        <h2 class="bt">相关资讯</h2>
        <div class="box">
          <ul class="innew_list">
            @foreach( $article->articles as $arti )
            <li>
              <a href="/item/{{$arti->id}}">
                <h2>{{$arti->title}}</h2>
                <p>{{$arti->introduce}} </p>
              </a>
            </li>
            @endforeach
          </ul>
          {{--<div class="pageJump clearfix">--}}
            {{--<div class="number">--}}
                {{--<span class="disabled"><a href="">首页</a></span>--}}
                {{--<span class="disabled"><a href="">上一页</a></span>--}}
                {{--<span class="disabled"><a href="">下一页</a></span>--}}
                {{--<span class="disabled"><a href="">末页</a></span>--}}
            {{--</div>--}}
          {{--</div>--}}
        </div>
      </div>
      <span class="bk20">&nbsp;</span>
    </div>
    <!-- end -->
  </div>  
  <span class="bk80">&nbsp;</span>
</div>
<!-- footer -->
@endsection