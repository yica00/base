@extends('front.wap.base')
@section('header')
    <div class="header">
        <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
        <a class="col-xs-10 ui-title tit" id="popmenu">口腔项目</a>
        <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
    </div>

@endsection
<!-- banner -->
@section('content')
<!-- start -->
<ul class="item_img_li">
    @foreach( $articles as $article )
  <li>
      <a href="/wap/item/detail/{{$article->id}}">
      <img src="{{$article->thumbnail}}">
      <h2>{{$article->title}}</h2>
    </a>
  </li>
    @endforeach
</ul>
<!-- end -->
@endsection