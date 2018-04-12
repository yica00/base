@extends('front.base')
@section('content')
<!-- banner -->
<div id="slideBox" class="slideBox">
  <div class="hd"><ul>
      @foreach( $sliders as $slider )
      <li>&nbsp;</li>
      @endforeach
    </ul></div>
  <div class="bd">
    <ul>
      @foreach( $sliders as $slider )
      <li><a href="{{$slider->link}}" style="background:url({{$slider->thumbnail}}) center no-repeat;">&nbsp;</a></li>
      @endforeach
    </ul>
  </div>
  <a class="prev" href="javascript:void(0)"></a>
  <a class="next" href="javascript:void(0)"></a>
</div>
<script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
<!-- time -->
<script src="js/wow.min.js"></script>
<script src="js/swiper-3.3.1.jquery.min.js"></script>
<script src="js/swiper.animate1.0.2.min.js"></script>
<script src="js/global.js"></script>
<!-- about_out -->
<div class="w1160 clearfix">
  <div class="about_out">
    <div class="ho_tit_all clearfix">
      <a href="/about">
        <span class="p1">走进迪歌</span>
        <span class="p2">about us</span>
      </a>
    </div>
    <div class="box">
      <div class="pic">
        <img src="{{$about->thumbnail}}">
      </div>
      <div class="txt">
        <div class="dis">{{$about->introduce}}</div>
        <div class="btns"><a href="/about">see more</a></div>
      </div>
    </div>
  </div>
</div>
<!-- product_out -->
<div class="product_out">
  <div class="w1160 clearfix">
    <div class="ho_tit_all clearfix">
      <a href="/product">
        <span class="p1">产品中心</span>
        <span class="p2">product center</span>
      </a>
    </div>
    <div class="slideGroup">
      <div class="parHd">
        <ul>
          @foreach( $products as $product )
          <li>
            <h2>{{$product->title}}</h2>
            <p>{{$product->introduce}}</p>
          </li>
          @endforeach
      </ul>
      </div>
      <div class="parBd">
        @foreach( $products as $product )
          <div class="slideBox">
            <a class="sPrev" href="javascript:void(0)"></a>
            <ul>
              @foreach( $product->articles as $arti )
              <li>
                <a href="/product/{{$arti->id}}">
                  <div class="pic"><img src="{{$arti->thumbnail}}" /></div>
                  <div class="txt">{{$arti->title}}</div>
                </a>
              </li>
                @endforeach
            </ul>
            <a class="sNext" href="javascript:void(0)"></a>
          </div><!-- slideBox End -->
        @endforeach
      </div><!-- parBd End -->
    </div>
    <script type="text/javascript">
      /* 内层图片滚动切换 */
      jQuery(".slideGroup .slideBox").slide({ mainCell:"ul",vis:3,prevCell:".sPrev",autoPage:true,nextCell:".sNext",effect:"left"});
      /* 外层tab切换 */
      jQuery(".slideGroup").slide({titCell:".parHd li",mainCell:".parBd"});
    </script>
  </div>
</div>
<!-- case_out -->
<div class="w1160 clrearfix">
  <div class="case_out">
    <div class="ho_tit_all clearfix">
      <a href="case">
        <span class="p1">工程案例</span>
        <span class="p2">Engineering case</span>
      </a>
    </div>
    <ul class="list clearfix">
      @foreach( $cases as $case )
      <li>
        <a href="/case/{{$case->id}}">
          <div class="pic">
            <img src="{{$case->thumbnail}}" alt="" />
          </div>
          <div class="txt">{{$case->title}}</div>
          <div class="line">&nbsp;</div>
        </a>
      </li>
      @endforeach
    </ul>
  </div>
