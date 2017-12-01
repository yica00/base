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
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-1.3.4.css" media="screen">
    <script type="text/javascript" src="/js/jquery.fancybox-1.3.4.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         
        $("a[rel=images_group]").fancybox({
          'transitionIn':'none',
          'transitionOut':'none',
          'titlePosition':'over',
          'titleFormat':function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
          }
        });
      });
    </script>
    <div class="tea_act_one clearfix" id="product_big">
      @foreach( $articles as $article )
      <a rel="images_group" ><img src="{{$article->thumbnail}}" alt=""><div class="txt">{{$article->title}}</div></a>
      @endforeach
    </div>
    <div class="pageJump clearfix">
      <div class="number">
          {{--<span class="disabled"><a href="">首页</a></span>--}}
          {{--<span class="disabled"><a href="">上一页</a></span>--}}
          {{--<span class="disabled"><a href="">下一页</a></span>--}}
          {{--<span class="disabled"><a href="">末页</a></span>--}}
      </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk80">&nbsp;</span>
</div>
<!-- footer -->
@endsection