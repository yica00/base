@extends('front.base')
@section('content')
<!-- bread -->
<div class="w1160 clearfix"> 
  <div class="bread">
    <h2>联系我们</h2>
    <p class="p1">我们以科技和自然能源为起点，通过产品与服务，让阳光更灿烂，让空气更清新，让环境更健康。</p>
    <p class="p2">contact us</p>
  </div>
  <!-- sub-menu -->
  <ul class="sub-menu-con clearfix">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 8 )
        @foreach( $cate->articles as $art )
          <li class=" @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) active @endif">
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<!-- 内容 -->
<div class="w1160 clearfix">
  <div class="txt_demo_5">
    <div class="top clearfix">
      <div class="code fr">
        <img src="{{ session('setting')['wx_map']  }}">
        <h3>迪歌电器官方微信</h3>
        <p>扫描上面的二维码，关注我吧</p>
      </div>
      <div class="box_l fl">
        <h2 class="tit" style="margin-top: 50px" >广东敢达热能科技有限公司</h2>
        <div class="dis">
          <p>地址：{{ session('setting')['bases']  }}</p>
          <p>电话：{{ session('setting')['fix_phone']  }}</p>
          <p>手机：{{ session('setting')['phone']  }}</p>
          {{--<p>传真：+86（20）82199901</p>--}}
          {{--<p>邮箱：510530@qq.com</p>--}}
          {{--<p>网址：www.devotiongroup.com</p>--}}
        </div>
      </div>
    </div>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
      <div class="con_map" id="dituContent-3"></div>
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
              var point = new BMap.Point({{  explode(',',session('setting')['bases_xy'])[0] }},{{  explode(',',session('setting')['bases_xy'])[1] }});//定义一个中心点坐标
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
          var markerArr = [{title:"迪歌电器",content:"座机：{{ session('setting')['fix_phone']  }}<br/>电话：{{ session('setting')['phone']  }}<br/>地址：{{ session('setting')['bases']  }}",point:"{{  explode(',',session('setting')['bases_xy'])[0] }}|{{  explode(',',session('setting')['bases_xy'])[1] }}",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
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
  </div>
</div>
<!-- footer -->
@endsection('content')