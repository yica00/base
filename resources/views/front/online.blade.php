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
  <li><a href="contact.html">人才招聘</a></li>
              <li class="on"><a href="online.html">在线报名</a></li>
              <li><a href="way.html">联系方式</a></li>       
</ul>
<!--  -->
<div class="txt_demo_1">
  <div class="w1160 clearfix">
    <form class="on_form" action="" method="post">
      <p><input type="text" value="" name="name" id="" class="input" placeholder="请输入您的真实姓名"></p>
      <p><input type="text" value="" name="email" id="" class="input" placeholder="请输入您的手机号码"></p>
      <p><select id="" name=""> 
            <option value="0" selected="selected">请选择你想要报读的课程</option>
            <option value="1">语文</option> 
            <option value="2">数学</option> 
            <option value="3">英语</option> 
            <option value="4">奥数</option> 
          </select></p>
      <p><textarea name="content" class="textarea" id="" value="" placeholder="留言"></textarea></p>
      <p><button type="submit" class="submit_but">确认提交</button></p>
    </form>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection