@extends('front.base')
@section('content')
<!-- banner -->
<div id="slideBox" class="slideBox">
  <div class="hd">&nbsp;</div>
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
<!-- 学员 -->
<div class="w1160 clearfix">
  <span class="bk60">&nbsp;</span>
  <ul class="huis_stu_on clearfix">
    @foreach( $envs as $env )
    <li>
      <div class="pic"><img src="{{$env->thumbnail}}"></div>
      <div class="txt txt_yc">{{$env->title}}</div>
    </li>
    @endforeach
  </ul>
</div>
<!-- 优势 -->
<div class="w1160 clearfix">
  <span class="bk60">&nbsp;</span>
  <div class="ho_tit_all">
    <a >
      <h2>为什么选择慧尚教育？</h2>
      <p>全方位科学服务，孩子放心学</p>
    </a>
  </div>
  <span class="bk30">&nbsp;</span>
  <ul class="huis_ys_on clearfix">
    @foreach( $envsss as $k=>$envss )
    <li class="li_{{$k+1}}">
      <div class="icon"><img src="{{$envss->thumbnail}}"></div>
      <h2 class="txt_yc bt">{{$envss->title}}</h2>
      <p class="dis">{{$envss->introduce}}</p>
      <a href="tencent://message/?uin={{ session('setting')['fix_phone'] }}&Menu=yes" class="btn btn_1">如何了解我的定位 &gt;&gt;</a>
    </li>
    @endforeach
  </ul>
</div>
<!-- 广告位 -->
<span class="bk60">&nbsp;</span>
<a href="tencent://message/?uin={{ session('setting')['fix_phone'] }}&Menu=yes" style="background:url(images/ad_1.jpg) center no-repeat;" class="ho_add_1">&nbsp;</a>
<!-- slove -->
<div class="w1160 clearfix">
  <span class="bk60">&nbsp;</span>
  <div class="ho_tit_all">
    <a >
      <h2>这些问题你是否存在？严重影响学习效率呢？</h2>
      <p>我们有方法，让学习更简单！</p>
    </a>
  </div>
  <span class="bk30">&nbsp;</span>
  <div class="huis_wt_on clearfix">
    <ul class="wt_top clearfix">
      @foreach( $envsssss as $k=>$envssss )
      <li>
        <div class="clearfix">
          <span class="num fl">{{$k+1}}</span>
          <span class="bt fl">{{$envssss->title}}</span>
        </div>
        <div class="dis">
          <p>{{$envssss->introduce}}</p>
          {{--<p>课下看不懂??、作业难完成。</p>--}}
        </div>
        <div class="pic">
          <img src="{{$arti->thumbnail}}">
        </div>
      </li>
      @endforeach
    </ul>
    <span class="bk50">&nbsp;</span>
    <div class="wt_bt"><span>这些问题，慧尚帮你解决！</span></div>
    <span class="bk30">&nbsp;</span>
    <div class="wt_pic">
      <img src="/images/xbnx.png">
    </div>
  </div>
</div>
<!-- 课程 -->
<span class="bk60">&nbsp;</span>
<div class="huis_cls_on">
  <div class="w1160 clearfix">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit_all ho_tit_2">
      <a href="">
        <h2>四大精准课程，切实帮助孩子高效提分</h2>
        <p>根据学生特点对辅导内容进行适当取舍， 用个性化的学习方法让学生在短期内达到快速提分效果</p>
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <ul class="list clearfix">
      @foreach( $envssssss as $k=>$envsssss )
      <li class="li_{{$k+1}}">
        <div class="pic"><img src="{{$envsssss->thumbnail}}"></div>
        <div class="bt">{{$envsssss->title}}</div>
        <a href="tencent://message/?uin={{ session('setting')['fix_phone'] }}&Menu=yes">点击参与</a>
      </li>
      @endforeach
    </ul>
    <span class="bk60">&nbsp;</span>
  </div>
