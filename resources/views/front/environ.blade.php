@extends('front.base')
@section('content')
    <link rel="stylesheet" href="/css/paginate.css">
<!-- banner -->
  
<div class="bread">
  <span class="bk30">&nbsp;</span>
  <h2>learning environment</h2>
  <p class="p1">学习环境</p>
  <p class="p2">&nbsp;</p>
</div>
<ul class="sublist">
    @foreach( session('header_nav') as $cate )
        @if( $cate->id == 5 )
            @foreach( $cate->articles as $art )
                <li class=" @if( $art->id == $id ) on @endif">
                    <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
                </li>
            @endforeach
        @endif
    @endforeach
</ul>
<!--  -->
<div class="txt_demo_1">
  <div class="w1160 clearfix">
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
    <ul class="env_list clearfix">
        @foreach( $articles as $article )
      <li>
          <a rel="images_group" href="{{$article->thumbnail}}">
            <div class="pic"><img src="{{$article->thumbnail}}"></div>
            <div class="txt">{{$article->title}}</div>
        </a>
      </li>
        @endforeach

    </ul>


      {{$articles->links()}}
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection