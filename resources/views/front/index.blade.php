@extends('front.base')
@section('content')
<!-- banner -->
<div id="slideBox" class="slideBox">
  <div class="hd">&nbsp;</div>
  <div class="bd">
    <ul>
      <li><a href="" style="background:url(images/bn_1.jpg) center no-repeat;">&nbsp;</a></li>
      <li><a href="" style="background:url(images/bn_2.jpg) center no-repeat;">&nbsp;</a></li>
      <li><a href="" style="background:url(images/bn_3.jpg) center no-repeat;">&nbsp;</a></li>
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
    <li>
      <div class="pic"><img src="/images/xy_1.jpg"></div>
      <div class="txt txt_yc">2017届慧尚培训学员</div>
    </li>
    <li>
      <div class="pic"><img src="/images/xy_1.jpg"></div>
      <div class="txt txt_yc">2016届慧尚培训学员</div>
    </li>
    <li>
      <div class="pic"><img src="/images/xy_1.jpg"></div>
      <div class="txt txt_yc">2015届慧尚培训学员</div>
    </li>
  </ul>
</div>
<!-- 优势 -->
<div class="w1160 clearfix">
  <span class="bk60">&nbsp;</span>
  <div class="ho_tit_all">
    <a href="">
      <h2>为什么选择慧尚教育？</h2>
      <p>全方位科学服务，孩子放心学</p>
    </a>
  </div>
  <span class="bk30">&nbsp;</span>
  <ul class="huis_ys_on clearfix">
    <li class="li_1">
      <div class="icon"><img src="/images/ys_1.png"></div>
      <h2 class="txt_yc bt">测评定位</h2>
      <p class="dis">慧尚教育专业学科测评师定制学生的综合测试试卷，找出学生的学习薄弱环节以及知识盲区，得出测评报告。</p>
      <a href="" class="btn btn_1">如何了解我的定位 &gt;&gt;</a>
    </li>
    <li class="li_2">
      <div class="icon"><img src="/images/ys_2.png"></div>
      <h2 class="txt_yc bt">学习方案</h2>
      <p class="dis">慧尚教育专业学科测评师定制学生的综合测试试卷，找出学生的学习薄弱环节以及知识盲区，得出测评报告。</p>
      <a href="" class="btn btn_1">查看优秀学习方案 &gt;&gt;</a>
    </li>
    <li class="li_3">
      <div class="icon"><img src="/images/ys_3.png"></div>
      <h2 class="txt_yc bt">精英师资团队</h2>
      <p class="dis">慧尚教育专业学科测评师定制学生的综合测试试卷，找出学生的学习薄弱环节以及知识盲区，得出测评报告。</p>
      <a href="" class="btn btn_1">立即咨询优秀老师 &gt;&gt;</a>
    </li>
    <li class="li_4">
      <div class="icon"><img src="/images/ys_4.png"></div>
      <h2 class="txt_yc bt">课程服务</h2>
      <p class="dis">慧尚教育专业学科测评师定制学生的综合测试试卷，找出学生的学习薄弱环节以及知识盲区，得出测评报告。</p>
      <a href="" class="btn btn_1">立即咨询课程辅导  &gt;&gt;</a>
    </li>
  </ul>
