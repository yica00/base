@extends('front.base')
@section('content')
<!-- banner -->
<div id="slideBox" class="slideBox">
  <div class="hd">&nbsp;</div>
  <div class="bd">
    <ul>
      @foreach( $sliders as $slider )
      <li><a href="" style="background:url({{$slider->thumbnail}}) center no-repeat;">&nbsp;</a></li>
      @endforeach
    </ul>
  </div>
  <a class="prev" href="javascript:void(0)"></a>
  <a class="next" href="javascript:void(0)"></a>
</div>
<script type="text/javascript">jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});</script>
<!-- item_out -->
<div class="item_out">
  <span class="bk50">&nbsp;</span>
  <div class="w1160 clearfix">
    <div class="slideTxtBox">
      <div class="hd">
        <ul>
          @foreach( $items as $item )
          <li>
            <a href="/item/category/{{$item->id}}">
              <div class="top">{{$item->title}}</div>
              <div class="bot b1"><span>&nbsp;</span>{{$item->title}}</div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="bd">
        <!-- 1 -->
        @foreach( $items as $item )
        <div class="item_o_box">
          <div class="top clearfix">
            <div class="dl_2 fr">
              <div class="p1">
                <h2>{{$item->title}}</h2>
                {{--<p>Ecological planting</p>--}}
              </div>
              <div class="p2">
               {{$item->introduce}}
              </div>
              <p class="p3"><a href="/item/category/{{$item->id}}">see more +</a></p>
            </div>
            <div class="dl_1 fl">
              <div class="p1" href="/team/{{$item->team->id}}">
                <img src="{{$item->team->photo}}">
              </div>
              <div class="p2">
                <h2>{{$item->team->name}}</h2>
                <p>{{$item->team->title}}</p>
              </div>
              <a class="p3" href="/team/{{$item->team->id}}">专家详情介绍</a>
            </div>
          </div>
          <span class="bk50">&nbsp;</span>
          <div class="bot clearfix">
            <div class="dl_2 fr">
              <div class="p1">
                <h2><a href="/item/{{$item->articles[0]->id}}">{{$item->articles[0]->title}}</a></h2>
                <p>{{$item->articles[0]->introduce}}</p>
              </div>
              <ul class="p2 clearfix">
                @foreach( $item->articles as $k=>$arti )
                  @if( $k > 0 )
                <li><a href="/item/{{$arti->id}}">{{$arti->title}}</a></li>
                  @endif
                @endforeach
              </ul>
            </div>
            <a class="dl_1 fl" href="/item/category/{{$item->id}}">
              <img src="{{$item->thumbnail}}">
            </a>
          </div>
        </div>
        @endforeach
        <!-- 2 -->
      </div>
    </div>
    <script type="text/javascript">jQuery(".slideTxtBox").slide();</script>
  </div>
  <span class="bk80">&nbsp;</span>
</div>
<!-- tean_out -->
<div class="team_out">
  <div class="ho_tit_all">
    <div class="w1160 clearfix">
      <h2><a href="/team">Expert team</a></h2>
      <p><a href="/team">专家团队</a></p>
    </div>
  </div>
  <span class="bk50">&nbsp;</span>
  <div class="w1160 clearfix">
    <div class="picScroll-left" id="picScroll-left-1">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList team_out">
          @foreach( $teams as $team )
          <li class="clearfix">
            <div class="txt fr">
              <h2 class="p1">{{$team->name}}<span> </span></h2>
              <div class="p2">
                <div class="top">
                  {{$team->honor}}
                </div>
                <div class="bot">
                  {{$team->introduce}}
                </div>
              </div>
              <span class="bk20">&nbsp;</span>
              <p class="p3"><a href="tencent://message/?uin={{ session('setting')['qq']  }}&Menu=yes" class="ho_btn_zx  wow shake animated" data-wow-duration="8s" data-wow-iteration="infinite" style="visibility: visible; animation-duration: 8s; animation-iteration-count: infinite; animation-name: shake;"><span>&nbsp;</span>戳一戳，在线咨询</a></p>
            </div>
            <a class="pic fl" href="/team/{{$team->id}}">
              <img src="{{$team->photo}}">
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery("#picScroll-left-1").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click"});
    </script>
  </div>
  <span class="bk80">&nbsp;</span>
