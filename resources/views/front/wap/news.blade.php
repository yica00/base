@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">新闻中心</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
<!-- banner -->
@section('content')
<!-- start -->
<div class="txt_mode_1">
  <ul class="news_in_list clearfix">
    @foreach( $articles as $article )
    <li>
      <a href="/wap/news/{{$article->id}}" class="news_o_box">
        <img src="{{$article->thumbnail}}">
        <div class="txt">
          <h2>{{$article->title}}</h2>
          <div class="dis">
            {{$article->introduce}}
          </div>
        </div>
      </a>
    </li>
    @endforeach
  </ul>
  {{ $articles->links() }}
</div>
<!-- end -->
@endsection