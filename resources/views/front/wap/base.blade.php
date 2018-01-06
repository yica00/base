<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>{{ session('setting')['web_name']  }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Content-Type" content="text; charset=UTF-8">
    <meta name="description" content="{{ session('setting')['description']  }}">
    <meta name="keywords" content="{{ session('setting')['keywords']  }}">
    <!-- base -->

    <script type="text/javascript" src="/js/wap/jquery-1.9.1.min.js"></script>
    <script src="/js/wap/TouchSlide.1.1.js"></script>
    <script src="/js/wap/touchslider.js"></script>
    <script src="/js/wap/bootstrap.min.js"></script>
    <script src="/js/wap/main.js"></script>
    <!-- animate -->
    <link href="/css/wap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/wapeaf-demo.css">
    <link rel="stylesheet" href="/css/wap/swiper.min.css">
    <link href="/css/wap/base.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/js/wap/jquery.touchSwipe.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/js/wap/respond.min.js"></script>
    <script src="/js/wap5shiv.min.js"></script>
    <![endif]-->
    <script src="/js/wap/font.js"></script>
    <script>
        var _hmt = _hmt || [];
        window.onload = function (){
            var oWin = document.getElementById("win");
            var oLay = document.getElementById("overlay");
            var oBtn = document.getElementById("popmenu");
            var oClose = document.getElementById("close");
            oBtn.onclick = function (){
                oLay.style.display = "block";
                oWin.style.display = "block"
            };
            oLay.onclick = function (){
                oLay.style.display = "none";
                oWin.style.display = "none"
            }
        };
    </script>

</head>
<body>

@yield('header')

<div class="cd-bouncy-nav-modal">
    <nav>
        <ul class="cd-bouncy-nav">
            <li><a href="/wap">网站首页</a></li>
            <li><a href="/wap/about">品牌中心</a></li>
            <li><a href="/wap/news">新闻中心</a></li>
            <li><a href="/wap/item">口腔项目</a></li>
            <li><a href="/wap/team">专家团队</a></li>
            <li><a href="/wap/case">经典案例</a></li>
            <li><a href="/wap/equip">先进设备</a></li>
            <li><a href="/wap/contact">联系我们</a></li>
        </ul>
    </nav>
    <a href="#0" class="cd-close">关闭</a>
</div>

@yield('content')

<!-- footer -->
<div class="footer">
    <div class="ewm">
        <img src="{{ session('setting')['wx_map']  }}">
        <p>扫描二维码关注我们</p>
    </div>
    <dl>
        <dt>预约咨询</dt>
        <dd>座机：{{ session('setting')['fix_phone']  }}</dd>
        <dd>手机：{{ session('setting')['phone']  }}</dd>
    </dl>
    <dl>
        <dt>门诊时间</dt>
        <dd>08:30-20:00（无节假日医院）</dd>
    </dl>
    <dl>
        <dt>门诊地址</dt>
        <dd>{{ session('setting')['bases']  }}</dd>
        <dd>有宽敞的停车场地！车位充裕！无需任何停车费用！</dd>
    </dl>
    <dl>
        <dt>交通便利</dt>
        <dd>周边多条公交路线环绕（2路、15路、31路、36路、40路公交车直达，依城郡对面）公交车到达潆华北路二段，下车后抬头就能看到医院招牌，就在马路对面</dd>
    </dl>
    <div class="bot">
        <p>版权所有 © 美健口腔 Copyright MeiJian All Rights Reserved </p>
        <p>技术支持 ：<a href="http://www.scnuohang.com/" target="_blank">诺航科技</a></p>
    </div>
</div>
<a class="to-top clearfix"><img src="/images/wap/to-top.svg" class="fr"></a>
<script src="/js/wap/jquery.toTop.min.js"></script>
<script>
    jQuery(function($){
        // Plugin activation (basic)
        // $('.to-top').toTop();

        // Plugin activation with options
        $('.to-top').toTop({
            //options with default values
            autohide: true,  //boolean 'true' or 'false'
            offset: 420,     //numeric value (as pixels) for scrolling length from top to hide automatically
            speed: 500,      //numeric value (as mili-seconds) for duration
            right: 20,       //numeric value (as pixels) for position from right
            bottom:80       //numeric value (as pixels) for position from bottom
        });
    });
</script>

<script src="/js/wap/swiper.min.js"></script>
<!-- Initialize Swiper -->
<!-- 1 -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
</script>
<!-- 2 -->
<script>
    var swiper = new Swiper('.swiper-container-2', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
</script>
<!-- 3 -->
<script>
    var swiper = new Swiper('.swiper-container-3', {
        pagination: '.swiper-pagination',
        effect: 'flip',
        grabCursor: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
    });
</script>
</body>
</html>
