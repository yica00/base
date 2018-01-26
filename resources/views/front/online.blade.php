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
<div class="txt_demo_1">
  <div class="w1160 clearfix">

      <form class="on_form" action="/front/message" method="post">
          {{  csrf_field() }}
          @if (count($errors) > 0)
              <div style="color: red">
                  <ul>
                      @if( is_object($errors) )
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      @else
                          {{ $errors }}
                      @endif
                  </ul>
              </div>
          @endif
          <p><input type="text" value="" name="name" id="name" class="input" placeholder="请输入您的姓名"></p>
          <p><input type="text" value="" name="phone" id="phone" class="input" placeholder="请输入您的电话"></p>
          <p>
              <select id="" name="class">
                  <option value="0" selected="selected">请选择你想要报读的课程</option>
                  <option value="语文">语文</option>
                  <option value="数学">数学</option>
                  <option value="英语">英语</option>
                  <option value="奥数">奥数</option>
              </select>
          </p>
          <p><textarea name="content" class="textarea" id="" value="" placeholder="如何您还有其他问题，可以在这里给我们留言"></textarea></p>
          <p><button type="submit" class="submit_but">确认提交</button></p>
      </form>
      <script>
          $('.submit_but').click(function () {
              var name = $('#name').val();
              var phone = $('#phone').val();

              if( phone == "" || name == "" ){
                  alert("姓名和电话必须填写");
                  return false;
              }

              if( isPhoneNo(phone) == false ){
                  alert("你输入的手机号格式不正确！")
                  return false;
              }
          });

          $('#vaptcha').click(function () {
              $(this).attr('src','/vaptcha?'+ Math.random());
          });

          function isPhoneNo(phone) {
              var pattern = /^1[34578]\d{9}$/;
              return pattern.test(phone);
          }
      </script>

  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection