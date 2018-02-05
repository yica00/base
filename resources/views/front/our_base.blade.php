@extends('front.base')
@section('content')
    <link rel="stylesheet" href="/css/paginate.css">
<!-- bread -->
<div class="bread">
  <h2>学习环境</h2>
</div>
<!-- wap_box -->
<div class="wap_box">
  <div class="w1160 clearfix">
    <!-- star -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox-1.3.4.css" media="screen">
  <script type="text/javascript" src="/js/jquery.fancybox-1.3.4.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
       
      $("a[rel=images_group]").fancybox({
        'transitionIn':'none',
        'transitionOut':'none',
        'titlePosition':'over',
        'titleFormat':function(title, currentArray, currentIndex, currentOpts) {
          return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
      });
    });
  </script>
  <div class="tea_act_one clearfix" id="product_big">
      @foreach( $articles as $article )
    <a rel="images_group" href="{{$article->thumbnail}}"><img src="{{$article->thumbnail}}" alt=""><div class="txt">{{$article->title}}</div></a>
      @endforeach
  </div>

    <!-- end -->
  </div>
</div>

    {{$articles->links()}}
<!-- footer -->
@endsection