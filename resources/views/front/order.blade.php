@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="in_tit_all">
    <div class="w1160 clearfix">
      <h2><span>contact us</span></h2>
      <p><span>联系我们</span></p> 
    </div>
  </div>
  <ul class="sublist">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 8 )
        @foreach( $cate->articles as $art )
          <li  class="
              @if( $art->link )
          @if( \Illuminate\Support\Facades\Request::getRequestUri() == $art->link ) on @endif
          @else
          @if( $art->id == $id ) on @endif
          @endif
                  ">
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif">{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div class="txt_model_2">
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
        <p><input type="date" value="" name="time" id="" class="input" placeholder="请输入您的预约日期"></p>
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
  </div>  
  <span class="bk80">&nbsp;</span>
</div>
<!-- footer -->
@endsection