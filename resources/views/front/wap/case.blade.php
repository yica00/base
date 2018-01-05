@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">经典案例</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>

@endsection
<!-- banner -->
@section('content')
<!-- start -->
<ul class="case_out clearfix">
  @foreach( $articles as $article )
  <li>
    <a href="/wap/case/{{$article->id}}">
      <div class="p1 clearfix">
        <div class="pic fr">
          <img src="{{ $article->ims[1] }}">
          <span>after</span>
        </div>
        <div class="pic fl">
          <img src="{{ $article->ims[0] }}">
          <span>before</span>
        </div>
      </div>
      <div class="bot">
        <div class="p2 clearfix">
          <div class="txt fr">
            <h2>基本信息</h2>
            <p>{{ explode(',',$article->introduce)[0] }}</p>
          </div>
          <img src="/images/wap/case_btn.png" class="fl icon">
        </div>
        <h2 class="p3">治疗方案：{{$article->title}}</h2>
        <p class="p4">{{ explode(',',$article->introduce)[2] }}</p>
      </div>
    </a>
  </li>
  @endforeach
</ul>
{{$articles->links()}}
<!-- end -->
@endsection