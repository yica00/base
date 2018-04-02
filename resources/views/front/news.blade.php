@extends('front.base')
@section('content')
  <link rel="stylesheet" href="/css/paginate.css">
<!-- bread -->
<div class="w1160 clearfix"> 
  <div class="bread">
    <h2>新闻中心</h2>
    <p class="p1">我们以科技和自然能源为起点，通过产品与服务，让阳光更灿烂，让空气更清新，让环境更健康。</p>
    <p class="p2">news case</p>
  </div>
  <!-- sub-menu -->
  <ul class="sub-menu-con clearfix">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 6 )
        @foreach( $cate->articles as $art )
          <li class=" @if( $art->id == $id ) active @endif">
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<!-- 内容 -->
<div class="w1160 clearfix">
  <div class="txt_demo_1">
    {{--<div class="news_out news_in_t clearfix">--}}
      {{--<ul class="box_r fr">--}}
        {{--<li>--}}
          {{--<a href="news_in.html" class="clearfix">--}}
            {{--<div class="txt fr">--}}
              {{--<h2>华北“煤改气”释放八百亿市场，迪森股份已然抢跑！</h2>--}}
              {{--<p>根据环保部数据，京津冀上半年平均优良天数比例同比下降7.1个百分点</p>  --}}
            {{--</div>--}}
            {{--<span class="num fl">01</span>--}}
          {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
          {{--<a href="news_in.html" class="clearfix">--}}
            {{--<div class="txt fr">--}}
              {{--<h2>华北“煤改气”释放八百亿市场，迪森股份已然抢跑！</h2>--}}
              {{--<p>根据环保部数据，京津冀上半年平均优良天数比例同比下降7.1个百分点，PM2.5浓度上升14.3%。空气污染重疾久治不愈</p>  --}}
            {{--</div>--}}
            {{--<span class="num fl">02</span>--}}
          {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
          {{--<a href="news_in.html" class="clearfix">--}}
            {{--<div class="txt fr">--}}
              {{--<h2>华北“煤改气”释放八百亿市场，迪森股份已然抢跑！</h2>--}}
              {{--<p>根据环保部数据，京津冀上半年平均优良天数比例同比下降7.1个百分点，PM2.5浓度上升14.3%。</p>  --}}
            {{--</div>--}}
            {{--<span class="num fl">03</span>--}}
          {{--</a>--}}
        {{--</li>--}}
      {{--</ul>  --}}
      {{--<div class="box_l fl">--}}
        {{--<div id="slideBox-xw" class="slideBox-xw">--}}
          {{--<div class="hd"><ul><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li></ul></div>--}}
          {{--<div class="bd">--}}
            {{--<ul>--}}
              {{--<li>--}}
                {{--<a href="news_in.html">--}}
                  {{--<img src="images/hj5.jpg">--}}
                  {{--<div class="txt">--}}
                    {{--<h2>助力煤改气，成为北方清洁供暖的一道风景线！</h2>--}}
                  {{--</div>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="news_in.html">--}}
                  {{--<img src="images/hj4.jpg">--}}
                  {{--<div class="txt">--}}
                    {{--<h2>助力煤改气，成为北方清洁供暖的一道风景线！</h2>--}}
                  {{--</div>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="news_in.html">--}}
                  {{--<img src="images/hj6.jpg">--}}
                  {{--<div class="txt">--}}
                    {{--<h2>助力煤改气，成为北方清洁供暖的一道风景线！</h2>--}}
                  {{--</div>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="news_in.html">--}}
                  {{--<img src="images/hj7.jpg">--}}
                  {{--<div class="txt">--}}
                    {{--<h2>助力煤改气，成为北方清洁供暖的一道风景线！</h2>--}}
                  {{--</div>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="news_in.html">--}}
                  {{--<img src="images/hj8.jpg">--}}
                  {{--<div class="txt">--}}
                    {{--<h2>助力煤改气，成为北方清洁供暖的一道风景线！</h2>--}}
                  {{--</div>--}}
                {{--</a>--}}
              {{--</li>--}}
            {{--</ul>--}}
          {{--</div>--}}
          {{--<a class="prev" href="javascript:void(0)"></a>--}}
          {{--<a class="next" href="javascript:void(0)"></a>--}}
        {{--</div>--}}
        {{--<script type="text/javascript">jQuery(".slideBox-xw").slide({mainCell:".bd ul",autoPlay:true});</script>--}}
      {{--</div> --}}
    {{--</div>--}}
    <ul class="mews_inlist">
      @foreach( $articles as $article )
      <li>
        <a href="/news/{{$article->id}}">
          <h2 class="bt">{{$article->title}}</h2>
          <p class="time">{{ $article->created_at }}</p>
          <div class="dis">
            {{$article->introduce}}
          </div>
        </a>
      </li>
      @endforeach
    </ul>
    {{$articles->links()}}
    {{--<div class="pageJump clearfix">--}}
      {{--<div class="number">--}}
          {{--<span class="disabled"><a href="">上一页</a></span>--}}
          {{--<span class="disabled"><a href="">1</a></span>--}}
          {{--<span class="disabled"><a href="">2</a></span>--}}
          {{--<span class="disabled"><a href="">3</a></span>--}}
          {{--<span class="disabled"><a href="">下一页</a></span>--}}
      {{--</div>--}}
    {{--</div>--}}
  </div>
</div>
<!-- footer -->
@endsection('content')