@extends('front.base')
@section('content')
<!-- banner -->
  
<div class="bread">
  <span class="bk30">&nbsp;</span>
  <h2>learning environment</h2>
  <p class="p1">学习环境</p>
  <p class="p2">&nbsp;</p>
</div>
<ul class="sublist">
    @foreach( session('header_nav') as $cate )
        @if( $cate->id == 7 )
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
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen">
    <script type="text/javascript" src="js/jquery.fancybox-1.3.4.js"></script>
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
      <li>
          <a rel="images_group" href="images/hj1.jpg">
            <div class="pic"><img src="images/hj3.jpg"></div>
            <div class="txt">环境名称</div>
        </a>
      </li>
      <li>
          <a rel="images_group" href="images/hj1.jpg">
            <div class="pic"><img src="images/hj3.jpg"></div>
            <div class="txt">环境名称</div>
        </a>
      </li>
      <li>
          <a rel="images_group" href="images/hj1.jpg">
            <div class="pic"><img src="images/hj3.jpg"></div>
            <div class="txt">环境名称</div>
        </a>
      </li>
      <li>
          <a rel="images_group" href="images/hj1.jpg">
            <div class="pic"><img src="images/hj3.jpg"></div>
            <div class="txt">环境名称</div>
        </a>
      </li>
      <li>
          <a rel="images_group" href="images/hj1.jpg">
            <div class="pic"><img src="images/hj3.jpg"></div>
            <div class="txt">环境名称</div>
        </a>
      </li>
      <li>
          <a rel="images_group" href="images/hj1.jpg">
            <div class="pic"><img src="images/hj3.jpg"></div>
            <div class="txt">环境名称</div>
        </a>
      </li>
      <li>
          <a rel="images_group" href="images/hj1.jpg">
            <div class="pic"><img src="images/hj3.jpg"></div>
            <div class="txt">环境名称</div>
        </a>
      </li>
      <li>
          <a rel="images_group" href="images/hj1.jpg">
            <div class="pic"><img src="images/hj3.jpg"></div>
            <div class="txt">环境名称</div>
        </a>
      </li>
    </ul>
    <div class="pageJump clearfix">
      <div class="number">
          <span class="disabled"><a href="">上一页</a></span>
          <span class="disabled"><a href="">1</a></span>
          <span class="disabled"><a href="">2</a></span>
          <span class="disabled"><a href="">3</a></span>
          <span class="disabled"><a href="">下一页</a></span>
      </div>
    </div>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection