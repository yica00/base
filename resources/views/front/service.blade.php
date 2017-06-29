@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <div class="w1160 clearfix">
      <div class="in_tit">
        <h2>--&nbsp;&nbsp;营销服务&nbsp;&nbsp;--</h2>
        <p>Marketing services</p>
      </div>
      <!-- <p class="page_nav clearfix">
          <a href="about.html" class="on">星维简介</a><a href="about.html">企业文化</a><a href="office.html">办公环境</a><a href="office.html">优秀团队</a><a href="office.html">荣誉资质</a>
      </p> -->
  </div>  
</div> 
<!-- wap_box -->
<div class="wap_box">
  <span class="bk30">&nbsp;</span>
  <div class="w1160 clearfix">
    <!-- 内容 -->
    <div  class="base_top">
      {!! $article->comtent !!}
    </div>
    <span class="bk30">&nbsp;</span>
    <div class="sub_con_t clearfix">
      <div class="dl_l fr">
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
          <form class="on_form" action="/front/message" method="post">
            {{  csrf_field() }}
            <p><input type="text" value="" name="name" id="" class="input" placeholder="姓名"></p>
            <p><input type="text" value="" name="email" id="" class="input" placeholder="邮箱"></p>
            <p><input type="text" value="" name="phone" id="" class="input" placeholder="手机"></p>
            <p><textarea name="message" class="textarea" id="" value="" placeholder="留言"></textarea></p>
            <p><button type="submit" class="submit_but">&nbsp;</button></p>
          </form>
        </div>
        <div class="img fl">
          <img src="images/quote.jpg">
        </div>
    </div>
    <!-- end -->
  </div>  
  <span class="bk60">&nbsp;</span>
</div>
<!-- contact_out -->
@endsection