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
    <ul class="case_out case_in_list clearfix">
          @foreach( $articles as $article )
          <li>
            <a href="/case/{{$article->id}}">
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
                  <img src="/images/case_btn.png" class="fl">
                </div>
                <h2 class="p3">治疗方案：{{$article->title}}</h2>
                <p class="p4">{{ explode(',',$article->introduce)[2] }}</p>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
    <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="/case">首页</a></span>
          <span class="disabled"><a href="/case?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/case?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/case?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk80">&nbsp;</span>
</div>
<!-- footer -->
@endsection