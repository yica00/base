@extends('front.wap.base')
@section('header')
    <div class="header">
        <a href="/wap/news" class="col-xs-1"><span class="back">&nbsp;</span></a>
        <a class="col-xs-10 ui-title tit" id="popmenu">新闻中心</a>
        <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
    </div>
@endsection
<!-- banner -->
@section('content')
<!-- start -->
<div class="news_dis">
  <div class="top">
    <h2 class="tit">{{$article->title}}</h2>
  </div>
  <div class="bot">
      {!! $article->comtent !!}
    </div>
</div>
<!-- end -->
@endsection