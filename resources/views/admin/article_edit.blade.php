@extends('admin.base')
@section('content')
    <script>
        $('#left-bar .nav>li:nth-child(4)>.menu').addClass('on');
    </script>

    <h3 style="float: right;margin-top: 2%"><a href="@if( $article->pid  == 0 )
                /admin/article
              @else
                /article/{{ $article->pid  }}/look
               @endif">返回上级</a>
    </h3>

    <div class="main-wrap fadeInRight">
        <h3><a>修改【@if( $article ){{$article->title}}@else 顶层 @endif】</a></h3>
        <form class="form-horizontal" action="/admin/article/{{ $article->id  }}" enctype="multipart/form-data" method="post" >
            {{ csrf_field()  }}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">

                <hr style="border-bottom-color: #000000;height:2px;">
                @if (count($errors) > 0)
                    <div style="color: red">
                        <ul>
                            @if( is_object($errors) )
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            @else
                                {{ $errors }}
                            @endif
                        </ul>
                    </div>
                @endif

            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">栏目标题</label>
                <div class="col-md-8">
                    <input  class="form-control" name="title" value="{{$article->title}}"   autofocus>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-md-2 control-label">缩略图</label>
                <div class="col-md-8">
                    <input class="form-control"  name="thumbnail" type="file" >
                    @if( $article->thumbnail )
                        <img src="{{$article->thumbnail}}" width="200" />
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label  class="col-md-2 control-label">链接地址</label>
                <div class="col-md-8">
                    <input  class="form-control" name="link"  value="{{$article->link}}"  autofocus>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-md-2 control-label">排序数字</label>
                <div class="col-md-8">
                    <input  class="form-control" name="serial_number" value="{{$article->serial_number}}" type="number"  autofocus>
                </div>
            </div>

            {{--<div class="form-group">--}}
                {{--<label  class="col-md-2 control-label">是否设置导航</label>--}}
                {{--<div class="col-md-8">--}}
                    {{--<select name="is_nav" class="form-control">--}}
                        {{--<option value="0" @if( $article->is_nav == 0 ) selected @endif  >不设导航</option>--}}
                        {{--<option value="1" @if( $article->is_nav == 1 ) selected @endif  >设导航</option>--}}
                    {{--</select>--}}
                {{--</div>--}}
            {{--</div>--}}


            <div class="form-group">
                <label  class="col-md-2 control-label">简介</label>
                <div class="col-md-8">
                    <textarea class="form-control" rows="3"  name="introduce" >{{$article->introduce}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-md-2 control-label">正文</label>
                <div class="col-md-8">
                    <script id="container" name="comtent" type="text/plain"> </script>
                </div>
            </div>


            <div id="comtent" style="display:none;" ><?php echo  html_entity_decode($article->comtent) ?></div>

            <!-- 配置文件 -->
            <script type="text/javascript" src="/akl/Ueditor/ueditor.config.js"></script>
            <!-- 编辑器源码文件 -->
            <script type="text/javascript" src="/akl/Ueditor/ueditor.all.js"></script>
            <!-- 实例化编辑器 -->
            <script type="text/javascript">
                var ue = UE.getEditor('container', {
                    autoHeightEnabled: true,
                    autoFloatEnabled: true,
                    initialFrameWidth :  'auto',
                    initialFrameHeight: 400
                });
                ue.ready(function() {
                    ue.setContent($('#comtent').html());
                });

            </script>
            <input class="btn btn-primary" style="margin-left: 40%" type="submit" name="send" value="提交修改" />
        </form>
    </div>

@endsection