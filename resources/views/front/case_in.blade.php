@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="in_tit_all">
    <div class="w1160 clearfix">
      <h2><span>Classic case</span></h2>
      <p><span>经典案例</span></p> 
    </div>
  </div>
</div>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="case_box_all">
      <div class="tit">
        <h2>{{$article->title}}</h2>
        <p><span>{{ explode(',',$article->introduce)[0] }}</span></p>
        <p><span>{{ explode(',',$article->introduce)[1] }}</span></p>
      </div>
      <!-- 2 -->
      <span class="bk20">&nbsp;</span>
      <div class="box_1">
        <h2 class="bt">治疗详情</h2>
        <div class="box">
          {!! $article->comtent !!}
        </div>
      </div>
      <span class="bk20">&nbsp;</span>
      <div class="box_1">
        <h2 class="bt">对比照片</h2>
        <ul class="case_out_in clearfix">
          @foreach( $article->articles as $imgs )
          <li class="clearfix">
            <div class="top clearfix">
               <div class="pic fr">
                  <img src="{{$imgs->comtent[1]}}">
                  <span>after</span>
                </div>
                <div class="pic fl">
                  <img src="{{$imgs->comtent[0]}}">
                  <span>before</span>
                </div>
                 </div>
                 <h2>{{$imgs->title}}</h2>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="backpre clearfix">
        @if( $up_down['1'] )<a href="/case/{{ $up_down['1'] }}" rel="next">上一篇</a> @endif
        @if( $up_down['2'] ) <a href="/case/{{ $up_down['2'] }}" rel="prev">下一篇</a>@endif
        <a href="/case">返回上级目录</a>
      </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk80">&nbsp;</span>
</div>
<!-- footer -->
@endsection