</div>
<!-- service_Out -->
<div class="service_out">
  <div class="w1160 clrearfix">
    <div class="tit_all">
      <div class="p1"><span>迪歌--燃气采暖综合解决方案专家</span></div>
      <div class="p2">始终专注于供暖设备的研发、设计、制造、系统技术研发及运用</div>
    </div>
    <div class="box clearfix">
      <div class="w370 fr">
        <dl class="dl_3">
          <dt>专注热能解决方案</dt>
          <dd>专注于热能设备的研发、设计、制造，专注于供暖技术研发及运用</dd>
        </dl>
        <dl class="dl_4">
          <dt>让温度成为温暖</dt>
          <dd>厚德沉淀，荣耀进取，让温度成为温暖！</dd>
        </dl>
      </div>
      <div class="w370 fl">
        <dl class="dl_1">
          <dt>建立标准、坚持标准</dt>
          <dd>让标准成为习惯，让习惯符合标准</dd>
        </dl>
        <dl class="dl_2">
          <dt>做极致安全的热能</dt>
          <dd>体积更小、更轻便、更加高效节能环保，热效率高达100%</dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- area_out -->
<div class="w1160 clrearfix">
  <div class="area_out">
    <div class="ho_tit_all clearfix">
      <a href="/about/env">
        <span class="p1">厂区环境</span>
        <span class="p2">Factory environment</span>
      </a>
    </div>
    <div class="clearfix">
      <div class="box_r fr">
        <a href="/about/env" class="m1"><img src="{{ isset( $envs[0] )? $envs[0]->thumbnail:"" }}"></a>
        <span class="bk20">&nbsp;</span>
        <div class="clearfix">
          <a href="/about/env" class="m2 fr"><img src="{{ isset( $envs[1] )? $envs[1]->thumbnail:"" }}"></a>
          <a href="/about/env" class="m2 fl"><img src="{{ isset( $envs[2] )? $envs[2]->thumbnail:"" }}"></a>
        </div>
      </div>
      <div class="box_l fl">
        <div id="slideBox-hj" class="slideBox-hj">
          <div class="hd"><ul>
              @foreach( $envs as $env )<li>&nbsp;</li>@endforeach
            </ul></div>
          <div class="bd">
            <ul>
              @foreach( $envs as $env )
              <li><a href="/about/env"><img src="{{$env->thumbnail}}"></a></li>
              @endforeach
            </ul>
          </div>
          <a class="prev" href="javascript:void(0)"></a>
          <a class="next" href="javascript:void(0)"></a>
        </div>
        <script type="text/javascript">jQuery(".slideBox-hj").slide({mainCell:".bd ul",autoPlay:true});</script> 
      </div>
      
    </div>
  </div>
</div>
<!-- news_out -->
<div class="news_out">
  <div class="w1160 clearfix">
    <div class="ho_tit_all clearfix">
      <a href="/news">
        <span class="p1">新闻中心</span>
        <span class="p2">news center</span>
      </a>
    </div>
    <div class="clearfix">
      <ul class="box_r fr" style="margin-left: 100px;width: 500px" >
        @foreach( $newss as $k=>$news )
          @if( $k > 2 )
        <li>
          <a href="/news/{{$news->id}}" class="clearfix">
            <div class="txt fr" style="width: 400px" >
              <h2>{{$news->title}}</h2>
              <p>{{$news->introduce}}</p>
            </div>
            <span class="num fl">0{{$k+1}}</span>
          </a>
        </li>
          @endif
        @endforeach
      </ul>
      <ul class="box_r"  >
        @foreach( $newss as $k=>$news )
          @if( $k < 3 )
        <li>
          <a href="/news/{{$news->id}}" class="clearfix">
            <div class="txt fr" style="width: 450px;" >
              <h2>{{$news->title}}</h2>
              <p>{{$news->introduce}}</p>
            </div>
            <span class="num fl" >0{{$k+1}}</span>
          </a>
        </li>
          @endif
        @endforeach
      </ul>

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
    </div>
  </div>
</div>
<!-- footer -->
@endsection('content')