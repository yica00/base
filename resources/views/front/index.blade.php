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
<!-- class_out -->
<div class="class_out">
  <div class="w1160 clearfix">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit-all">
      <a href="/class">多个学习课程，轻松得高分</a>
    </div>
    <span class="bk60">&nbsp;</span>
    <ul class="class_list_o clearfix">
      @foreach( $classs as $class )
      <li>
        <a href="/class/{{$class->id}}">
          <div class="img">
            <img src="{{$class->thumbnail}}">
          </div>
          <div class="txt clearfix">
            <div class="dl fr">
              <h2>{{$class->title}}</h2>
              <p>开班时间：{{$class->introduce}}</p>
            </div>
            <div class="fenl fl">　</div>
          </div>
          <div class="line">&nbsp;</div>
        </a>
      </li>
      @endforeach
    </ul>
    <p class="btns"><a href="/class">查看更多课程</a></p>
  </div>
  <span class="bk60">&nbsp;</span>
</div>
<!-- teacher_out -->
<div class="teacher_out">
  <div class="w1160 clearfix">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit-all">
      <a href="/team">签约优秀教师团队,学员成绩提高有保障</a>
    </div>
    <span class="bk60">&nbsp;</span>
    <div class="picScroll-left" id="picScroll-left-1">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList teacher_list_o">
          @foreach( $teams as $team )
          <li>
            <a href="/team/{{$team->id}}">
              <span class="pic"><img src="{{$team->photo}}" alt="" /></span>
              <div class="txt">
                <h2>{{$team->name}}</h2>
                <p>{{$team->title}}</p>
                <p>{{$team->honor}}</p>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery("#picScroll-left-1").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});
    </script>
    <span class="bk60">&nbsp;</span>
  </div>
</div>
<!-- huis_xuey_on -->
<div class="huis_xuey_on">
  <div class="w1160 clearfix">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit-all">
      <a href="/about/student">优秀的名师学员，传授提分经验</a>
    </div>
    <span class="bk60">&nbsp;</span>
    <div class="picScroll-left" id="picScroll-left-2">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList list">
          @foreach( $students as $student )
          <li>
              <a href="/about/student/{{$student->id}}">
                <div class="pic">
                  <img src="{{$student->thumbnail}}">
                </div>
                <div class="txt">
                  <h2>{{$student->title}}</h2>
                  <h3><span>{{$student->link}}</span></h3>
                  <p>{{$student->introduce}}</p>
                </div>
              </a>
            </li>
            @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery("#picScroll-left-2").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});
    </script>
    <span class="bk60">&nbsp;</span>
  </div>
</div>
<!-- base_out -->
<div class="base_out">
  <div class="w1160 clearfix">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit-all">
      <a href="base">舒适教学环境,丰富学习生活</a>
    </div>
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
    <span class="bk60">&nbsp;</span>
    <div class="tea_act_three clearfix" id="product_big"> 
      <div class="img_bot clearfix">
        <a rel="images_group" href="{{ isset( $envs[4])?$envs[4]->thumbnail:"" }}" class="p1 fl mR10"><img src="{{ isset( $envs[4])?$envs[4]->thumbnail:"" }}"></a>
        <a rel="images_group" href="{{ isset( $envs[5])?$envs[5]->thumbnail:"" }}" class="p2 fl mR10"><img src="{{ isset( $envs[5])?$envs[5]->thumbnail:"" }}"></a>
        <a rel="images_group" href="{{ isset( $envs[6])?$envs[6]->thumbnail:"" }}" class="p3 fl"><img src="{{ isset( $envs[6])?$envs[6]->thumbnail:"" }}"></a>
      </div>
      <span class="bk10">&nbsp;</span>
      <div class="img_top clearfix">
        <a rel="images_group" href="{{ isset( $envs[0])?$envs[0]->thumbnail:"" }}"  class="fl mR10"><img src="{{ isset( $envs[0])?$envs[0]->thumbnail:"" }}"></a>
        <a rel="images_group" href="{{ isset( $envs[1])?$envs[1]->thumbnail:"" }}"  class="fl mR10"><img src="{{ isset( $envs[1])?$envs[1]->thumbnail:"" }}"></a>
        <a rel="images_group" href="{{ isset( $envs[2])?$envs[2]->thumbnail:"" }}"  class="fl mR10"><img src="{{ isset( $envs[2])?$envs[2]->thumbnail:"" }}"></a>
        <a rel="images_group" href="{{ isset( $envs[3])?$envs[3]->thumbnail:"" }}"  class="fl"><img src="{{ isset( $envs[3])?$envs[3]->thumbnail:"" }}"></a>
      </div>
    </div>
    <span class="bk60">&nbsp;</span>
    
  </div>
</div>
<!-- footer -->
@endsection