</div>
<!-- 广告位 -->
<span class="bk60">&nbsp;</span>
<a href="" style="background:url(images/ad_1.jpg) center no-repeat;" class="ho_add_1">&nbsp;</a>
<!-- slove -->
<div class="w1160 clearfix">
  <span class="bk60">&nbsp;</span>
  <div class="ho_tit_all">
    <a href="">
      <h2>这些问题你是否存在？严重影响学习效率呢？</h2>
      <p>我们有方法，让学习更简单！</p>
    </a>
  </div>
  <span class="bk30">&nbsp;</span>
  <div class="huis_wt_on clearfix">
    <ul class="wt_top clearfix">
      <li>
        <div class="clearfix">
          <span class="num fl">1</span>
          <span class="bt fl">上课听不懂，课下难补充</span>
        </div>
        <div class="dis">
          <p>老师进度快、难度高。</p>
          <p>课下看不懂、作业难完成。</p>
        </div>
        <div class="pic">
          <img src="/images/wt_1.jpg">
        </div>
      </li>
      <li>
        <div class="clearfix">
          <span class="num fl">2</span>
          <span class="bt fl">平时题目会做，考试分数低</span>
        </div>
        <div class="dis">
          <p>老师讲解题目能听懂，基本题</p>
          <p>型会做，考试总是没思路。</p>
        </div>
        <div class="pic">
          <img src="/images/wt_2.jpg">
        </div>
      </li>
      <li>
        <div class="clearfix">
          <span class="num fl">3</span>
          <span class="bt fl">时间紧，坚持难</span>
        </div>
        <div class="dis">
          <p>没有大量时间补习提高</p>
          <p>没有老师讲解自学坚持不长</p>
        </div>
        <div class="pic">
          <img src="/images/wt_3.jpg">
        </div>
      </li>
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
      <li class="li_1">
        <div class="pic"><img src="/images/kc_1.jpg"></div>
        <div class="bt">“卓越人才计划”<br/>系列课程</div>
        <a href="">点击参与</a>
      </li>
      <li class="li_2">
        <div class="pic"><img src="/images/kc_2.jpg"></div>
        <div class="bt">专题精讲<br/>系列课程</div>
        <a href="">点击参与</a>
      </li>
      <li class="li_3">
        <div class="pic"><img src="/images/kc_3.jpg"></div>
        <div class="bt">个性化<br/>精品课程</div>
        <a href="">点击参与</a>
      </li>
      <li class="li_4">
        <div class="pic"><img src="/images/kc_4.jpg"></div>
        <div class="bt">艺体生文化课<br/>本科特训营</div>
        <a href="">点击参与</a>
      </li>
    </ul>
    <span class="bk60">&nbsp;</span>
  </div>
