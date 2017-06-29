@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;新闻中心&nbsp;&nbsp;--</h2>
        <p>news center</p>
      </div>
      <p class="page_nav clearfix">
          <a href="/company_news" class="on">公司新闻</a><a href="/industy_news">行业资讯</a>
      </p>
  </div>  
</div> 
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <ul class="news_wap clearfix">
      @foreach($articles as $article )
        <li>
          <a href="/news/{{ $article->id }}">
            <img src="{{ $article->thumbnail }}" alt="">
            <div class="bot"><p class="time">{{ $article->created_at }}</p>
              <h2>{{ $article->title }}</h2>
              <p class="txt">
{{--                {{  mb_substr($article->comtent,3,40,'utf8') }} --}}
              </p></div>
          </a>
        </li>
      @endforeach


      {{--<li>--}}
        {{--<a href="news_in.html">--}}
          {{--<img src="images/a1.jpg" alt="">--}}
          {{--<div class="bot"><p class="time">2017/06/20</p>--}}
          {{--<h2>现代农业示范园为民增收 推动临沭农业创新发展</h2>--}}
          {{--<p class="txt"> 在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园...</p></div>--}}
        {{--</a>--}}
      {{--</li>--}}

    </ul>
    <div class="pageJump clearfix">
        <div class="number">
            <span class="disabled"><a href="/news">首页</a></span>
            <span class="disabled"><a href="/news?page={{ $pages['pre_page'] }}">上一页</a></span>
            <span class="disabled"><a href="/news?page={{ $pages['next_page'] }}">下一页</a></span>
            <span class="disabled"><a href="/news?page={{ $pages['total_page'] }}">尾页</a></span>
        </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection