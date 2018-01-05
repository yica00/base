@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">先进设备</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>

@endsection
<!-- banner -->
@section('content')
<!-- start -->
<ul class="equip_o_list clearfix">
  @foreach( $articles as $article )
  <li class="col-xs-4">
    <a href="/wap/equip/{{$article->id}}">
      <div class="pic">
        <img src="{{$article->thumbnail}}">
      </div>
      <div class="txt">{{$article->title}}</div>
    </a>
  </li>
  @endforeach
</ul>
{{$articles->links()}}
<!-- end -->
@endsection