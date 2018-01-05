@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap/case" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">经典案例</a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
  </div>
@endsection
<!-- banner -->
@section('content')
<!-- start -->
<div class="item_mode">
  <h2 class="kc_bt">{{$article->title}}</h2>
  <div class="doc">
    <p><span>{{ explode(',',$article->introduce)[0] }}</span></p>
    <p><span>{{ explode(',',$article->introduce)[1] }}</span></p>
  </div>
  <span class="bk20">&nbsp;</span>
  <div class="dis">
    <h2 class="all_tit">治疗详情</h2>
    <div class="txt">
      {!! $article->comtent !!}
    </div>
  </div>
  <div class="dis">
    <h2 class="all_tit">对比照片</h2>
    <span class="bk20">&nbsp;</span>
    <ul class="case_out case_inli_out clearfix">
      @foreach( $article->articles as $imgs )
      <li>
        <a >
          <div class="p1 clearfix">
            <div class="pic fr">
              <img src="{{$imgs->comtent[1]}}">
              <span>after</span>
            </div>
            <div class="pic fl">
              <img src="{{$imgs->comtent[0]}}">
              <span>before</span>
            </div>
          </div>
        </a>
        <p>{{$imgs->title}}</p>
      </li>
      @endforeach
</ul>
  </div>
</div>

<!-- end -->
@endsection