</div>
<!-- kebiao -->
<div class="huis_kb_on">
  <div class="w1160 clearfix">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit_all ho_tit_2">
      <a >
        <h2>全年级全科目辅导基础难点全掌握</h2>
        <p>全阶段集中学习，最后一周模考冲刺效果最佳</p>
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="btns clearfix">
      <a href="tencent://message/?uin={{ session('setting')['fix_phone'] }}&Menu=yes">小学1对1咨询</a>
      <a href="tencent://message/?uin={{ session('setting')['fix_phone'] }}&Menu=yes">初中1对1咨询</a>
      <a href="tencent://message/?uin={{ session('setting')['fix_phone'] }}&Menu=yes">高中1对1咨询</a>
    </div>
    <span class="bk60">&nbsp;</span>
    <div class="picScroll-left">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList">
          @foreach( $envssssssss as $envsssssss )
          <li>
            <div class="bt">{{$envsssssss->title}}</div>
            <div class="txt">
              {!! $envsssssss->comtent !!}
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});
    </script>
    <span class="bk60">&nbsp;</span>
  </div>
</div>
<!-- 广告位2 -->
<a  style="background:url(images/ad_2.jpg) center no-repeat;" class="ho_add_1">&nbsp;</a>
<!-- 老师 -->

{{--<div class="w1160 clearfix">--}}
  {{--<div class="huis_xuey_on">--}}
    {{--<span class="bk60">&nbsp;</span>--}}
    {{--<div class="ho_tit_all">--}}
      {{--<a href="/about/student">--}}
        {{--<h2>梦想，比你想象的更容易实现！</h2>--}}
        {{--<p>全面提升辅导效果 平均单科提分37.5</p>--}}
      {{--</a>--}}
    {{--</div>--}}
    {{--<span class="bk30">&nbsp;</span>--}}
    {{--<ul class="list clearfix">--}}
      {{--@foreach( $envssssssssss as $k=>$envsssssssss )--}}
      {{--<li>--}}
        {{--<a href="/about/student/{{$envsssssssss->id}}">--}}
          {{--<div class="pic">--}}
            {{--<img src="{{$envsssssssss->thumbnail}}">--}}
          {{--</div>--}}
          {{--<div class="txt">--}}
            {{--<h2>{{$envsssssssss->title}}</h2>--}}
            {{--<h3><span>{{$envsssssssss->link}}</span></h3>--}}
            {{--<p>{{$envsssssssss->introduce}}</p>--}}
          {{--</div>--}}
        {{--</a>--}}
      {{--</li>--}}
      {{--@endforeach--}}
    {{--</ul>--}}
    {{--<div class="btns"><a href="tencent://message/?uin={{ session('setting')['fix_phone'] }}&Menu=yes">点击咨询提分经验</a></div>--}}
  {{--</div>--}}
{{--</div>--}}


<div class="w1160 clearfix">
  <div class="huis_tea_on">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="/team">
        <h2>能让孩子提分的才是好老师</h2>
        <p>能提分的才是好老师，慧尚学员平均单科提高15.8分</p>
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    {{--<ul class="top clearfix">--}}
      {{--@foreach( $envssssssssss as $k=>$envsssssssss )--}}
      {{--<li class="clearfix">--}}
          {{--<div class="icon fl"><img src="/images/ls_{{$k+1}}.png"></div>--}}
          {{--<div class="txt fl">{{$envsssssssss->title}}<br/>{{$envsssssssss->introduce}}</div>--}}
      {{--</li>--}}
      {{--@endforeach--}}

    {{--</ul>--}}
    <span class="bk60">&nbsp;</span>
    <div class="picScroll-left-js">
      <div class="bd">
        <ul class="picList">
          @foreach( $teams as $team )
          <li>
            <a href="/team/{{$team->id}}">
              <div class="txt txt_yc">{{$team->introduce}}</div>
              <div class="pic"><img src="{{$team->thumbnail}}"></div>
              <h2>{{$team->title}}</h2>
              <p>{{$team->link}}</p>
            </a>
          </li>
        @endforeach

        </ul>
      </div>
      <div class="hd">
        <ul></ul>
      </div>
    </div>

    <script type="text/javascript">
    jQuery(".picScroll-left-js").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click"});
    </script>
  </div>