</div>
<!-- kebiao -->
<div class="huis_kb_on">
  <div class="w1160 clearfix">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit_all ho_tit_2">
      <a href="">
        <h2>全年级全科目辅导基础难点全掌握</h2>
        <p>全阶段集中学习，最后一周模考冲刺效果最佳</p>
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="btns clearfix">
      <a href="">小学1对1咨询</a>
      <a href="">初中1对1咨询</a>
      <a href="">高中1对1咨询</a>
    </div>
    <span class="bk60">&nbsp;</span>
    <div class="picScroll-left">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList">
          <li>
            <div class="bt">语文</div>
            <div class="txt">
              <p>拼音认字掌握</p>
              <p>阅读水平提升</p>
              <p>作文强化</p>
            </div>
          </li>
          <li>
            <div class="bt">数学</div>
            <div class="txt">
              <p>运算法则掌握</p>
              <p>计算能力强化</p>
              <p>几何图形认知</p>
              <p>应用题活解</p>
            </div>
          </li>
          <li>
            <div class="bt">英语</div>
            <div class="txt">
              <p>英语兴趣培养
              <p>单词记忆强化</p>
              <p>英语听力提升</p>
              <p>英语口语锻炼</p>
            </div>
          </li>
          <li>
            <div class="bt">奥数</div>
            <div class="txt">
              <p>数学基础强化</p>
              <p>奥数思维培养</p>
              <p>逻辑考题训练</p>
            </div>
          </li>
          <li>
            <div class="bt">美术</div>
            <div class="txt">
              <p>运算法则掌握</p>
              <p>计算能力强化</p>
              <p>几何图形认知</p>
              <p>应用题活解</p>
            </div>
          </li>
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
<a href="" style="background:url(images/ad_2.jpg) center no-repeat;" class="ho_add_1">&nbsp;</a>
<!-- 老师 -->
<div class="w1160 clearfix">
  <div class="huis_tea_on">
    <span class="bk60">&nbsp;</span>
    <div class="ho_tit_all">
      <a href="team.html">
        <h2>能让孩子提分的才是好老师</h2>
        <p>能提分的才是好老师，慧尚学员平均单科提高15.8分</p>
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <ul class="top clearfix">
      <li class="clearfix">
          <div class="icon fl"><img src="/images/ls_1.png"></div>
          <div class="txt fl">超过50名<br/>来自南充名校的教师队伍</div>
      </li>
      <li class="clearfix">
          <div class="icon fl"><img src="/images/ls_2.png"></div>
          <div class="txt fl">教学方法/讲课技巧<br/>等3轮严格筛选</div>
      </li>
      <li class="clearfix">
          <div class="icon fl"><img src="/images/ls_3.png"></div>
          <div class="txt fl">1个老师<br/>拥有1套应试技巧</div>
      </li>
    </ul>
    <span class="bk60">&nbsp;</span>
    <div class="picScroll-left-js"> 
      <div class="bd">
        <ul class="picList">
          <li>
            <a href="team_in.html">
              <div class="txt txt_yc">不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念</div>
              <div class="pic"><img src="/images/tea_1.jpg"></div>
              <h2>郑新宇</h2>
              <p>小学辅导-数学老师</p>
            </a>
          </li>
          <li>
            <a href="team_in.html">
              <div class="txt txt_yc">不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念</div>
              <div class="pic"><img src="/images/tea_1.jpg"></div>
              <h2>郑新宇4</h2>
              <p>小学辅导-数学老师</p>
            </a>
          </li>
          <li>
            <a href="team_in.html">
              <div class="txt txt_yc">不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念</div>
              <div class="pic"><img src="/images/tea_1.jpg"></div>
              <h2>郑新宇5</h2>
              <p>小学辅导-数学老师</p>
            </a>
          </li>
          <li>
            <a href="team_in.html">
              <div class="txt txt_yc">不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念</div>
              <div class="pic"><img src="/images/tea_1.jpg"></div>
              <h2>郑新宇3</h2>
              <p>小学辅导-数学老师</p>
            </a>
          </li>
          <li>
            <a href="team_in.html">
              <div class="txt txt_yc">不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念</div>
              <div class="pic"><img src="/images/tea_1.jpg"></div>
              <h2>郑新宇2</h2>
              <p>小学辅导-数学老师</p>
            </a>
          </li>
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
      <a href="environ.html">
        <h2>慧尚教育全科培训教学环境</h2>
        <p>干净明亮的集训校区让你冲刺学习更有信心</p>
      </a>
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="btns clearfix">
      <a href="environ.html">嘉陵校区</a>
      <a href="environ.html">顺庆校区</a>
      <a href="environ.html">高坪校区</a>
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
          <a rel="images_group" href="/images/hj3.jpg" class="p5 fr"><img src="/images/hj3.jpg"></a>
          <a rel="images_group" href="/images/hj1.jpg" class="p3 fl mR10"><img src="/images/hj1.jpg"></a>
          <div class="w220 fl">
            <a rel="images_group" href="/images/hj1.jpg" class="p4"><img src="/images/hj1.jpg"></a>
            <span class="bk10">&nbsp;</span>
            <a rel="images_group" href="/images/hj2.jpg" class="p4"><img src="/images/hj2.jpg"></a>
          </div>
        </div>
        <span class="bk10">&nbsp;</span>
        <div class="clearfix">
          <div class="in_2 fr">
            <a rel="images_group" href="/images/hj1.jpg" class="p6"><img src="/images/hj1.jpg"></a>
            <span class="bk10">&nbsp;</span>
            <a rel="images_group" href="/images/hj2.jpg" class="p6"><img src="/images/hj2.jpg"></a>
          </div>
          <a rel="images_group" href="/images/hj1.jpg" class="p1 fl mR10"><img src="/images/hj1.jpg"></a>
          <a rel="images_group" href="/images/hj3.jpg" class="p1 fl mR10"><img src="/images/hj3.jpg"></a>
          <a rel="images_group" href="/images/hj2.jpg" class="p1 fl mR10"><img src="/images/hj2.jpg"></a>
        </div>
      </div>
      <div class="w250 fl">
        <a rel="images_group" href="/images/hj1.jpg" class="p1"><img src="/images/hj1.jpg"></a>
        <span class="bk10">&nbsp;</span>
        <a rel="images_group" href="/images/hj2.jpg" class="p2"><img src="/images/hj2.jpg"></a>
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
      <a href="environ.html">
        <h2>2018年慧尚全科课外培训已启动招生</h2>
        <p>报读学员人数较多，个别课程已封班开课</p>
      </a>
    </div>
    <span class="bk80">&nbsp;</span>
    <div class="p1">
      已报名小、中、高培训人数
    </div>
    <div class="p2">
      <span>1</span>
      <span>2</span>
      <span>3</span>
      <span>4</span>
      <span class="num">人</span>
    </div>
    <span class="bk40">&nbsp;</span>
    <div  class="btns"><a href="online.html"><span>立即报名</span></a></div>
    <span class="bk60">&nbsp;</span>
  </div>
</div>
<!--  -->
@endsection