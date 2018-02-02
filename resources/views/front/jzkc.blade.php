@extends('front.base')
@section('content')
<!-- banner -->
  
<div class="bread">
  <span class="bk30">&nbsp;</span>
  <h2>Course Center</h2>
  <p class="p1">课程中心</p>
  <p class="p2">&nbsp;</p>
</div>
<ul class="sublist">
    @foreach( session('header_nav') as $cate )
        @if( $cate->id == 3 )
            @foreach( $cate->articles as $art )
                <li >
                    <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
                </li>
            @endforeach
        @endif
    @endforeach
</ul>
<!--  -->
<div class="txt_demo_1">
  <div class="w1160 clearfix">
    <div class="slideTxtBox_kc">
      <div class="hd">
        <ul>
            @foreach( $articles as $article )
            <li>{{$article->title}}</li>
            @endforeach
        </ul>
      </div>
      <div class="bd">
          @foreach( $articles as $article )
        <div>
            {!! $article->comtent !!}
        </div>
          @endforeach
      </div>
    </div>
    <script type="text/javascript">jQuery(".slideTxtBox_kc").slide({trigger:"click"});</script>
  </div>
</div>
<span class="bk60">&nbsp;</span>
<!--  -->
@endsection