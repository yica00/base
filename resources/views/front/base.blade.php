<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<!-- saved from url=(0024)http://www.clearedu.net/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{ session('setting')['web_name']  }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="{{ session('setting')['keywords']  }}">
    <meta name="description" content="{{ session('setting')['description']  }}">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- 适应手机 -->
    <meta name="viewport" content="width=1160px;">
    <!-- <meta name="viewport" content="width=1280px;"> -->
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link href="/css/base.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.source.js"></script>
    <!--[if lt IE 9]>
      <!-->
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <!--[endif]-->
    <!-- 先后 -->
</head>
<body>
<!-- header -->
<div class="header">
    <div class="w1160 clearfix">
        <a href="/contact/order" class="btn btn_2 fr">预约挂号</a>
        <span class="btn btn_1 fr">联系电话：{{ session('setting')['fix_phone']  }}</span>
        <a href="/" class="logo fl">&nbsp;</a>
    </div>
</div>
<!-- nav -->
<div class="nav_box">
    <div class="w1160">
        <ul id="nav" class="nav clearfix">
            @foreach( session('header_nav') as $k=>$navs )
                <li class="nLi @if( session('urls') == $navs->link )on @endif">
                    <h3><a href="{{$navs->link}}">{{$navs->title}}<span>{{$navs->introduce}}</span></a></h3>
                    @if( $navs->articles )
                        @if( $k == 3 )
                            <ul class="sub">
                                @foreach( $navs->articles as $arti )
                                    <li>
                                        <a href="{{$navs->link}}/category/{{$arti->id}}">{{$arti->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                         @else
                        <ul class="sub">
                            @foreach( $navs->articles as $arti )
                                <li>
                                    <a href="@if( $arti->link ){{$arti->link}}@else{{$navs->link}}/category/{{$arti->id}}@endif">{{$arti->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                        @endif
                    @endif
                </li>
            @endforeach
        </ul>
        <script id="jsID" type="text/javascript">
            jQuery("#nav").slide({
                type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
                titCell:".nLi", //鼠标触发对象
                targetCell:".sub", //titCell里面包含的要显示/消失的对象
                effect:"slideDown", //targetCell下拉效果
                delayTime:300 , //效果时间
                triggerTime:0, //鼠标延迟触发时间（默认150）
                returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
            });
        </script>
    </div>
</div>


@yield('content')

<!-- footer -->
<div class="footer">
    <div class="w1160 clearfix">
        <div class="ewm fr">
            <div class="clearfix">
                <div class="txt fr">
                    <h2>扫一扫，关注我们</h2>
                    <div class="p1">
                        <div class="btns">
                            <a href="tencent://message/?uin={{ session('setting')['qq']  }}&Menu=yes" target="_blank" class="btn_1 mR10"><span>&nbsp;</span></a>
                            <a  class="btn_2 ewm  mR10"><span>&nbsp;</span><img src="{{ session('setting')['wx_map']  }}"></a>
                            <a href="/contact/order" class="btn_3  mR10"><span>&nbsp;</span></a>
                            <a href="/contact" class="btn_4"><span>&nbsp;</span></a>
                        </div>
                    </div>
                    <p class="p2">门诊时间（无节假日医院）08:30-20:00</p>
                </div>
                <img src="{{ session('setting')['wx_map']  }}" class="pic fl">
            </div>
        </div>
        <div class="fot_logo fl">
            <a href="/">&nbsp;</a>
        </div>
        <div class="add fl">
            <dl>
                <dt>预约咨询</dt>
                <dd>{{ session('setting')['fix_phone']  }}</dd>
            </dl>
            <span class="bk10">&nbsp;</span>
            <dl>
                <dt>门诊地址</dt>
                <dd>{{ session('setting')['bases']  }}</dd>
            </dl>
        </div>
    </div>
    <span class="bk40">&nbsp;</span>
    <div class="bot">
        <div class="w1160 clearfix">
            copyright版权所有◎2017 &nbsp;&nbsp;美健口腔&nbsp;&nbsp;{{ session('setting')['icp']  }}&nbsp;&nbsp;技术支持：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a>
        </div>
    </div>
</div>
<!-- float -->
<div class="float_onlie">
    <a class="on_1" href="/contact">&nbsp;</a>
    <a class="on_2 ph" href=""><em>电话：{{ session('setting')['fix_phone']  }}<br>手机：{{ session('setting')['phone']  }}</em></a>
    <a class="on_3 add" href=""><em>{{ session('setting')['bases']  }}</em></a>
    <a class="on_4 ewm" href=""><em><img src="{{ session('setting')['wx_map']  }}"></em></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
<!-- time -->
<script src="/js/wow.min.js"></script>
<script src="/js/swiper-3.3.1.jquery.min.js"></script>
<script src="/js/swiper.animate1.0.2.min.js"></script>
<script src="/js/global.js"></script>
</body>
</html>