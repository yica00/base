@extends('front.base')
@section('content')
  <link rel="stylesheet" href="/css/paginate.css">
<!-- bread -->
<div class="w1160 clearfix"> 
  <div class="bread">
    <h2>工程案例</h2>
    <p class="p1">我们以科技和自然能源为起点，通过产品与服务，让阳光更灿烂，让空气更清新，让环境更健康。</p>
    <p class="p2">Engineering case</p>
  </div>
</div>
<!-- 内容 -->
<div class="w1160 clearfix">
  <div class="txt_demo_1">
    <ul class="case_list clearfix">
      @foreach( $articles as $article )
      <li>
        <a href="/case/{{$article->id}}">
          <div class="pic">
            <img src="{{$article->thumbnail}}" alt="" />
          </div>
          <div class="txt">{{$article->title}}</div>
          <div class="line">&nbsp;</div>
        </a>
      </li>
      @endforeach
    </ul>
    {{$articles->links()}}
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
<!-- footer -->
@endsection('content')