</div>
<!-- case_out -->
<div class="case_out">
  <div class="w1160 clearfix">
    <div class="ho_tit_all">
      <h2><a href="/case">Classic case</a></h2>
      <p><a href="/case">经典案例</a></p>
    </div>
    <div class="picScroll-left" id="picScroll-left-2">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList case_out">
          @foreach( $cases as $case )
          <li>
            <a href="/case/{{$case->id}}">
              <div class="p1 clearfix">
                <div class="pic fr">
                  <img src="{{$case->ims[1]}}">
                  <span>after</span>
                </div>
                <div class="pic fl">
                  <img src="{{$case->ims[0]}}">
                  <span>before</span>
                </div>
              </div>
              <div class="bot">
                <div class="p2 clearfix">
                  <div class="txt fr">
                    <h2>基本信息</h2>
                    <p>{{ explode(',',$case->introduce)[0] }}</p>
                  </div>
                  <img src="/images/case_btn.png" class="fl">
                </div>
                <h2 class="p3">治疗方案：{{$case->title}}</h2>
                <p class="p4">{{ explode(',',$case->introduce)[2] }}</p>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery("#picScroll-left-2").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:2,trigger:"click"});
    </script>
    <span class="bk80">&nbsp;</span>
  </div>
</div>
<!-- about_out -->
<div class="w1160 clearfix">
  <span class="bk50">&nbsp;</span>
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
  <script type="text/javascript" src="js/jquery.fancybox-1.3.4.js"></script>
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
  <div class="slideGroup">
    <div class="parHd">
      <ul>
        <li class="li_1">
          <a href="/about/env"><span>&nbsp;</span>环境展示</a>
        </li>
        <li class="li_2">
          <a href="/about/honor"><span>&nbsp;</span>资质荣誉</a>
        </li>
        <li class="li_3">
          <a href="/equipment"><span>&nbsp;</span>先进设备</a>
        </li>
      </ul>
    </div>
    <div class="parBd">
      <!-- 1 -->
      <div class="envir_out clearfix">
        <div class="w280 fl mR10">
          <a rel="images_group" href="@if( isset($envs[0]) ) {{$envs[0]->thumbnail }} @endif" class="p1"><img src="@if( isset($envs[0]) ) {{$envs[0]->thumbnail }} @endif" alt="" /></a>
          <span class="bk10">&nbsp;</span>
          <img src="images/hj_2.jpg" alt="" />
        </div>
        <div class="w510 fl mR10">
          <a rel="images_group" href="@if( isset($envs[1]) ) {{$envs[1]->thumbnail }} @endif" class="p2"><img src="@if( isset($envs[1]) ) {{$envs[1]->thumbnail }} @endif" alt="" /></a>
          <span class="bk10">&nbsp;</span>
          <div class="clearfix">
            <a rel="images_group" href="@if( isset($envs[2]) ) {{$envs[2]->thumbnail }} @endif" class="p3 fr"><img src="@if( isset($envs[2]) ) {{$envs[2]->thumbnail }} @endif" alt="" /></a>
            <a rel="images_group" href="@if( isset($envs[3]) ) {{$envs[3]->thumbnail }} @endif" class="p3 fl"><img src="@if( isset($envs[3]) ) {{$envs[3]->thumbnail }} @endif" alt="" /></a>
          </div>
        </div>
        <div class="w350 fl">
          <a rel="images_group" href="@if( isset($envs[4]) ) {{$envs[4]->thumbnail }} @endif" class="p4"><img src="@if( isset($envs[4]) ) {{$envs[4]->thumbnail }} @endif" alt="" /></a>
          <span class="bk10">&nbsp;</span>
          <a rel="images_group" href="@if( isset($envs[5]) ) {{$envs[5]->thumbnail }} @endif" class="p4"><img src="@if( isset($envs[5]) ) {{$envs[5]->thumbnail }} @endif" alt="" /></a>
        </div>
      </div>
      <!-- 2 -->
      <div class="honor_out clearfix">
        <div class="w350 fl mR10">
          <a rel="images_group" href="@if( isset($honors[0]) ) {{$honors[0]->thumbnail }} @endif" class="p4"><img src="@if( isset($honors[0]) ) {{$honors[0]->thumbnail }} @endif" alt="" /></a>
          <span class="bk10">&nbsp;</span>
          <a rel="images_group" href="@if( isset($honors[1]) ) {{$honors[1]->thumbnail }} @endif" class="p4"><img src="@if( isset($honors[1]) ) {{$honors[1]->thumbnail }} @endif" alt="" /></a>
        </div> 
        <div class="w280 fl  mR10">
          <a rel="images_group" href="@if( isset($honors[2]) ) {{$honors[2]->thumbnail }} @endif" class="p1"><img src="@if( isset($honors[2]) ) {{$honors[2]->thumbnail }} @endif" alt="" /></a>
        </div>      
        <div class="w510 fl">
          <a rel="images_group" href="@if( isset($honors[3]) ) {{$honors[3]->thumbnail }} @endif" class="p2"><img src="@if( isset($honors[3]) ) {{$honors[3]->thumbnail }} @endif" alt="" /></a>
          <span class="bk10">&nbsp;</span>
          <div class="clearfix">
            <a rel="images_group" href="@if( isset($honors[4]) ) {{$honors[4]->thumbnail }} @endif" class="p3 fr"><img src="@if( isset($honors[4]) ) {{$honors[4]->thumbnail }} @endif" alt="" /></a>
            <a rel="images_group" href="@if( isset($honors[5]) ) {{$honors[5]->thumbnail }} @endif" class="p3 fl"><img src="@if( isset($honors[5]) ) {{$honors[5]->thumbnail }} @endif" alt="" /></a>
          </div>
        </div>
      </div>
      <div class="slideBox-sb">
        <a class="sPrev" href="javascript:void(0)"></a>
        <ul class="equip_out clearfix">
          @foreach( $equipments as $equipment )
          <li>
            <a href="/equipment">
              <img src="{{$equipment->thumbnail}}">
              <p>{{$equipment->title}}</p>
            </a>
          </li>
          @endforeach
        </ul>
        <a class="sNext" href="javascript:void(0)"></a>
      </div>
    </div><!-- parBd End -->
  </div>
  <script type="text/javascript">
    /* 内层图片滚动切换 */
    jQuery(".slideGroup .slideBox-sb").slide({ mainCell:"ul",vis:4,prevCell:".sPrev",nextCell:".sNext",effect:"leftLoop"});
    /* 外层tab切换 */
    jQuery(".slideGroup").slide({titCell:".parHd li",mainCell:".parBd"});
  </script>
  <span class="bk50">&nbsp;</span>
</div>
<!-- news_out -->
<div class="news_out">
  <div class="w1160 clearfix">
    <div class="ho_tit_all">
      <h2><a href="/news">news center</a></h2>
      <p><a href="/news">新闻中心</a></p>
    </div>
    <div class="picScroll-left" id="picScroll-left-3">
      <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
      </div>
      <div class="bd">
        <ul class="picList active_list_1">
          @foreach( $newss as $news )
          <li>
            <a href="/news/{{$news->id}}">
              <span class="pic"><img src="{{$news->thumbnail}}" alt="" /></span>
              <h2>{{$news->title}}</h2>
              <p>{{$news->introduce}}</p>
              <span class="btns">more +</span>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    jQuery("#picScroll-left-3").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
    </script>
    <span class="bk50">&nbsp;</span>
    <!-- news_o_list -->
    <div class="news_o_list clearfix">
      <div class="w200 fl mR2">
        <img src="images/zx_1.jpg">
      </div>
      <div class="w120 fl mR2">
        <a href="/news/@if( isset( $noliges[0] )){{$noliges[0]->id}} @endif " style="background: #f05c5c;line-height: 70px;">@if( isset( $noliges[0] )) {{$noliges[0]->title}} @endif</a>
        <span class="mb2">&nbsp;</span>
        <a href="/news/@if( isset( $noliges[1] )){{$noliges[1]->id}} @endif " style="background: #ea69a2;line-height: 48px;">@if( isset( $noliges[1] )) {{$noliges[1]->title}} @endif</a>
      </div>
      <div class="w120 fl mR2">
        <a href="/news/@if( isset( $noliges[2] )){{$noliges[2]->id}} @endif " style="background: #34a9cc;line-height: 50px;">@if( isset( $noliges[2] )) {{$noliges[2]->title}} @endif</a>
        <span class="mb2">&nbsp;</span>
        <a href="/news/@if( isset( $noliges[3] )){{$noliges[3]->id}} @endif " style="background: #ffa801;line-height: 68px;">@if( isset( $noliges[3] )) {{$noliges[3]->title}} @endif</a>
      </div>
      <div class="w140 fl mR2">
        <a href="/news/@if( isset( $noliges[4] )){{$noliges[4]->id}} @endif " style="background: #7a82cd;line-height: 30px;">@if( isset( $noliges[4] )) {{$noliges[4]->title}} @endif</a>
        <span class="mb2">&nbsp;</span>
        <a href="/news/@if( isset( $noliges[5] )){{$noliges[5]->id}} @endif " style="background: #f15d5d;line-height: 56px;">@if( isset( $noliges[5] )) {{$noliges[5]->title}} @endif</a>
        <span class="mb2">&nbsp;</span>
        <a href="/news/@if( isset( $noliges[6] )){{$noliges[6]->id}} @endif " style="background: #7a82cd;line-height: 30px;">@if( isset( $noliges[6] )) {{$noliges[6]->title}} @endif</a>
      </div>
      <div class="w70 fl mR2">
        <a href="/news/@if( isset( $noliges[7] )){{$noliges[7]->id}} @endif " style="background: #34a9cc;line-height: 70px;">@if( isset( $noliges[7] )) {{$noliges[7]->title}} @endif</a>
        <span class="mb2">&nbsp;</span>
        <a href="/news/@if( isset( $noliges[8] )){{$noliges[8]->id}} @endif " style="background: #ea69a2;line-height: 48px;">@if( isset( $noliges[8] )) {{$noliges[8]->title}} @endif</a>
      </div>
      <div class="w200 fl mR2">
        <a href="/news/@if( isset( $noliges[9] )){{$noliges[9]->id}} @endif " style="background: #f15d5d;line-height: 30px;">@if( isset( $noliges[9] )) {{$noliges[9]->title}} @endif</a>
        <span class="mb2">&nbsp;</span>
        <div class="clearfix">
          <a href="/news/@if( isset( $noliges[10] )){{$noliges[10]->id}} @endif " style="background: #34a9cc;line-height: 88px;width: 128px;" class="fr">@if( isset( $noliges[10] )) {{$noliges[10]->title}} @endif</a>
        <a href="/news/@if( isset( $noliges[11] )){{$noliges[11]->id}} @endif " style="background: #ffa801;line-height: 88px;width: 70px;" class="fl">@if( isset( $noliges[11] )) {{$noliges[11]->title}} @endif</a>
        </div>
      </div>
      <div class="w110 fl mR2">
        <a href="/news/@if( isset( $noliges[12] )){{$noliges[12]->id}} @endif " style="background: #7a82cd;line-height: 60px;">@if( isset( $noliges[12] )) {{$noliges[12]->title}} @endif</a>
        <span class="mb2">&nbsp;</span>
        <a href="/news/@if( isset( $noliges[13] )){{$noliges[13]->id}} @endif " style="background: #ffa801;line-height: 58px;">@if( isset( $noliges[13] )) {{$noliges[13]->title}} @endif</a>
      </div>
      <a class="btns fl" href="/news">&nbsp;</a>
    </div>
    <span class="bk80">&nbsp;</span>
  </div>
</div>
<!-- footer -->
@endsection