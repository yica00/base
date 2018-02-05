@extends('front.base')
@section('content')
<!-- bread -->
<div class="bread">
  <h2>课程中心</h2>
  <ul class="sublist">
    @foreach( session('header_nav') as $cate )
      @if( $cate->id == 3 )
        @foreach( $cate->articles as $art )
          <li class=" @if( $art->id == $article->pid ) on @endif">
            <a href="@if( $art->link ){{$art->link}}@else{{$cate->link}}/category/{{$art->id}}@endif" >{{$art->title}}</a>
          </li>
        @endforeach
      @endif
    @endforeach
  </ul>
</div>
<!-- wap_box -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- star -->
    <div class="txt_model_6">
      <div class="top">
        <h2 class="tit">{{$article->title}}</h2>
      </div>
      <div class="list">
        <dl>
          <dt>开班时间</dt>
          <dd>{{$article->introduce}}</dd>
        </dl>
        <dl>
          <dt>教师</dt>
          <dd>{{$article->link}}</dd>
        </dl>
        <dl>
          <dt>简介</dt>
          <dd>
            {!! $article->comtent !!}
          </dd>
        </dl>
      </div>
    
  </div>
    <div class="backpre clearfix">      
      {{--<a href="class_in.html" rel="next">上一篇</a>--}}
      {{--<a href="class_in.html" rel="prev">下一篇</a>--}}
      <a href="/class/category/{{$article->pid}}">返回上级目录</a>
    </div>
    <!-- end -->
  </div>
</div>
<!-- footer -->
<span class="bk60">&nbsp;</span>
@endsection