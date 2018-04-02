@extends('front.base')
@section('content')
<!-- bread -->
<div class="w1160 clearfix"> 
  <div class="bread">
    <h2>产品中心</h2>
    <p class="p1">我们以科技和自然能源为起点，通过产品与服务，让阳光更灿烂，让空气更清新，让环境更健康。</p>
    <p class="p2">product center</p>
  </div>
  <!-- sub-menu -->
  <ul class="sub-menu-con clearfix">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 4 )
        @foreach( $cate->articles as $art )
          <li class=" @if( $art->id == $article->pid ) active @endif">
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
    <div class="cp_box_t clearfix">
      <div class="box_r fr">
        <h2 class="tit">倾动式熔铝炉</h2>
        <dl class="dis">
          <dt>{{ $sons[0]->title }}</dt>
          <dd>
            {!! $sons[0]->comtent !!}
          </dd>
        </dl>
        <dl class="dis">
          <dt>{{ $sons[1]->title }}</dt>
          <dd>
            {!! $sons[1]->comtent !!}
          </dd>
        </dl>
        <a href="tencent://message/?uin={{ session('setting')['qq']  }}&Menu=yes" class="btns">在线咨询购买</a>
      </div>
      <div id="slideBox-cp" class="slideBox-cp fl">
        <div class="hd">
          <ul>
            @foreach( $article->comtent[0] as $img )
              <li><img src="{{$img}}" /></li>
            @endforeach
          </ul>
        </div>
        <div class="bd">
          <ul class="exc1_cp clearfix">
            @foreach( $article->comtent[0] as $img )
              <li><a href="{{$img}}"><img src="{{$img}}" /></a></li>
            @endforeach
          </ul>
        </div>
      </div>
      <script type="text/javascript">jQuery(".slideBox-cp").slide({mainCell:".bd ul",autoPlay:true});</script>
      <script src="/js/touchTouch.jquery.js"></script>
      <script>
        $(function(){
            $(".exc1_cp a").touchTouch();
            $(".exc2 .list").each(function(){
                $(this).find("a").touchTouch();
            });
        });
      </script>
    </div>
    <div class="slideTxtBox">
      <div class="hd">
        <ul><li>{{ $sons[2]->title }}</li><li>{{ $sons[3]->title }}</li><li>{{ $sons[4]->title }}</li></ul>
      </div>
      <div class="bd">
        <div class="dis">
          {!! $sons[2]->comtent !!}
        </div>
        <div class="dis">
          {!! $sons[3]->comtent !!}
        </div>
        <div class="dis">
          {!! $sons[4]->comtent !!}
        </div>
      </div>
    </div>
    <script type="text/javascript">jQuery(".slideTxtBox").slide({trigger:"click"});</script>
  </div>
</div>
<!-- footer -->
@endsection('content')