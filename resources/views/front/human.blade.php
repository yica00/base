@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;招贤纳士&nbsp;&nbsp;--</h2>
        <p>recruitment</p>
      </div>
      <!-- <p class="page_nav clearfix">
         <a href="about.html" class="on">品牌介绍</a><a href="about.html">企业文化</a><a href="about.html">发展历程</a><a href="about.html">组织架构</a><a href="about.html">领导致辞</a><a href="show.html">风采展示</a>
      </p> -->
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- start -->
    <div class="sub_human clearfix">
        <div class="txt fr">
          <div class="t1">
            <h2>您的加入</h2>
            <p>将为我们带来更多的精彩!</p>
          </div>
            <div class="t2">
                <h2>在这里，您将得到</h2>
                <p>持续成长的环境和空间；持续提升的个人素质和技能；持续展现的自我价值和人生梦想！</p>
                <p>如有意向，简历请发送至邮箱：<span class="col_174fa2">{{ session('setting')['email']  }}</span></p>
            </div>
            <ul class="list">
                @foreach($articles as $article )
                    <li>
                        <h2 class="dt clearfix"><span class="num"></span><span class="name">{{ $article->title }}</span></h2>
                        <div class="dd">
                            {!! $article->comtent  !!}
                        </div>
                    </li>
                @endforeach

            </ul>
            <div class="pageJump clearfix">
                <div class="number">
                    @if( $pages['pre_page']  )
                        <span class="disabled"><a href="/recruit">首页</a></span>
                        <span class="disabled"><a href="/recruit?page={{ $pages['pre_page'] }}">上一页</a></span>
                    @endif
                    @if( $pages['next_page'] )
                        <span class="disabled"><a href="/recruit?page={{ $pages['next_page'] }}">下一页</a></span>
                        <span class="disabled"><a href="/recruit?page={{ $pages['total_page'] }}">尾页</a></span>
                    @endif
              </div>
          </div>
        </div>
      <div class="pic fl">
          <img src="{{ $self->thumbnail }}">
      </div>
    </div>
    <!-- end --> 
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- index_list -->
@endsection