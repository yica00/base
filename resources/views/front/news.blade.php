@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <h2>优惠活动</h2>
</div>
<!-- wap_box -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- star -->
    <ul class="newslist clearfix">
      @foreach( $articles as $article )
          <li>
            <a href="/news/{{$article->id}}">
              <span class="pic"><img src="{{$article->thumbnail}}"></span>
              <div class="txt">
                <h2>{{$article->title}}</h2>
                <span>了解更多</span>
              </div>
            </a>
          </li>
        @endforeach
    </ul>
  {{$articles->links()}}
    <!-- end -->
  </div>
</div>


<!-- footer -->
@endsection