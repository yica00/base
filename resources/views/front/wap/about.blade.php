@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">{{ $article->title }}<span class=""></span></a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
    <div id="overlay"></div>
    <div id="win">
      <ul class="dropdown">
        <li ><a href="/wap/about">品牌简介</a></li>
        <li><a href="/wap/about/culture">品牌文化</a></li>
        <li><a href="/wap/about/env">环境展示</a></li>
        <li><a href="/wap/about/honor">资质荣誉</a></li>
      </ul>
    </div>
  </div>
@endsection
<!-- banner -->
@section('content')

<!-- start -->
<div class="txt_mode_1">
  {!! $article->comtent !!}
</div>
<!-- end -->
@endsection