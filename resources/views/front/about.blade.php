@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <h2>关于我们</h2>
  <ul class="sublist">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 2 )
        @foreach( $cate->articles as $art )
          <li class=" @if( $art->id == $id ) on @endif">
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<!-- wap_box -->
<div class="w1160 clearfix">
  <!-- star -->
  <div class="txt_model_1">
    {!! $article->comtent !!}
  </div>
  <!-- end -->
</div>
<span class="bk60">&nbsp;</span>
<!-- footer -->
@endsection