</div>
<!--  -->
<span class="bk60">&nbsp;</span>
<div class="huis_hj_on">
  <div class="w1160 clearfix">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit_all ho_tit_2">
      <a href="/environment">
        <h2>慧尚教育全科培训教学环境</h2>
        <p>干净明亮的集训校区让你冲刺学习更有信心</p>
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="btns clearfix">
      @foreach( $honors as $honor )
      <a href="/environment/category/{{$honor->id}}">{{$honor->title}}</a>
      @endforeach
    </div>
    <span class="bk60">&nbsp;</span>
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-1.3.4.css" media="screen">
    <script type="text/javascript" src="/js/jquery.fancybox-1.3.4.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
         
        $("a[rel=images_group]").fancybox({
          'transitionIn':'none',
          'transitionOut':'none',
          'titlePosition':'over',
          'titleFormat':function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
          }
        });
      });
    </script>
    <div class="box_all clearfix" id="product_big"> 
      <div class="w900 fr">
        <!-- 1 -->
        <div class="clearfix">
          <a rel="images_group" href="{{ isset($equipments[0])?$equipments[0]->thumbnail:'' }}" class="p5 fr"><img src="{{ isset($equipments[0])?$equipments[0]->thumbnail:'' }}"></a>
          <a rel="images_group" href="{{ isset($equipments[1])?$equipments[1]->thumbnail:'' }}" class="p3 fl mR10"><img src="{{ isset($equipments[1])?$equipments[1]->thumbnail:'' }}"></a>
          <div class="w220 fl">
            <a rel="images_group" href="{{ isset($equipments[2])?$equipments[2]->thumbnail:'' }}" class="p4"><img src="{{ isset($equipments[2])?$equipments[2]->thumbnail:'' }}"></a>
            <span class="bk10">&nbsp;</span>
            <a rel="images_group" href="{{ isset($equipments[3])?$equipments[3]->thumbnail:'' }}" class="p4"><img src="{{ isset($equipments[3])?$equipments[3]->thumbnail:'' }}"></a>
          </div>
        </div>
        <span class="bk10">&nbsp;</span>
        <div class="clearfix">
          <div class="in_2 fr">
            <a rel="images_group" href="{{ isset($equipments[4])?$equipments[4]->thumbnail:'' }}" class="p6"><img src="{{ isset($equipments[4])?$equipments[4]->thumbnail:'' }}"></a>
            <span class="bk10">&nbsp;</span>
            <a rel="images_group" href="{{ isset($equipments[5])?$equipments[5]->thumbnail:'' }}" class="p6"><img src="{{ isset($equipments[5])?$equipments[5]->thumbnail:'' }}"></a>
          </div>
          <a rel="images_group" href="{{ isset($equipments[6])?$equipments[6]->thumbnail:'' }}" class="p1 fl mR10"><img src="{{ isset($equipments[6])?$equipments[6]->thumbnail:'' }}"></a>
          <a rel="images_group" href="{{ isset($equipments[7])?$equipments[7]->thumbnail:'' }}" class="p1 fl mR10"><img src="{{ isset($equipments[7])?$equipments[7]->thumbnail:'' }}"></a>
          <a rel="images_group" href="{{ isset($equipments[8])?$equipments[8]->thumbnail:'' }}" class="p1 fl mR10"><img src="{{ isset($equipments[8])?$equipments[8]->thumbnail:'' }}"></a>
        </div>
      </div>
      <div class="w250 fl">
        <a rel="images_group" href="{{ isset($equipments[9])?$equipments[9]->thumbnail:'' }}" class="p1"><img src="{{ isset($equipments[9])?$equipments[9]->thumbnail:'' }}"></a>
        <span class="bk10">&nbsp;</span>
        <a rel="images_group" href="{{ isset($equipments[10])?$equipments[10]->thumbnail:'' }}" class="p2"><img src="{{ isset($equipments[10])?$equipments[10]->thumbnail:'' }}"></a>
      </div>
      
    </div>
    <span class="bk60">&nbsp;</span>
  </div>
</div>
<!-- zhaos -->
<div class="huis_zhaos_on">
  <div class="w1160 clearfix">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit_all">
      <a href=/contact/order">
        <h2>2018年慧尚全科课外培训已启动招生</h2>
        <p>报读学员人数较多，个别课程已封班开课</p>
      </a>
    </div>
    <span class="bk80">&nbsp;</span>
    <div class="p1">
      已报名小、中、高培训人数
    </div>
    <div class="p2">
      <span>2</span>
      <span>6</span>
      <span>3</span>
      <span>4</span>
      <span class="num">人</span>
    </div>
    <span class="bk40">&nbsp;</span>
    <div  class="btns"><a href="/contact/order"><span>立即报名</span></a></div>
    <span class="bk60">&nbsp;</span>
  </div>
</div>
<!--  -->
@endsection