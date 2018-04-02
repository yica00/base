@extends('front.base')
@section('content')
  <style>
    form p{
      margin-top: 20px;margin-bottom: 20px;
    }
  </style>
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
  <div class="txt_demo_4">
    <div class="tit">感谢您对我们的信任与关注，请根据下方提示填写您的真实信息，以便我们更好的为您服务！</div>
    <div class="clearfix">
      <div class="box_r fr">
        {{--<div class="form_box">--}}
          {{--<div class="li li_1">--}}
            {{--<input type="text" value="" name="name" id="" class="input" placeholder="请输入您的姓名">--}}
          {{--</div>--}}
          {{--<div class="li li_1">--}}
            {{--<input type="text" value="" name="name" id="" class="input" placeholder="请输入您的电话">--}}
          {{--</div>--}}
          {{--<div class="li li_2">--}}
            {{--<textarea name="content" id="" value="" placeholder="请在此输入您想要留言的内容，我们会第一时间回复您..."></textarea>--}}
          {{--</div>--}}
          {{--<div class="li li_3">--}}
            {{--<button type="submit">立即提交留言内容</button>--}}
          {{--</div>--}}
        {{--</div>--}}
        <form class="form_box" action="/front/message" method="post">
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
          {{  csrf_field() }}
          <p><input type="text" value="" name="name" id="name" class="input" placeholder="姓名"></p>
          <p><input type="text" value="" name="phone" id="phone" class="input" placeholder="手机"></p>
          <p><textarea name="message" class="textarea" id="message" value="" placeholder="留言"></textarea></p>
          <p><button type="submit" id="submit" class="submit_but">确认提交</button></p>
        </form>
        <script>
            $("#submit").click(function(){
                var message = $('#message').val();
                var phone = $('#phone').val();
                var name = $('#name').val();
                if( name == "" ||phone == "" ||message == "" ){
                    alert("请完善内容后再提交");
                    return false;
                }
            });
        </script>

      </div>
      <div class="box_l fl">
        <img src="images/kefu.png">
      </div>
    </div>
  </div>
</div>
<!-- footer -->
@endsection('content')