@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <h2>关于我们</h2>
  <ul class="sublist">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 2 )
        @foreach( $cate->articles as $art )
          <li class=" @if( $art->id == $team->id ) on @endif">
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<!-- wap_box -->
<div class="txt_demo_5">
  <div class="w1160 clearfix">
    <div class="pic">
      <img src="{{$team->thumbnail}}">
    </div>
    <div class="bt">
      <h2>{{$team->title}}</h2>
      {{--<h3><span></span></h3>--}}
      <p>补习科目：{{$team->link}}</p>
    </div>
    <div class="dis">
      {!! $team->comtent !!}
    </div>
  </div>
</div>
@endsection