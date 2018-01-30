@extends('front.base')
@section('content')
<!-- banner -->
  
<div class="bread">
  <span class="bk30">&nbsp;</span>
  <h2>contact us</h2>
  <p class="p1">联系我们</p>
  <p class="p2">&nbsp;</p>
</div>
<ul class="sublist">
  @foreach( session('header_nav') as $cate )
    @if( $cate->id == 7 )
      @foreach( $cate->articles as $art )
        <li class="@if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) on @endif">
          <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
        </li>
      @endforeach
    @endif
  @endforeach
</ul>
<!--  -->
<div class="txt_demo_5">
  <div class="w1160 clearfix">
    <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.3&key=087c3df010eea17be1efc73e231109e6"></script>


    {{--<div id="container" tabindex="0" style="width: 100%;height: 300px"></div>--}}
    <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.3&key=087c3df010eea17be1efc73e231109e6"></script>
    <div id="container"  style="width: 100%;height: 300px"></div>
    <script type="text/javascript">
        //地图初始化时，在地图上添加一个marker标记,鼠标点击marker可弹出自定义的信息窗体
        var map = new AMap.Map("container", {
            resizeEnable: true,
            center: [106.074104,30.795735],
            zoom: 16
        });
        addMarker();
        //添加marker标记
        function addMarker() {
            map.clearMap();
            var marker = new AMap.Marker({
                map: map,
                position: [106.074104,30.795735]
            });
            //鼠标点击marker弹出自定义的信息窗体
            AMap.event.addListener(marker, 'click', function() {
                infoWindow.open(map, marker.getPosition());
            });
        }

        //实例化信息窗体
        var title = '慧尚教育',
            content = [];
        content.push("<div style='border:solid 1px;padding:5px;width:200px' >地址：{{session('setting')['bases']}}");
        content.push("电话：{{ session('setting')['fix_phone'] }} </div> ");
        var infoWindow = new AMap.InfoWindow({
            isCustom: true,  //使用自定义窗体
            content: createInfoWindow(title, content.join("<br/>")),
            offset: new AMap.Pixel(110, -15)
        });

        //构建自定义信息窗体
        function createInfoWindow(title, content) {
            var info = document.createElement("div");
            info.className = "info";

            //可以通过下面的方式修改自定义窗体的宽高
            //info.style.width = "400px";
            // 定义顶部标题
            var top = document.createElement("div");
            var titleD = document.createElement("div");
            var closeX = document.createElement("img");
            top.className = "info-top";
            titleD.innerHTML = title;
            closeX.src = "https://webapi.amap.com/images/close2.gif";
            closeX.onclick = closeInfoWindow;

            top.appendChild(titleD);
            top.appendChild(closeX);
            info.appendChild(top);

            // 定义中部内容
            var middle = document.createElement("div");
            middle.className = "info-middle";
            middle.style.backgroundColor = 'white';
            middle.innerHTML = content;
            info.appendChild(middle);

            // 定义底部内容
            var bottom = document.createElement("div");
            bottom.className = "info-bottom";
            bottom.style.position = 'relative';
            bottom.style.top = '0px';
            bottom.style.margin = '0 auto';
            var sharp = document.createElement("img");
            sharp.src = "https://webapi.amap.com/images/sharp.png";
            bottom.appendChild(sharp);
            info.appendChild(bottom);
            return info;
        }

        //关闭信息窗体
        function closeInfoWindow() {
            map.clearInfoWindow();
        }

    </script>



  <div class="w1160 clearfix">
    <div class="contact_way">
      <dl>
        <dt>报名热线</dt>
        <dd>{{ session('setting')['fix_phone']  }}</dd>
      </dl>
      <dl>
        <dt>咨询热线</dt>
        <dd>{{ session('setting')['phone']  }}</dd>
      </dl>
      @foreach( $articles as $article )
      <dl class="big">
        <dt>{{$article->title}}</dt>
        <dd>{{$article->introduce}}</dd>
      </dl>
      @endforeach

    </div>
    {{--<script type="text/javascript">--}}
    {{--//创建和初始化地图函数：--}}
    {{--function initMap(){--}}
        {{--createMap();//创建地图--}}
        {{--setMapEvent();//设置地图事件--}}
        {{--addMapControl();//向地图添加控件--}}
        {{--addMarker();//向地图中添加marker--}}
    {{--}--}}
    {{----}}
    {{--//创建地图函数：--}}
    {{--function createMap(){--}}
        {{--var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图--}}
        {{--var point = new BMap.Point({{ explode( ',',session('setting')['bases_xy'] )[0] }},{{ explode( ',',session('setting')['bases_xy'] )[1] }});//定义一个中心点坐标--}}
        {{--map.centerAndZoom(point,14);//设定地图的中心点和坐标并将地图显示在地图容器中--}}
        {{--window.map = map;//将map变量存储在全局--}}
    {{--}--}}
    {{----}}
    {{--//地图事件设置函数：--}}
    {{--function setMapEvent(){--}}
        {{--map.enableDragging();//启用地图拖拽事件，默认启用(可不写)--}}
        {{--map.enableScrollWheelZoom();//启用地图滚轮放大缩小--}}
        {{--map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)--}}
        {{--map.enableKeyboard();//启用键盘上下左右键移动地图--}}
    {{--}--}}
    {{----}}
    {{--//地图控件添加函数：--}}
    {{--function addMapControl(){--}}
        {{--//向地图中添加缩放控件--}}
  {{--var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});--}}
  {{--map.addControl(ctrl_nav);--}}
        {{--//向地图中添加缩略图控件--}}
  {{--var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:0});--}}
  {{--map.addControl(ctrl_ove);--}}
        {{--//向地图中添加比例尺控件--}}
  {{--var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});--}}
  {{--map.addControl(ctrl_sca);--}}
    {{--}--}}
    {{----}}
    {{--//标注点数组--}}
    {{--var markerArr = [{title:"慧尚教育",content:"{{ session('setting')['bases']  }}",point:"{{ explode( ',',session('setting')['bases_xy'] )[0] }}|{{ explode( ',',session('setting')['bases_xy'] )[1] }}",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}--}}
     {{--];--}}
    {{--//创建marker--}}
    {{--function addMarker(){--}}
        {{--for(var i=0;i<markerArr.length;i++){--}}
            {{--var json = markerArr[i];--}}
            {{--var p0 = json.point.split("|")[0];--}}
            {{--var p1 = json.point.split("|")[1];--}}
            {{--var point = new BMap.Point(p0,p1);--}}
      {{--var iconImg = createIcon(json.icon);--}}
            {{--var marker = new BMap.Marker(point,{icon:iconImg});--}}
      {{--var iw = createInfoWindow(i);--}}
      {{--var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});--}}
      {{--marker.setLabel(label);--}}
            {{--map.addOverlay(marker);--}}
            {{--label.setStyle({--}}
                        {{--borderColor:"#808080",--}}
                        {{--color:"#333",--}}
                        {{--cursor:"pointer"--}}
            {{--});--}}
      {{----}}
      {{--(function(){--}}
        {{--var index = i;--}}
        {{--var _iw = createInfoWindow(i);--}}
        {{--var _marker = marker;--}}
        {{--_marker.addEventListener("click",function(){--}}
            {{--this.openInfoWindow(_iw);--}}
          {{--});--}}
          {{--_iw.addEventListener("open",function(){--}}
            {{--_marker.getLabel().hide();--}}
          {{--})--}}
          {{--_iw.addEventListener("close",function(){--}}
            {{--_marker.getLabel().show();--}}
          {{--})--}}
        {{--label.addEventListener("click",function(){--}}
            {{--_marker.openInfoWindow(_iw);--}}
          {{--})--}}
        {{--if(!!json.isOpen){--}}
          {{--label.hide();--}}
          {{--_marker.openInfoWindow(_iw);--}}
        {{--}--}}
      {{--})()--}}
        {{--}--}}
    {{--}--}}
    {{--//创建InfoWindow--}}
    {{--function createInfoWindow(i){--}}
        {{--var json = markerArr[i];--}}
        {{--var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");--}}
        {{--return iw;--}}
    {{--}--}}
    {{--//创建一个Icon--}}
    {{--function createIcon(json){--}}
        {{--var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})--}}
        {{--return icon;--}}
    {{--}--}}
    {{----}}
    {{--initMap();//创建和初始化地图--}}
{{--</script>--}}
  <span class="bk30">&nbsp;</span>
  </div>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection