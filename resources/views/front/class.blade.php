@extends('front.base')
@section('content')
  <link rel="stylesheet" href="/css/paginate.css">
<!-- banner -->
  
<div class="bread">
  <span class="bk30">&nbsp;</span>
  <h2>Course Center</h2>
  <p class="p1">课程中心</p>
  <p class="p2">&nbsp;</p>
</div>
<ul class="sublist">
  @foreach( session('header_nav') as $cate )
    @if( $cate->id == 3 )
      @foreach( $cate->articles as $art )
        <li class=" @if( $art->id == $id ) on @endif">
          <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
        </li>
      @endforeach
        <li>
          <a href="/class/jpkc/jzkc" >四大精准课程</a>
        </li>
    @endif
  @endforeach
</ul>
<!--  -->
<div class="txt_demo_1">
  <div class="w1160 clearfix">
    <ul class="class_list clearfix">
      @foreach( $articles as $article )
      <li>
        <a href="/class/{{$article->id}}">
          <div class="p1">
            {{--初升高（初三下学期）--}}
          </div>
          <div class="p2">
            {{$article->title}}
          </div>
          <div class="p3">
            {{$article->introduce}}
          </div>
          <span class="btns">了解详情</span>
        </a>
      </li>
      @endforeach
    </ul>
    {{$articles->links()}}
    {{--<div class="pageJump clearfix">--}}
      {{--<div class="number">--}}
          {{--<span class="disabled"><a href="">上一页</a></span>--}}
          {{--<span class="disabled"><a href="">1</a></span>--}}
          {{--<span class="disabled"><a href="">2</a></span>--}}
          {{--<span class="disabled"><a href="">3</a></span>--}}
          {{--<span class="disabled"><a href="">下一页</a></span>--}}
      {{--</div>--}}
    {{--</div>--}}
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection