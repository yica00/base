@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap/item" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">口腔项目</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>

@endsection
<!-- banner -->
@section('content')
<!-- start -->
<div class="item_mode">
  <div class="img">
    <img src="{{$article->thumbnail}}">
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="dis">
    <h2 class="all_tit">{{$article->title}}</h2>
    <div class="txt">
      {{$article->introduce}}
    </div>
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="dis">
    <h2 class="all_tit">项目详情</h2>
    <div class="txt">
      {!! $article->comtent !!}
    </div>
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="dis">
    <h2 class="all_tit">相关资讯</h2>
    <span class="bk20">&nbsp;</span>
    <ul class="news_in_li1">
      @foreach( $article->articles as $arti )
        <li><a href="/wap/item_news/{{$arti->id}}">{{$arti->title}}</a></li>
      @endforeach
    </ul>
  </div>
</div>
<!-- end -->
@endsection