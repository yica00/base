@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">联系方式<span class=""></span></a>
    <a class="cd-bouncy-nav-trigger col-xs-1" href="#0"><span class="menu">&nbsp;</span></a>
    <div id="overlay"></div>
    <div id="win">
      <ul class="dropdown">
        <li><a href="/wap/contact">联系方式</a></li>
        <li><a href="/wap/order">预约挂号</a></li>
      </ul>
    </div>
  </div>

@endsection
<!-- banner -->
@section('content')
<!-- start -->
<div class="txt_mode_2">
  <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
  <div style="width:100%;height:12rem;" id="dituContent-3"></div>
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
          var map = new BMap.Map("dituContent-3");//在百度地图容器中创建一个地图
          var point = new BMap.Point({{ explode(',',session('setting')['bases_xy'])[0] }},{{ explode(',',session('setting')['bases_xy'])[1] }});//定义一个中心点坐标
          map.centerAndZoom(point,14);//设定地图的中心点和坐标并将地图显示在地图容器中
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
      var markerArr = [{title:"美健口腔",content:"座机：{{ session('setting')['fix_phone']  }}<br/>电话：{{ session('setting')['phone']  }}<br/>地址：{{ session('setting')['bases']  }}",point:"{{ explode(',',session('setting')['bases_xy'])[0] }}|{{ explode(',',session('setting')['bases_xy'])[1] }}",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
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
  <span class="bk50">&nbsp;</span>
  <div class="contact_box">
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
      <dd>周边多条公交路线环绕（2路、15路、31路、40路公交车直达，依城郡对面）公交车到达潆华北路二段，下车后抬头就能看到医院招牌，就在马路对面</dd>
    </dl>
    {{--<dl>--}}
      {{--<dt>微信公众号</dt>--}}
      {{--<dd><img src="{{ session('setting')['wx_map']  }}"></dd>--}}
    {{--</dl>--}}
  </div>
</div>
<!-- end -->
@endsection