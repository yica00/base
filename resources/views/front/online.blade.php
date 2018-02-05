@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <h2>在线报名</h2>
</div>
<!-- wap_box -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- star -->
    <div class="txt_model_2">
      <form class="on_form_2" action="/front/message" method="post">
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
          <select id="" name="nianji">
            <option value="0" selected="selected">请选择你想要报读的年级</option>
            <option value="1年级">1年级</option>
            <option value="2年级">2年级</option>
            <option value="3年级">3年级</option>
            <option value="4年级">4年级</option>
            <option value="5年级">5年级</option>
            <option value="6年级">6年级</option>
            <option value="7年级">7年级</option>
            <option value="8年级">8年级</option>
            <option value="9年级">9年级</option>
            <option value="高一">高一</option>
            <option value="高二">高二</option>
            <option value="高三">高三</option>
          </select>
        </p>
        <p>
          <select id="" name="class">
            <option value="0" selected="selected">请选择你想要报读的课程</option>
            <option value="语文">语文</option>
            <option value="数学">数学</option>
            <option value="英语">英语</option>
            <option value="作业辅导">作业辅导</option>
            <option value="物理">物理</option>
            <option value="化学">化学</option>
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
    <!-- end -->
  </div>
</div>

<span class="bk60">&nbsp;</span>
<!-- footer -->
@endsection