@extends('front.base')
@section('content')
  <link rel="stylesheet" href="/css/paginate.css">
<!-- banner -->
  
<div class="bread">
  <span class="bk30">&nbsp;</span>
  <h2>Preferential activities</h2>
  <p class="p1">优惠活动</p>
  <p class="p2">&nbsp;</p>
</div>
<!--  -->
<div class="txt_demo_1">
  <div class="w1160 clearfix">
    <ul class="newsin_list clearfix">
      @foreach( $articles as $article )
    <li>
      <a href="/news/{{$article->id}}">
        <span class="pic"><img src="{{$article->thumbnail}}"></span>
        <div class="txt">
          <h2>{{$article->title}}</h2>
          <p>{{$article->introduce}}</p>
          <span class="btn">more +</span>
        </div>
      </a>
    </li>
      @endforeach
  </ul>
{{$articles->links()}}
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection