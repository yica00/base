@extends('front.base')
@section('content')
  <link rel="stylesheet" href="/css/paginate.css">
<!-- bread -->
<div class="bread">
  <h2>课程中心</h2>
  <ul class="sublist">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 3 )
        @foreach( $cate->articles as $art )
          <li class=" @if( $art->id == $id ) on @endif">
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<!-- wap_box -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- star -->
    <ul class="class_list_o clearfix">
      @foreach( $articles as $article )
      <li>
        <a href="/class/{{$article->id}}">
          <div class="img">
            <img src="{{$article->thumbnail}}">
          </div>
          <div class="txt clearfix">
            <div class="dl fr">
              <h2>{{$article->title}}</h2>
              <p>开班时间：{{$article->introduce}}</p>
            </div>
            <div class="fenl fl"> </div>
          </div>
          <div class="line">&nbsp;</div>
        </a>
      </li>
      @endforeach
    </ul>
  {{$articles->links()}}
    <!-- end -->
  </div>
</div>

<!-- footer -->
@endsection