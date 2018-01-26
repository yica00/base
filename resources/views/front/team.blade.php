@extends('front.base')
@section('content')
<!-- banner -->
  
<div class="bread">
  <span class="bk30">&nbsp;</span>
  <h2>Famous teacher team</h2>
  <p class="p1">名师团队</p>
  <p class="p2">&nbsp;</p>
</div>
<!--  -->
<div class="txt_demo_1">
  <div class="w1160 clearfix">
    <ul class="team_list clearfix">
      @foreach( $articles as $article )
      <li>
        <a href="/team/{{$article->id}}">
          <div class="pic"><img src="{{$article->thumbnail}}"></div>
          <h2>{{$article->title}}</h2>
          <p>{{$article->link}}</p>
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
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection