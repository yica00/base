@extends('front.base')
@section('content')
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
        <li class=" @if( $art->id == $article->pid ) on @endif">
          <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
        </li>
      @endforeach
    @endif
  @endforeach
</ul>
<!--  -->
<!--  -->
<div class="txt_demo_2">
  <div class="w1160 clearfix">
    <div class="bt">{{$article->title}}</div>
    <div class="dis">
      {!! $article->comtent !!}
    </div>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection