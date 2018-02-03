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
        <div class="call fr">{{ session('setting')['fix_phone']  }}</div>
        <a href="/" class="logo fl">&nbsp;</a>
        <div class="nav_box fr">
            <ul id="nav" class="nav clearfix">
                @foreach( session('header_nav') as $navs )
                    <li class="nLi @if( session('urls') == $navs->link )on @endif">
                        <h3><a href="{{$navs->link}}">{{$navs->title}}</a></h3>
                        @if( $navs->articles )
                            <ul class="sub">
                                @foreach( $navs->articles as $arti )
                                    <li><a href="@if( $arti->link ){{$arti->link}}@else{{$navs->link}}/category/{{$arti->id}}@endif">{{$arti->title}}</a></li>
                                @endforeach
                            </ul>
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
</div>
<span class="bk80">&nbsp;</span>


@yield('content')

<!-- footer -->
<div class="footer">
    <span class="bk40">&nbsp;</span>
    <div class="w1160 clearfix">
        <div class="clearfix">
            <div class="ewm fr">
                <div class="clearfix">
                    <img src="{{ session('setting')['wx_map']  }}" class="p1 fr">
                    <div class="p2 fl">
                        <p>更多教育资讯，</p>
                        <p>扫一扫关注公众号</p>
                    </div>
                </div>
            </div>
            <a href="/contact/order" class="fot_lg fl">&nbsp;</a>
            <div class="call fl"><h2>{{ session('setting')['fix_phone']  }}</h2><p>老师咨询电话</p></div>
            <div class="zixun fl">
                <div class="clearfix">
                    <a class="p1 fr" href="/contact/order">
                        <img src="/images/zaix.png">
                    </a>
                    <div class="p2 fl">
                        <p>南充一对一辅导</p>
                        <p>假期班在线咨询</p>
                        <p>在线老师免费答疑</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid"><img src="/images/slogn.png"></div>
    </div>
    <div class="bot">
        <p>地址: {{ session('setting')['bases']  }}</p>
        <p>邮箱: {{ session('setting')['qq']  }}@qq.com</p>
        <p> COPYRIGHT ©2018 ALL RIGHTS RESERVED &nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;{{ session('setting')['icp']  }}&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a></p>
    </div>
</div>
<!-- float_fix -->
<div class="float_fix">
    <div class="top">
        <a href="/contact/order" class="a5">在线报名</a>
        <a href="/contact/order" class="a1">小学辅导</a>
        <a href="/contact/order" class="a2">初中辅导</a>
        <a href="/contact/order" class="a3">高中辅导</a>
        <a href="/contact/way" class="a4">校区地址</a>
        <div class="call">
            <p>咨询热线</p>
            <p>{{ session('setting')['fix_phone']  }}</p>
        </div>
    </div>
    <a class="bot" href="/contact/order" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
<!-- time -->
<script src="/js/wow.min.js"></script>
<script src="/js/swiper-3.3.1.jquery.min.js"></script>
<script src="/js/swiper.animate1.0.2.min.js"></script>
<script src="/js/global.js"></script>
</body>
</html>