@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;联系我们&nbsp;&nbsp;--</h2>
        <p>contact us</p>
      </div>
      <p class="page_nav clearfix">
          <a href="/contact">在线留言</a><a href="/way" class="on">联系方式</a>
      </p>
  </div>  
</div>
<!-- wap_box -->
<div class="wap_box">
  <div class="con_in_map"><div style="width:100%;height:400px;" id="dituContent_2"></div></div>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="contact_way">
      <dl>
        <dt>联系人</dt>
        <dd>{{ session('setting')['contact']  }}</dd>
      </dl>
      <dl>
        <dt>电话</dt>
        <dd>{{ session('setting')['fix_phone']  }}</dd>
      </dl>
      <dl>
        <dt>手机</dt>
        <dd>{{ session('setting')['phone']  }}</dd>
      </dl>
      <dl>
        <dt>QQ&nbsp;</dt>
        <dd>{{ session('setting')['qq']  }}</dd>
      </dl>
      <dl>
        <dt>传真</dt>
        <dd>{{ session('setting')['fax']  }}</dd>
      </dl>
      <dl>
        <dt>邮编</dt>
        <dd>637000</dd>
      </dl>
      <dl class="big">
        <dt>地址</dt>
        <dd>{{ session('setting')['bases']  }}</dd>
      </dl>
      
    </div>
    
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>

<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent_2");//在百度地图容器中创建一个地图
        var point = new BMap.Point(106.08229,30.803773);//定义一个中心点坐标
        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:0});
        map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }

    //标注点数组
    var markerArr = [{title:"四川虹霖西奥电梯有限公司",content:"地址：南充市顺庆区北湖路罗曼威森308<br/>电话：0817-2519567",point:"106.081962|30.803781",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
    ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                borderColor:"#808080",
                color:"#333",
                cursor:"pointer"
            });

            (function(){
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",function(){
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                    _marker.getLabel().show();
                })
                label.addEventListener("click",function(){
                    _marker.openInfoWindow(_iw);
                })
                if(!!json.isOpen){
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }

    initMap();//创建和初始化地图
</script>
<!-- footer -->
@endsection