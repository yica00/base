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
    <meta name="viewport" content="width=1280px;">
    <link href="/css/base.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.source.js"></script>
    <!--[if lt IE 9]><!-->
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <!--[endif]-->
    <!-- 先后 -->
</head>
<body>
<!-- header -->
<div class="header">
    <div class="w1160 clearfix">
        <span class="call fr">{{ session('setting')['fix_phone']  }}</span>
        <a href="/" class="logo fl">&nbsp;</a>
    </div>
</div>
<!-- nav -->
<div class="nav_box">
    <div class="w1160 clearfix">
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


@yield('content')

<!-- footer -->
<div class="footer">
    <div class="w1160 clearfix">
        <div class="top">
            <p class="p1">地址/Add：{{ session('setting')['bases']  }}</p>
            <p class="p1">电话/Tel：{{ session('setting')['fix_phone']  }}</p>
            <p class="p1">邮箱/Mail：{{ session('setting')['qq']  }}@.com</p>
            <p class="p2"><span>&nbsp;</span>400-033-7879</p>
        </div>
    </div>
    <div class="bot">
        COPYRIGHT版权所有 ◎ 2018 广东敢达热能科技有限公司 &nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved.&nbsp;&nbsp;&nbsp;&nbsp;{{ session('setting')['icp']  }}&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="http://www.nctianchen.com/" target="_blank">天辰科技</a>
    </div>
</div>
<!-- float -->
<div class="float_online">
    <a class="on_1" href="tencent://message/?uin={{ session('setting')['qq']  }}&amp;Menu=yes">&nbsp;</a>
    <a class="on_2" href=""><div class="call"><p>电话：{{ session('setting')['fix_phone']  }}</p><p>手机：{{ session('setting')['phone']  }}</p></div></a>
    <a class="on_3" href=""><div class="add"><p>公司地址：{{ session('setting')['bases']  }}/p></div></a>
    <a class="on_4" href=""><div class="ewm"><img src="{{ session('setting')['wx_map']  }}"><p>迪哥官方微信公众号</p></div></a>
    <a class="on_5" href="" onclick="javascript:scroll(0,0)">&nbsp;</a>
</div>
</body>
</html>