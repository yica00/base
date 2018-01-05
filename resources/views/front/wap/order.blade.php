@extends('front.wap.base')
@section('header')
  <div class="header">
    <a href="/wap" class="col-xs-1"><span class="back">&nbsp;</span></a>
    <a class="col-xs-10 ui-title tit" id="popmenu">预约挂号<span class=""></span></a>
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
<div class="txt_model_3">
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
  <form class="on_form_2" action="/front/message" method="post">
    {{  csrf_field() }}
        <p><input type="text" value="" name="name" id="name" class="input" placeholder="请输入您的姓名"></p>
        <p><input type="text" value="" name="phone" id="phone" class="input" placeholder="请输入您的电话"></p>
        <p><input  value="" name="time"  type="date" class="input" placeholder="请输入您的预约日期"></p>
        <p>
          <select id="" name="item">
            <option value="0" selected="selected">请选择项目</option>
            @foreach( session('header_nav') as $cate )
              @if( $cate->id == 4 )
                @foreach( $cate->articles as $art )
                  <option value="{{$art->title}}">{{$art->title}}</option>
                @endforeach
              @endif
            @endforeach
          </select>
        </p>
        <p><textarea name="content" class="textarea" id="" value="" placeholder="如何您还有其他问题，可以在这里给我们留言，我们会尽快联系您！"></textarea></p>
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
@endsection