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
    <div class="sub_human clearfix">
        <div class="txt">
          <div class="t1">
              <h2>您的加入</h2>
            <p>将为我们带来更多的精彩!</p>
          </div>
          <div class="t2">
              <h2>在这里，您将得到</h2>
            <p>持续成长的环境和空间；持续提升的个人素质和技能；持续展现的自我价值和人生梦想！</p>
            <p>如有意向，简历请发送至邮箱：<span class="col_1e51ac">{{ session('setting')['qq']  }}@qq.com</span></p>
          </div>
          <ul class="list">
              @foreach( $articles as $article )
            <li>
              <h2 class="dt clearfix"><span class="num">[{{$article->introduce}}]</span><span class="name">{{$article->title}}</span></h2>
              <div class="dd">
                {!! $article->comtent !!}
              </div>
            </li>
                @endforeach
          </ul>
          {{--<div class="pageJump clearfix">--}}
              {{--<div class="number">--}}
                  {{--<span class="disabled"><a href="">上一页</a></span>--}}
                  {{--<span class="disabled"><a href="">1</a></span>--}}
                  {{--<span class="disabled"><a href="">2</a></span>--}}
                  {{--<span class="disabled"><a href="">3</a></span>--}}
                  {{--<span class="disabled"><a href="">下一页</a></span>--}}
              {{--</div>--}}
          {{--</div>--}}
        </div>
    </div>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection