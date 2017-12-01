@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="in_tit_all">
    <div class="w1160 clearfix">
      <h2><span>Advanced equipment</span></h2>
      <p><span>先进设备</span></p> 
    </div>
  </div>
</div>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="equip_out equip_in_list clearfix">
      @foreach( $articles as $article )
      <li>
        <a >
          <img src="{{$article->thumbnail}}">
          <p>{{$article->title}}</p>
        </a>
      </li>
      @endforeach
    </ul>
    <span class="bk30">&nbsp;</span>
    <div class="pageJump clearfix">
      <div class="number">
        @if( $pages['pre_page']  )
          <span class="disabled"><a href="/equipment">首页</a></span>
          <span class="disabled"><a href="/equipment?page={{ $pages['pre_page'] }}">上一页</a></span>
        @endif
        @if( $pages['next_page'] )
          <span class="disabled"><a href="/equipment?page={{ $pages['next_page'] }}">下一页</a></span>
          <span class="disabled"><a href="/equipment?page={{ $pages['total_page'] }}">尾页</a></span>
        @endif
      </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk80">&nbsp;</span>
</div>
<!-- footer -->
@endsection