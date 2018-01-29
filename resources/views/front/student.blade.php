@extends('front.base')
@section('content')
  <link rel="stylesheet" href="/css/paginate.css">
<!-- banner -->
  
<div class="bread">
  <span class="bk30">&nbsp;</span>
  <h2>about us</h2>
  <p class="p1">关于慧尚</p>
  <p class="p2">&nbsp;</p>
</div>
<ul class="sublist">
  @foreach( session('header_nav') as $cate )
    @if( $cate->id == 2 )
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
    <div class="huis_xuey_on">
      <ul class="list clearfix">
        @foreach( $articles as $article )
        <li>
          <a href="/about/student/{{$article->id}}">
            <div class="pic">
              <img src="{{$article->thumbnail}}">
            </div>
            <div class="txt">
              <h2>{{$article->title}}</h2>
              <h3><span>{{$article->link}}</span></h3>
              <p>{{$article->introduce}}</p>
            </div>
          </a>
        </li>
        @endforeach
      </ul>
     {{$articles->links()}}
    </div>  
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection